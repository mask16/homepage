# -*- coding: utf-8 -*-
"""GNUBoard 스킨 로컬 미리보기 서버 (PHP 없이 동작)."""
from __future__ import print_function

import os
import re
import mimetypes
import json
from urllib.parse import unquote, urlparse
from http.server import ThreadingHTTPServer, SimpleHTTPRequestHandler
from urllib.request import Request, urlopen

ROOT = os.path.dirname(os.path.abspath(__file__))
PORT = 8080
LIVE_HOSTS = [
    "https://hyundaipns.com",
    "https://www.hyundaipns.com",
]

LANGS = [
    ("kor", "한국어"),
    ("eng", "English"),
    ("chn", "中文"),
    ("jpn", "日本語"),
    ("deu", "Deutsch"),
    ("esp", "Español"),
    ("fra", "Français"),
    ("prt", "Português"),
    ("rus", "Русский"),
    ("vnm", "Tiếng Việt"),
]


def html_esc(s):
    return (
        str(s)
        .replace("&", "&amp;")
        .replace("<", "&lt;")
        .replace(">", "&gt;")
        .replace('"', "&quot;")
    )


def menu_item(name, link, children=None):
    return {"me_use": 1, "me_name": name, "me_link": "", "link": link, "menuList": children or []}


def hdp_menu(host_url):
    return [
        menu_item("기업소개", host_url + "/about/hwbc", [
            menu_item("HWBC", host_url + "/about/hwbc"),
            menu_item("CEO 인사말", host_url + "/about/ceo"),
            menu_item("연혁", host_url + "/about/history"),
        ]),
        menu_item("사업소개", host_url + "/product/weldMaterialList", [
            menu_item("용접기사업", host_url + "/product/weldMaterialList", [
                menu_item("용접기", host_url + "/product/weldMaterialList"),
                menu_item("Downloads", host_url + "/product/download"),
                menu_item("연구소 소개", host_url + "/product/study1"),
                menu_item("연구분야", host_url + "/product/study2"),
                menu_item("제품개발 방향", host_url + "/product/study3"),
            ]),
        ]),
        menu_item("지속가능경영", host_url + "/sus/ethicsAbout", [
            menu_item("윤리경영", host_url + "/sus/ethicsAbout", [
                menu_item("윤리경영 소개", host_url + "/sus/ethicsAbout"),
                menu_item("윤리경영 헌장", host_url + "/sus/ethicsCharter"),
                menu_item("윤리경영 운영", host_url + "/sus/ethicsOperate"),
            ]),
            menu_item("규범 및 실천지침", host_url + "/sus/normsList1"),
            menu_item("비윤리 신고", host_url + "/sus/unethicalReport"),
        ]),
        menu_item("채용정보", host_url + "/recruit/rule", [
            menu_item("인사제도", host_url + "/recruit/rule"),
            menu_item("복리후생", host_url + "/recruit/welfare"),
        ]),
        menu_item("고객지원", host_url + "/support/contactUs", [
            menu_item("Contact us", host_url + "/support/contactUs"),
            menu_item("News", host_url + "/support/news"),
        ]),
    ]


def render_nav(site_menu):
    html = []
    for menu1 in site_menu:
        html.append('				<li class="menuWrap">')
        html.append('					<a href="%s" class="navDepth01">%s</a>' % (html_esc(menu1["link"]), html_esc(menu1["me_name"])))
        if menu1["menuList"]:
            html.append('					<ul class="navDepthWrap">')
            for menu2 in menu1["menuList"]:
                html.append("						<li>")
                html.append('							<a href="%s" target="_self">%s</a>' % (html_esc(menu2["link"]), html_esc(menu2["me_name"])))
                if menu2["menuList"]:
                    html.append('							<ul class="navDepth2">')
                    for menu3 in menu2["menuList"]:
                        html.append('								<li><a href="%s" target="_self">%s</a></li>' % (html_esc(menu3["link"]), html_esc(menu3["me_name"])))
                    html.append("							</ul>")
                html.append("						</li>")
            html.append("					</ul>")
        html.append("				</li>")
    return "\n".join(html)


def render_langs(shost):
    rows = []
    for key, name in LANGS:
        if key != "kor":
            rows.append('<li><a href="/%s/%s/index" target="_blank">%s</a></li>' % (key, shost, html_esc(name)))
    return "\n".join(rows)


SUBNAV = {
    "about": ("기업소개", [
        ("HWBC", "/about/hwbc"),
        ("CEO 인사말", "/about/ceo"),
        ("연혁", "/about/history"),
    ]),
    "product": ("사업소개", [
        ("용접기", "/product/weldMaterialList"),
        ("Downloads", "/product/download"),
        ("연구소 소개", "/product/study1"),
        ("연구분야", "/product/study2"),
        ("제품개발 방향", "/product/study3"),
    ]),
    "sus": ("지속가능경영", [
        ("윤리경영 소개", "/sus/ethicsAbout"),
        ("윤리경영 헌장", "/sus/ethicsCharter"),
        ("윤리경영 운영", "/sus/ethicsOperate"),
        ("윤리경영 규범", "/sus/normsList1"),
        ("윤리경영 실천지침", "/sus/normsList2"),
        ("신고하기", "/sus/unethicalReport"),
        ("신고 처리 결과", "/sus/unethicalResult"),
    ]),
    "recruit": ("채용정보", [
        ("인사제도", "/recruit/rule"),
        ("복리후생", "/recruit/welfare"),
    ]),
    "support": ("고객지원", [
        ("Contact us", "/support/contactUs"),
        ("News", "/support/news"),
    ]),
}


def subnav_html(host_url, page_key):
    prefix = page_key.split(".")[0]
    if prefix not in SUBNAV:
        return "", ""
    title, items = SUBNAV[prefix]
    lis = "".join('<li><a href="%s%s">%s</a></li>' % (host_url, path, html_esc(name)) for name, path in items)
    block = '<div class="subNav">\n\t\t\t<p>%s</p>\n\t\t\t<ul>%s</ul>\n\t\t</div>' % (html_esc(title), lis)
    return block, ""


def category_items(skin_url):
    return [
        {"mc_no": "1", "mc_name": "인버터 용접기", "mc_name_en": "Inverter Welder", "mc_file_url": skin_url + "/img/content/product_machine01.jpg"},
        {"mc_no": "2", "mc_name": "CO2 용접기", "mc_name_en": "CO2 Welder", "mc_file_url": skin_url + "/img/content/product_machine02.jpg"},
        {"mc_no": "3", "mc_name": "TIG 용접기", "mc_name_en": "TIG Welder", "mc_file_url": skin_url + "/img/content/product_machine03.jpg"},
        {"mc_no": "4", "mc_name": "플라즈마", "mc_name_en": "Plasma", "mc_file_url": skin_url + "/img/content/product_machine04.jpg"},
    ]


def news_items(host_url, skin_url):
    return [
        {
            "seq": "1",
            "title": "현대피엔에스 소식",
            "newsDt": "2026-01-01",
            "fileImage_url": skin_url + "/img/main/visual01.jpg",
        }
    ]


def render_category_loop(host_url, categories):
    out = []
    for item in categories:
        out.append(
            '\t\t\t\t\t<li class="weldImage">\n'
            '\t\t\t\t\t\t<a href="%s/product/weldMaterialDetail?cate=%s" style="cursor: pointer; background-image: url(\'%s\');">\n'
            '\t\t\t\t\t\t<span class="titKor">%s</span>\n'
            '\t\t\t\t\t\t<span class="titEng">%s</span>\n'
            "\t\t\t\t\t\t</a>\n"
            "\t\t\t\t\t</li>"
            % (host_url, item["mc_no"], item["mc_file_url"], html_esc(item["mc_name"]), html_esc(item["mc_name_en"]))
        )
    return "\n".join(out)


def render_news_loop(host_url, news_list):
    out = []
    for item in news_list:
        out.append(
            "\t\t\t\t\t<li>\n"
            '\t\t\t\t\t\t<a href="%s/support/newsDetail?seq=%s">\n'
            '\t\t\t\t\t\t\t<span class="mainNoticeBg" style="background-image:url(%s)"></span>\n'
            '\t\t\t\t\t\t\t<span class="mainNoticeText">\n'
            '\t\t\t\t\t\t\t\t<span class="mainNoticeTit">%s</span>\n'
            '\t\t\t\t\t\t\t\t<span class="mainNoticeDate">%s</span>\n'
            '\t\t\t\t\t\t\t\t<span class="moreBtn icoMotion">MORE<i class="ico ico-arrow"></i></span>\n'
            "\t\t\t\t\t\t\t</span>\n"
            "\t\t\t\t\t\t</a>\n"
            "\t\t\t\t\t</li>"
            % (host_url, item["seq"], item["fileImage_url"], html_esc(item["title"]), html_esc(item["newsDt"]))
        )
    return "\n".join(out)


PHP_BLOCK = re.compile(r"<\?(?:php|=)?[\s\S]*?\?>", re.I)


def apply_ctx(text, ctx):
    def repl(match):
        expr = match.group(1).strip()
        expr = re.sub(r"^stripslashes\((.+)\)$", r"\1", expr)
        expr = re.sub(r"^strtoupper\((.+)\)$", r"\1", expr)
        expr = expr.replace("G5_URL", "''")
        # ternary isset
        m = re.match(r"isset\(\$(\w+)\)\s*\?\s*\$\1\s*:\s*''$", expr)
        if m:
            return str(ctx.get(m.group(1), ""))
        m = re.match(r"\(\$config\['cf_editor'\] && \$board\['bo_use_dhtml_editor'\]\)\?\$config\['cf_editor'\]:''$", expr)
        if m:
            return ""
        m = re.match(r"count\(\$(\w+)\)$", expr)
        if m:
            val = ctx.get(m.group(1), [])
            return str(len(val) if isinstance(val, list) else 0)
        if expr in ctx:
            return str(ctx[expr])
        if expr.startswith("$"):
            name = expr[1:]
            # $arr['key']
            m = re.match(r"^(\w+)(\[.+\])*$", name)
            if m:
                return str(lookup(ctx, expr))
        return ""

    text = re.sub(r"<\?=\s*(.+?)\s*\?>", repl, text)
    return text


def lookup(ctx, expr):
    expr = expr.strip()
    if expr.startswith("$"):
        expr = expr[1:]
    m = re.match(r"^(\w+)(.*)$", expr)
    if not m:
        return ""
    val = ctx.get(m.group(1), ctx.get("$" + m.group(1), ""))
    rest = m.group(2)
    for key in re.findall(r"\['([^']+)'\]|\[(\d+)\]", rest):
        k = key[0] or key[1]
        if isinstance(val, dict):
            val = val.get(k, "")
        elif isinstance(val, list) and k.isdigit():
            idx = int(k)
            val = val[idx] if 0 <= idx < len(val) else ""
        else:
            return ""
    return val if val is not None else ""


def strip_php(text, ctx):
    text = re.sub(r"<\?php\s+if\s*\(\s*!defined\('_GNUBOARD_'\)\s*\)\s*EXIT\s*;\s*\?>", "", text, flags=re.I)
    text = re.sub(r"<\?php\s+include_once\s+G5_DC_PATH\s*\.\s*'/popup\.php'\s*\?>", "", text, flags=re.I)
    text = re.sub(r"<\?php\s+run_event\('tail_sub'\);\s*\?>", "", text)
    text = re.sub(r"<\?php\s+echo html_end\(\);.*? \?>", "", text)

    # menu loop in head
    text = re.sub(
        r"<\?php\s*// Depth = 0 : menu1[\s\S]*?unset\(\$no\);\s*\?>",
        ctx.get("_nav_html", ""),
        text,
    )
    text = re.sub(
        r"<\?php\s*\$lang_list = code_array_rows\('lang_code','0'\);[\s\S]*?\?>",
        ctx.get("_lang_html", ""),
        text,
    )

    sub0, _ = ctx.get("_subnav", ("", ""))
    text = re.sub(
        r"<\?php if\(\s*isset\(\$SubNav\[0\]\)\s*\)\{\?>[\s\S]*?<\?php \}\?>\s*<\?php if\(\s*isset\(\$SubNav\[1\]\)\s*\)\{\?>[\s\S]*?<\?php \}\?>",
        sub0,
        text,
    )

    text = re.sub(
        r"<\?php for\(\s*\$i\s*=\s*0;\s*\$i\s*<\s*count\(\$category_list\);\s*\$i\+\+\s*\)\{\?>[\s\S]*?<\?php \}?>",
        ctx.get("_category_html", ""),
        text,
    )
    text = re.sub(
        r"<\?php\s*for\(\s*\$i\s*=\s*0;\s*\$i\s*<\s*count\(\$news_list\);\s*\$i\+\+\s*\)\{\s*\?>[\s\S]*?<\?php \}?>",
        ctx.get("_news_html", ""),
        text,
    )

    text = apply_ctx(text, ctx)
    text = PHP_BLOCK.sub("", text)
    return text


def read_text(path):
    with open(path, "r", encoding="utf-8", errors="ignore") as f:
        return f.read()


def find_skin(skin_dir, page_key):
    for name in (page_key + ".skin.php", page_key + ".php"):
        p = os.path.join(skin_dir, name)
        if os.path.isfile(p):
            return p
    return None


def render_page(schar, shost, page_key, use_root_index=False):
    skin_dir = os.path.join(ROOT, schar, shost)
    host_url = "/%s/%s" % (schar, shost)
    skin_url = host_url
    if use_root_index:
        skin_file = os.path.join(ROOT, "index.skin.php")
        skin_dir = os.path.join(ROOT, "kor", "hdp")
        host_url = "/kor/hdp"
        skin_url = "/kor/hdp"
        schar, shost = "kor", "hdp"
    else:
        skin_file = find_skin(skin_dir, page_key)
    if not skin_file:
        return None

    site_menu = hdp_menu(host_url) if shost == "hdp" else [
        menu_item("Home", host_url + "/index"),
        menu_item("About", host_url + "/about/hwbc", [
            menu_item("HWBC", host_url + "/about/hwbc"),
            menu_item("CEO", host_url + "/about/ceo"),
            menu_item("History", host_url + "/about/history"),
        ]),
    ]
    cats = category_items(skin_url)
    news = news_items(host_url, skin_url)
    sub0, sub1 = subnav_html(host_url, page_key)
    ctx = {
        "$host_url": host_url,
        "$skin_url": skin_url,
        "$schar": schar,
        "$shost": shost,
        "G5_URL": "",
        "G5_BBS_URL": "/bbs",
        "G5_JS_URL": "/g5-js",
        "G5_IS_MOBILE": "",
        "G5_COOKIE_DOMAIN": "",
        "G5_VER": "preview",
        "$g5_is_member": "",
        "$is_member": "",
        "$is_admin": "",
        "$bo_table": "",
        "$sca": "",
        "_nav_html": render_nav(site_menu),
        "_lang_html": render_langs(shost),
        "_subnav": (sub0, sub1),
        "_category_html": render_category_loop(host_url, cats),
        "_news_html": render_news_loop(host_url, news),
        "host_url": host_url,
        "skin_url": skin_url,
        "schar": schar,
        "shost": shost,
    }
    # also map without $
    for k, v in list(ctx.items()):
        if k.startswith("$"):
            ctx[k[1:]] = v

    parts = []
    head = os.path.join(skin_dir, "head.sub.skin.php")
    tail = os.path.join(skin_dir, "tail.sub.skin.php")
    if os.path.isfile(head):
        parts.append(strip_php(read_text(head), ctx))
    parts.append(strip_php(read_text(skin_file), ctx))
    if os.path.isfile(tail):
        parts.append(strip_php(read_text(tail), ctx))
    return "\n".join(parts)


BIN_EXT = {
    ".jpg", ".jpeg", ".png", ".gif", ".webp", ".ico", ".svg",
    ".woff", ".woff2", ".ttf", ".eot", ".otf", ".mp4", ".webm",
    ".css", ".js", ".map",
}


class Handler(SimpleHTTPRequestHandler):
    def __init__(self, *args, **kwargs):
        super().__init__(*args, directory=ROOT, **kwargs)

    def log_message(self, fmt, *args):
        print("[%s] %s" % (self.log_date_time_string(), fmt % args))

    def do_GET(self):
        parsed = urlparse(self.path)
        path = unquote(parsed.path)
        if path == "":
            path = "/"
        local = os.path.normpath(os.path.join(ROOT, path.lstrip("/")))
        if os.path.commonpath([ROOT, local]) != ROOT:
            self.send_error(403)
            return

        ext = os.path.splitext(path)[1].lower()
        if path != "/" and os.path.isfile(local):
            return SimpleHTTPRequestHandler.do_GET(self)

        if path != "/" and ext in BIN_EXT:
            data, ctype = fetch_remote(path)
            if data is not None:
                self.send_response(200)
                self.send_header("Content-Type", ctype)
                self.send_header("Cache-Control", "public, max-age=86400")
                self.send_header("Content-Length", str(len(data)))
                self.end_headers()
                self.wfile.write(data)
                return
            self.send_error(404, "Not found: " + path)
            return

        html = route_html(path)
        if html is None:
            body = (
                '<meta charset="utf-8"><p>페이지를 찾을 수 없습니다: %s</p>'
                '<p><a href="/kor/hdp/index">한국어 메인으로</a></p>'
            ) % html_esc(path)
            self.send_response(404)
            self.send_header("Content-Type", "text/html; charset=utf-8")
            self.send_header("Content-Length", str(len(body.encode("utf-8"))))
            self.end_headers()
            self.wfile.write(body.encode("utf-8"))
            return
        data = html.encode("utf-8")
        self.send_response(200)
        self.send_header("Content-Type", "text/html; charset=utf-8")
        self.send_header("Content-Length", str(len(data)))
        self.end_headers()
        self.wfile.write(data)


def route_html(path):
    parts = [p for p in path.split("/") if p]
    if not parts:
        return render_page("kor", "hdp", "index", use_root_index=True)
    if len(parts) == 1:
        return render_page(parts[0], "hdp", "index")
    schar = re.sub(r"[^a-z]", "", parts[0].lower()) or "kor"
    shost = re.sub(r"[^a-z]", "", parts[1].lower()) or "hdp"
    rest = parts[2:]
    if not rest:
        page_key = "index"
    elif len(rest) == 1:
        page_key = rest[0]
    else:
        page_key = rest[0] + "." + rest[1]
    page_key = re.sub(r"[^a-zA-Z0-9._-]", "", page_key)
    return render_page(schar, shost, page_key)


def fetch_remote(path):
    ctype = mimetypes.guess_type(path)[0] or "application/octet-stream"
    for host in LIVE_HOSTS:
        for suffix in (path, "/skin/dc" + path):
            url = host + suffix
            try:
                req = Request(url, headers={"User-Agent": "PNS-Preview"})
                with urlopen(req, timeout=6) as resp:
                    if getattr(resp, "status", 200) >= 400:
                        continue
                    data = resp.read()
                    if data:
                        return data, resp.headers.get("Content-Type", ctype)
            except Exception:
                continue
    return None, ctype


if __name__ == "__main__":
    os.chdir(ROOT)
    server = ThreadingHTTPServer(("127.0.0.1", PORT), Handler)
    print("PNS preview: http://127.0.0.1:%d/kor/hdp/index" % PORT)
    server.serve_forever()

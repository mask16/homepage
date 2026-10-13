<?php
/**
 * GNUBoard 스킨 로컬 미리보기 라우터
 * 사용: php -S 127.0.0.1:8080 preview_router.php
 */
$root = str_replace('\\', '/', __DIR__);
$uri  = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = rawurldecode($uri);
if ($path === '' || $path === false) $path = '/';

$local = $root . $path;
if ($path !== '/' && is_file($local)) {
	return false;
}

$ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
static $binExt = ['jpg','jpeg','png','gif','webp','ico','svg','woff','woff2','ttf','eot','otf','mp4','webm'];
if ($path !== '/' && in_array($ext, $binExt, true)) {
	$candidates = [
		'https://hyundaipns.com' . $path,
		'https://hyundaipns.com/skin/dc' . $path,
	];
	foreach ($candidates as $url) {
		$data = preview_fetch($url);
		if ($data !== null) {
			header('Content-Type: ' . preview_mime($ext));
			header('Cache-Control: public, max-age=86400');
			echo $data;
			return true;
		}
	}
	http_response_code(404);
	header('Content-Type: text/plain; charset=utf-8');
	echo 'Not found: ' . $path;
	return true;
}

if ($path === '/js/common.js' || $path === '/g5-js/common.js') {
	header('Content-Type: application/javascript');
	echo "/* gnuboard stub */\n";
	return true;
}

define('_GNUBOARD_', true);
define('G5_URL', '');
define('G5_BBS_URL', '/bbs');
define('G5_JS_URL', '/g5-js');
define('G5_IS_MOBILE', '');
define('G5_COOKIE_DOMAIN', '');
define('G5_VER', 'preview');
define('G5_DC_PATH', $root . '/preview_stub');

if (!is_dir(G5_DC_PATH)) {
	@mkdir(G5_DC_PATH, 0777, true);
}
$popup = G5_DC_PATH . '/popup.php';
if (!is_file($popup)) {
	file_put_contents($popup, "<?php\n");
}

function get_microtime() { return microtime(true); }
function run_event($event) {}
function html_end() { return ''; }
function code_array_rows($code, $unused = '0') {
	return [
		['code_key' => 'kor', 'code_name' => '한국어'],
		['code_key' => 'eng', 'code_name' => 'English'],
		['code_key' => 'chn', 'code_name' => '中文'],
		['code_key' => 'jpn', 'code_name' => '日本語'],
		['code_key' => 'deu', 'code_name' => 'Deutsch'],
		['code_key' => 'esp', 'code_name' => 'Español'],
		['code_key' => 'fra', 'code_name' => 'Français'],
		['code_key' => 'prt', 'code_name' => 'Português'],
		['code_key' => 'rus', 'code_name' => 'Русский'],
		['code_key' => 'vnm', 'code_name' => 'Tiếng Việt'],
	];
}

$config = ['cf_title' => 'HYUNDAI PNS', 'cf_editor' => ''];
$board = ['bo_use_dhtml_editor' => ''];
$g5 = ['title' => 'HYUNDAI PNS'];
$g5_debug = [];
$is_member = '';
$is_admin = '';
$bo_table = '';
$sca = '';

$parts = array_values(array_filter(explode('/', $path), 'strlen'));
if (count($parts) === 0) {
	$schar = 'kor';
	$shost = 'hdp';
	$pageKey = 'index';
} else {
	$schar = preg_replace('/[^a-z]/', '', strtolower($parts[0] ?? 'kor')) ?: 'kor';
	$shost = preg_replace('/[^a-z]/', '', strtolower($parts[1] ?? 'hdp')) ?: 'hdp';
	$rest = array_slice($parts, 2);
	if (count($rest) === 0) {
		$pageKey = 'index';
	} else if (count($rest) === 1) {
		$pageKey = $rest[0];
	} else {
		$pageKey = $rest[0] . '.' . $rest[1];
	}
	$pageKey = preg_replace('/[^a-zA-Z0-9._-]/', '', $pageKey);
}

$skin_dir = $root . '/' . $schar . '/' . $shost;
if (!is_dir($skin_dir)) {
	http_response_code(404);
	header('Content-Type: text/html; charset=utf-8');
	echo '<meta charset="utf-8"><p>스킨 폴더가 없습니다: ' . htmlspecialchars($schar . '/' . $shost) . '</p>';
	return true;
}

$skin_url = '/' . $schar . '/' . $shost;
$host_url = '/' . $schar . '/' . $shost;

$skinFile = null;
foreach ([$pageKey . '.skin.php', $pageKey . '.php'] as $candidate) {
	$try = $skin_dir . '/' . $candidate;
	if (is_file($try)) {
		$skinFile = $try;
		break;
	}
}
if ($skinFile === null && $pageKey === 'index' && is_file($root . '/index.skin.php') && $path === '/') {
	$skinFile = $root . '/index.skin.php';
	$skin_dir = $root . '/kor/hdp';
	$skin_url = '/kor/hdp';
	$host_url = '/kor/hdp';
	$schar = 'kor';
	$shost = 'hdp';
}

if ($skinFile === null) {
	http_response_code(404);
	header('Content-Type: text/html; charset=utf-8');
	echo '<meta charset="utf-8"><p>페이지를 찾을 수 없습니다: ' . htmlspecialchars($path) . '</p>';
	echo '<p><a href="/kor/hdp/index">한국어 메인으로</a></p>';
	return true;
}

$site_menu = preview_menu($host_url, $shost);
$SubNav = preview_subnav($host_url, $pageKey);
$category_list = [
	['mc_no' => '1', 'mc_name' => '인버터 용접기', 'mc_name_en' => 'Inverter Welder', 'mc_file_url' => $skin_url . '/img/content/product_machine01.jpg'],
	['mc_no' => '2', 'mc_name' => 'CO2 용접기', 'mc_name_en' => 'CO2 Welder', 'mc_file_url' => $skin_url . '/img/content/product_machine02.jpg'],
	['mc_no' => '3', 'mc_name' => 'TIG 용접기', 'mc_name_en' => 'TIG Welder', 'mc_file_url' => $skin_url . '/img/content/product_machine03.jpg'],
	['mc_no' => '4', 'mc_name' => '플라즈마', 'mc_name_en' => 'Plasma', 'mc_file_url' => $skin_url . '/img/content/product_machine04.jpg'],
];
$news_list = [
	['seq' => '1', 'title' => '현대피엔에스 소식', 'newsDt' => '2026-01-01', 'fileImage_url' => $skin_url . '/img/main/visual01.jpg'],
];
$recruitList = $recruitList2 = $recruitList3 = $recruitList4 = $recruitList5 = [];
$list = [];
$view = ['wr_subject' => '', 'wr_content' => '', 'wr_datetime' => ''];
$total_count = 0;
$page = 1;
$total_page = 1;
$write_pages = '';

header('Content-Type: text/html; charset=utf-8');
$head = $skin_dir . '/head.sub.skin.php';
$tail = $skin_dir . '/tail.sub.skin.php';
if (is_file($head)) include $head;
include $skinFile;
if (is_file($tail)) include $tail;
return true;

function preview_menu($host_url, $shost) {
	if ($shost === 'hdp') {
		return [
			preview_item('기업소개', $host_url . '/about/hwbc', [
				preview_item('HWBC', $host_url . '/about/hwbc'),
				preview_item('CEO 인사말', $host_url . '/about/ceo'),
				preview_item('연혁', $host_url . '/about/history'),
			]),
			preview_item('사업소개', $host_url . '/product/weldMaterialList', [
				preview_item('용접기사업', $host_url . '/product/weldMaterialList', [
					preview_item('용접기', $host_url . '/product/weldMaterialList'),
					preview_item('Downloads', $host_url . '/product/download'),
					preview_item('연구소 소개', $host_url . '/product/study1'),
					preview_item('연구분야', $host_url . '/product/study2'),
					preview_item('제품개발 방향', $host_url . '/product/study3'),
				]),
			]),
			preview_item('지속가능경영', $host_url . '/sus/ethicsAbout', [
				preview_item('윤리경영', $host_url . '/sus/ethicsAbout', [
					preview_item('윤리경영 소개', $host_url . '/sus/ethicsAbout'),
					preview_item('윤리경영 헌장', $host_url . '/sus/ethicsCharter'),
					preview_item('윤리경영 운영', $host_url . '/sus/ethicsOperate'),
				]),
				preview_item('규범 및 실천지침', $host_url . '/sus/normsList1', [
					preview_item('윤리경영 규범', $host_url . '/sus/normsList1'),
					preview_item('윤리경영 실천지침', $host_url . '/sus/normsList2'),
				]),
				preview_item('비윤리 신고', $host_url . '/sus/unethicalReport', [
					preview_item('신고하기', $host_url . '/sus/unethicalReport'),
					preview_item('신고 처리 결과', $host_url . '/sus/unethicalResult'),
				]),
			]),
			preview_item('고객지원', $host_url . '/support/contactUs', [
				preview_item('Contact us', $host_url . '/support/contactUs'),
				preview_item('News', $host_url . '/support/news'),
			]),
			preview_item('채용정보', $host_url . '/recruit/rule', [
				preview_item('인사제도', $host_url . '/recruit/rule'),
				preview_item('복리후생', $host_url . '/recruit/welfare'),
			]),
		];
	}
	return [
		preview_item('Home', $host_url . '/index'),
		preview_item('About', $host_url . '/about/hwbc', [
			preview_item('HWBC', $host_url . '/about/hwbc'),
			preview_item('CEO', $host_url . '/about/ceo'),
			preview_item('History', $host_url . '/about/history'),
		]),
	];
}

function preview_item($name, $link, $children = []) {
	return [
		'me_use' => 1,
		'me_name' => $name,
		'me_link' => '',
		'me_skey' => '',
		'link' => $link,
		'menuList' => $children,
	];
}

function preview_subnav($host_url, $pageKey) {
	$map = [
		'about' => ['기업소개', [
			['HWBC', $host_url . '/about/hwbc'],
			['CEO 인사말', $host_url . '/about/ceo'],
			['연혁', $host_url . '/about/history'],
		]],
		'product' => ['사업소개', [
			['용접기', $host_url . '/product/weldMaterialList'],
			['Downloads', $host_url . '/product/download'],
			['연구소 소개', $host_url . '/product/study1'],
			['연구분야', $host_url . '/product/study2'],
			['제품개발 방향', $host_url . '/product/study3'],
		]],
		'sus' => ['지속가능경영', [
			['윤리경영 소개', $host_url . '/sus/ethicsAbout'],
			['윤리경영 헌장', $host_url . '/sus/ethicsCharter'],
			['윤리경영 운영', $host_url . '/sus/ethicsOperate'],
		]],
		'recruit' => ['채용정보', [
			['인사제도', $host_url . '/recruit/rule'],
			['복리후생', $host_url . '/recruit/welfare'],
		]],
		'support' => ['고객지원', [
			['Contact us', $host_url . '/support/contactUs'],
			['News', $host_url . '/support/news'],
		]],
	];
	$prefix = explode('.', $pageKey)[0];
	if (!isset($map[$prefix])) return [];
	$listHtml = '';
	foreach ($map[$prefix][1] as $item) {
		$listHtml .= '<li><a href="' . htmlspecialchars($item[1]) . '">' . htmlspecialchars($item[0]) . '</a></li>';
	}
	return [[
		'title' => $map[$prefix][0],
		'list' => $listHtml,
	]];
}

function preview_mime($ext) {
	$map = [
		'jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png',
		'gif' => 'image/gif', 'webp' => 'image/webp', 'ico' => 'image/x-icon',
		'svg' => 'image/svg+xml', 'woff' => 'font/woff', 'woff2' => 'font/woff2',
		'ttf' => 'font/ttf', 'eot' => 'application/vnd.ms-fontobject',
		'otf' => 'font/otf', 'mp4' => 'video/mp4', 'webm' => 'video/webm',
	];
	return $map[$ext] ?? 'application/octet-stream';
}

function preview_fetch($url) {
	$ctx = stream_context_create([
		'http' => ['timeout' => 6, 'ignore_errors' => true, 'header' => "User-Agent: PNS-Preview\r\n"],
		'ssl' => ['verify_peer' => false, 'verify_peer_name' => false],
	]);
	$data = @file_get_contents($url, false, $ctx);
	if ($data === false || $data === '') return null;
	if (isset($http_response_header[0]) && preg_match('/\s(404|403|500)\s/', $http_response_header[0])) return null;
	return $data;
}

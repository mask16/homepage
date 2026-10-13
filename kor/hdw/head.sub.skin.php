<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/head.sub.skin.php
+ Description	: head.sub.skin
:	이 파일은 새로운 파일 생성시 반드시 포함되어야 함
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();
$config['cf_title']	= "HYUNDAI WELDING";

// ─────────────────────────────────────────────────────────────
// SEO 헤드 구성: URL 매핑 → 동적 메타 생성
// ─────────────────────────────────────────────────────────────
$default_title = 'HYUNDAI WELDING | 현대종합금속';
$default_desc  = '상상을 뛰어넘어 실천하는 Best Company';

$seo_title      = $seo_title     ?? null;
$seo_desc       = $seo_desc      ?? null;
$seo_og_image   = $seo_og_image  ?? '/hdw_og.jpg';
$seo_canonical  = $seo_canonical ?? ('https://' . ($_SERVER['HTTP_HOST'] ?? 'www.hyundaiwelding.com') . ($_SERVER['REQUEST_URI'] ?? '/'));

// URL 기반 매핑
$uri = $_SERVER['REQUEST_URI'] ?? '';
switch (true) {
  // ── KOR
  case (strpos($uri, '/kor/hdw/product/bwtsHiBallastNF') === 0):
    $seo_title = 'HiBallast NF - 선박평형수 처리장치(BWTS)';
    $seo_desc  = 'Filter가 없는 간접식 전기분해 타입의 BWTS';
    break;

  case (strpos($uri, '/kor/hdw/product/bwtsHiQAMP') === 0):
    $seo_title = 'HiQ-AMP - 선박 육상 전원 공급(OPS) 시스템';
    $seo_desc  = 'IEC/ISO/IEEE 80005-1 및 주요 선급 요건을 충족하는 모듈형 육상 전원 공급 시스템';
    break;

  case (strpos($uri, '/kor/hdw/product/bwtsHiQFO') === 0):
    $seo_title = 'HiQ-FO - Fuel Oil Supply System';
    $seo_desc  = '컴팩트하고 모듈화된 선박 연료유 공급 시스템';
    break;

  case (strpos($uri, '/kor/hdw/product/bwtsN2GEN') === 0):
    $seo_title = '질소 발생 장치 (N2 Generator)';
    $seo_desc  = '선박용 PSA 타입의 N₂ Generator 전문 공급';
    break;

  case (strpos($uri, '/kor/hdw/product/bwtsHiCon') === 0):
    $seo_title = 'Hi-CON - 시스템 제어장비';
    $seo_desc  = 'BWTS, FGSS, SCR 등 다양한 분야에 자동화 시스템 공급이 가능한 제어기';
    break;

  case (strpos($uri, '/kor/hdw/product/bwtsHiQRMS') === 0):
    $seo_title = 'HiQ-RMS - BWTS Remote Monitoring System';
    $seo_desc  = '사이버 보안 요건(IACS UR E27) 준수 원격 모니터링 시스템';
    break;

  case (strpos($uri, '/kor/hdw/product/bwtsHiPower') === 0):
    $seo_title = '전기유압 액추에이터 밸브';
    $seo_desc  = 'Hi-PowerV는 전기유압 액추에이터로 구동되는 밸브입니다.';
    break;

  case (strpos($uri, '/kor/hdw/product/bwtsHiSimul') === 0):
    $seo_title = 'HiBallast BWTS Control System 시뮬레이션 키트';
    $seo_desc  = 'Hi-Simul K는 BWTS 제어시스템을 이해하고 실습할 수 있는 교육용 시뮬레이터입니다.';
    break;

  case (strpos($uri, '/kor/hdw/product/bwtsHabonim') === 0):
    $seo_title = 'HABONIM 극저온 볼밸브';
    $seo_desc  = '고압·극저온 환경에 적합한 산업용 고급 볼 밸브 및 공압 액추에이터 공급';
    break;
}

// 최종 출력값
$title_out = strip_tags($seo_title ?: $default_title);
$desc_out  = strip_tags($seo_desc  ?: $default_desc);

// 기존 g5 타이틀 처리(내부 상태바/브라우저 타이틀 용도는 유지)
if(!isset($g5['title'])){
	$g5['title']	= $config['cf_title'];
	$g5_head_title	= $g5['title'];
}
else{
	$g5_head_title	= $g5['title']; // 상태바에 표시될 제목
	$g5_head_title	.= " | ".$config['cf_title'];
}
$g5['title']     = strip_tags($g5['title']);
$g5_head_title   = strip_tags($g5_head_title);
?>
<!DOCTYPE html>
<html lang="ko">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-title" content="" />
	<meta name="format-detection" content="telephone=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!-- 기본/SEO 메타 -->
	<meta name="title" content="<?=htmlspecialchars($title_out, ENT_QUOTES)?>">
	<meta name="subject" content="HYUNDAI WELDING" />
	<meta name="description" content="<?=htmlspecialchars($desc_out, ENT_QUOTES)?>" />
	<link rel="canonical" href="<?=htmlspecialchars($seo_canonical, ENT_QUOTES)?>" />

	<!-- Open Graph -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?=htmlspecialchars($title_out, ENT_QUOTES)?>">
	<meta property="og:description" content="<?=htmlspecialchars($desc_out, ENT_QUOTES)?>">
	<meta property="og:image" content="<?=htmlspecialchars($seo_og_image, ENT_QUOTES)?>">
	<meta property="og:url" content="<?=htmlspecialchars($seo_canonical, ENT_QUOTES)?>">

	<link rel="SHORTCUT ICON" type="image/x-icon" href="<?=$skin_url?>/img/HYUNDAI_WELDING.ico" />

	<title><?=htmlspecialchars($title_out, ENT_QUOTES)?></title>

	<link rel="stylesheet" href="<?=G5_JS_URL?>/font-awesome/css/font-awesome.min.css?ver=<?=G5_VER?>" />
	<link rel="stylesheet" href="<?=$skin_url?>/css/reset.css" />
	<link rel="stylesheet" href="<?=$skin_url?>/css/common.css" />
	<link rel="stylesheet" href="<?=$skin_url?>/css/main.css" />
	<link rel="stylesheet" href="<?=$skin_url?>/css/content.css" />
	<link rel="stylesheet" href="<?=$skin_url?>/css/swiper.min.css" />
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<script type="text/javascript">
		var g5_url				= "<?=G5_URL?>";
		var g5_bbs_url			= "<?=G5_BBS_URL?>";
		var g5_is_member		= "<?=isset($is_member)?$is_member:''?>";
		var g5_is_admin			= "<?=isset($is_admin)?$is_admin:''?>";
		var g5_is_mobile		= "<?=G5_IS_MOBILE?>";
		var g5_bo_table			= "<?=isset($bo_table)?$bo_table:''?>";
		var g5_sca				= "<?=isset($sca)?$sca:''?>";
		var g5_editor			= "<?=($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''?>";
		var g5_cookie_domain	= "<?=G5_COOKIE_DOMAIN?>";
	</script>

	<script src="<?=$skin_url?>/js/jquery-3.5.0.min.js"></script>
	<script src="<?=$skin_url?>/js/jquery.cookie.js"></script>
	<script src="<?=$skin_url?>/js/common.js"></script>
	<script src="<?=$skin_url?>/js/swiper.min.js"></script>
	<script src="<?=G5_JS_URL?>/common.js"></script>

	<script type="text/javaScript">
		function fnTotalSearch() {
		  if($.trim($('#totalSearchForm input[name="searchKeyword"]').val()) == '') {
			  alert('검색어를 입력해 주세요.');
			  $('#totalSearchForm input[name="searchKeyword"]').val('');
			  $('#totalSearchForm input[name="searchKeyword"]').focus();
		  }else{
			  document.totalSearchForm.submit();
		  }
		}

		function getXSS(value_){
			value_ = String(value_);
			value_ = value_.replace(/&quot;/gi,"\"");
			value_ = value_.replace(/&apos;/gi,"'");
			value_ = value_.replace(/&lt;/gi,"<");
			value_ = value_.replace(/&gt;/gi,">");

			return value_;
		}

		function fnRecruit(val_){
		  $('.mainRecruitSlider li').fadeOut(1, function(){
			  $('.mainRecruitSlider .' + val_).fadeIn(1);
		  });
		}
	</script>
</head>
<body>

<header id="hAnimation">
<div class="headerWrap">
	<h1 class="h1-logo"><a href="<?=$host_url?>/index"></a></h1>
	<button class="menuBtn"></button>
	<div class="leftMenu">

		<!-- nav -->
		<div class="nav">
			<ul>
<?php
// Depth = 0 : menu1
$no = 0;
for( $i = 0; $i < count($site_menu); $i++ ){
	$menu1 = $site_menu[$i];
	if( $menu1['me_use'] ){
		if( $menu1['me_link'] )			$menu1['link'] = $menu1['me_link'];
		else if( $menu1['me_skey'] )	$menu1['link'] = $host_url.'/'.$menu1['me_skey'];
		else							$menu1['link'] = 'javascript:void(0);';
?>
				<li class="menuWrap">
					<a href="<?=($menu1['link'])?>" class="navDepth01"><?=stripslashes($menu1['me_name'])?></a>
		<?php if( count($menu1['menuList']) > 0 ){?>
					<ul class="navDepthWrap">
			<?php
			// Depth = 1 : menu2
			for( $m1 = 0; $m1 < count($menu1['menuList']); $m1++ ){
				$menu2	= $menu1['menuList'][$m1];
				if( $menu2['me_use'] ){
					if( $menu2['me_link'] )			$menu2['link'] = $menu2['me_link'];
					else if( $menu2['me_skey'] )	$menu2['link'] = $host_url.'/'.$menu2['me_skey'];
					else							$menu2['link'] = 'javascript:void(0);';
			?>
						<li>
							<a href="<?=($menu2['link'])?>" target="<?=($menu2['me_link'])?'_blank':'_self'?>"><?=stripslashes($menu2['me_name'])?></a>
					<?php if( count($menu2['menuList']) > 0 ){?>
							<ul class="navDepth2">
						<?php
						// Depth = 2 : menu3
						for( $m2 = 0; $m2 < count($menu2['menuList']); $m2++ ){
							$menu3	= $menu2['menuList'][$m2];
							if( $menu3['me_use'] ){
								if( $menu3['me_link'] )			$menu3['link'] = $menu3['me_link'];
								else if( $menu3['me_skey'] )	$menu3['link'] = $host_url.'/'.$menu3['me_skey'];
								else							$menu3['link'] = 'javascript:void(0);';
							// menu3: Welding Consumables 강제 링크
							if (!empty($menu3['me_skey']) && strpos($menu3['me_skey'], 'product/weldMaterialList') !== false) {
								$menu3['link'] = 'https://products.hyundaiwelding.com/kr';
							}
						?>
								<li><a href="<?=($menu3['link'])?>" target="<?=($menu3['me_link'])?'_blank':'_self'?>"><?=stripslashes($menu3['me_name'])?></a></li>
						<?php
							}
							unset($menu3);
						}//$m1 for end --//
						?>
							</ul>
					<?php }?>
						</li>
			<?php
				}
				unset($menu2);
			}//$m1 for end --//
			?>
					</ul>
		<?php }?>
				</li>
<?php
	}
	unset($menu1);
}//$i for end --//
unset($no);
?>

			</ul>
		</div>
		<!--//nav -->


		<div class="navFamilySite">
			<ul>
				<li><a href="http://hyundaigloville.com">HYUNDAI GLOVILLE</a></li>
				<li><a href="http://hyundaisuperteck.com">HYUNDAI SUPERTECK</a></li>
				<li><a href="http://hyundaipns.com">HYUNDAI PNS</a></li>
			</ul>
		</div>

		<div class="hRight">
			<ul class="hIcons">
				<!--<li><a href="<?=$host_url?>/support/contactUs" title="Contact Us"><i class="ico ico-tel"></i></a></li>-->
				<li>
					<a href="https://www.instagram.com/hyundaiwelding/" target="_blank">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/company/hyundaiwelding/" target="_blank">
						<i class="fa fa-linkedin-square" aria-hidden="true"></i>
					</a>
				</li>
				<li><a href="<?=$host_url?>/product/download" title="Download"><i class="ico ico-download"></i></a></li>
				<li><button class="hSearchBtn"><i class="ico ico-search"></i></button></li>
			</ul>
			<div class="selectStyle1 hlang">
				<p><i class="ico ico-lang"></i> <?=strtoupper($schar)?></p>
				<ul>
<?php
$lang_list = code_array_rows('lang_code','0');
for( $i = 0; $i < count($lang_list); $i++ ){
	if( $lang_list[$i]['code_key'] != 'kor' ){
		echo '<li><a href="'.G5_URL.'/'.$lang_list[$i]['code_key'].'/'.$shost.'/index" target="_blank">'.$lang_list[$i]['code_name'].'</a></li>';
	}
}
?>
				</ul>
			</div>
		</div>
		<!-- hRight// -->
	</div>

	<div class="hSearch">
		<ul>
			<li>
				<a href="https://www.instagram.com/hyundaiwelding/" target="_blank">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
			</li>
			<li>
				<a href="https://www.linkedin.com/company/hyundaiwelding/" target="_blank">
					<i class="fa fa-linkedin-square" aria-hidden="true"></i>
				</a>
			</li>
			<li><button class="hSearchBtn"><i class="ico ico-search"></i></button></li>
		</ul>

		<div class="hSearch-input">
			<form name="totalSearchForm" id="totalSearchForm" method="get" action="<?=$host_url?>/searchResult">
				<input type="hidden" name="tab" value="product" />
				<input type="text" name="stx" placeholder="검색어를 입력하세요" />
				<button type="submit"><i class="ico ico-search"></i></button>
				<button type="button" class="closehSearch"><i class="ico ico-close"></i></button>
			</form>
		</div>
	</div>
	<!-- hSearch// -->

</div>
</header>

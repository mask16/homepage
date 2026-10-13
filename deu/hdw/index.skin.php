<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/index.skin.php
+ Description	: index.skin
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<script type="text/javaScript">
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

<?php include_once G5_DC_PATH.'/popup.php'?>

<section class="mainVisual">
	<div class="">
		<div class="mainVisualSlider">
			<div class="mainVisualBg mainVisualBg01">
				<div class="mainVisualCon">
					<div class="innerWrap">
						<div class="mainVisualTit motionLeft">
							<p class="">Connect with
								<span>a better world,</span>
							</p>
							<p class="">Hyundai
								<span>Welding</span>
							</p>
						</div>
						<!-- <div class="mainVisualText motionTop">
							<p>상상을 뛰어넘어 실천하는</p>
							<p>Best Company</p>
						</div> -->
												<div class="mainGlobalGateWay motionTop">
							<p>
								<i class="ico ico-lang"></i> <b> Select Your Language</b>
							</p>
							<ul>
								<li>
									<a href="/kor/hdw/index">
										한국어
									</a>
								</li>
								<li>
									<a href="/eng/hdw/index">
										English
									</a>
								</li>
								<li>
									<a href="/chn/hdw/index">
										中文
									</a>
								</li>
								<li>
									<a href="/jpn/hdw/index">
										日本語
									</a>
								</li>
								<li>
									<a href="/deu/hdw/index">
										Deutsch
									</a>
								</li>
								<li>
									<a href="/esp/hdw/index">
										Español
									</a>
								</li>
								<li>
									<a href="/fra/hdw/index">
										Français
									</a>
								</li>
								<li>
									<a href="/prt/hdw/index">
										Português
									</a>
								</li>
								<li>
									<a href="/rus/hdw/index">
										Русский
									</a>
								</li>
								<li>
									<a href="/vnm/hdw/index">
										Tiếng Việt
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="scrollBar">
		<p>scroll</p>
	</div>
</section>

<div class="wrap">
	<section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos"></section>
	<section class="mainSection mainBusinessWrap">
		<div class="innerWrap">
			<div class="titleArea">
				<!--<p class="titStyle1">BUSINESS</p>-->
				<h3 class="titStyle2">UNTERNEHMEN</h3>
				<p class="titStyle3">Herausfordernde und innovative Denkweise ist der Schlüssel zum Erfolg</p>
			</div>
		</div>
		<div class="mainBusinessCon">
			<div class="innerWrap mainBusinessSlider">
				<ul>
					<li>
						<a href="https://products.hyundaiwelding.com/" class="mainBusiness mainBusiness01">
							<span class="mainBusinessText">
								<span>Schweisszusatzwerkstoff</span>
							</span>
							<span class="moreBtn icoMotion">Mehr<i class="ico ico-arrow"></i></span>
						</a>
					</li>
					<li>
						<a href="http://hyundaipns.com/deu/hdp/index" class="mainBusiness mainBusiness03">
							<span class="mainBusinessText">
								<span>Schweissmaschine</span>
							</span>
							<span class="moreBtn icoMotion">Mehr<i class="ico ico-arrow"></i></span>
						</a>
					</li>
					<li>
						<a href="<?=$host_url?>/product/bwtsList" class="mainBusiness mainBusiness02">
							<span class="mainBusinessText" style="top: 51.8%;">
								<span>BWTS</span>
								<span>Ballastwasser-Behandlungssysteme</span>
							</span>
							<span class="moreBtn icoMotion">Mehr<i class="ico ico-arrow"></i></span>
						</a>
					</li>
<!-- 					<li>
						<a href="<?=$host_url?>/product/steelSummary" class="mainBusiness mainBusiness03">
							<span class="mainBusinessText">
								<span>Stahl</span>
							</span>
							<span class="moreBtn icoMotion">Mehr<i class="ico ico-arrow"></i></span>
						</a>
					</li> -->
				</ul>
			</div>

			<div class="innerWrap">
				<a href="<?=$host_url?>/product/record" class="btn btnLineBlue icoMotion btn-round">
					Großkunden<i class="ico ico-arrowBlue"></i>
				</a>
			</div>
			<!--
			<div class="mainBusinessBttext">
				<div class="innerWrap p0">
					우리는 전 임직원 이 회사 운영의 기본방향을 공유하며<br />
					업무수행 능력을 향상시키며 임직원의 힘을 하나로 결집시켜<br />
					강하고 우수한 기업문화를 만드는 초석을 만들고자 합니다.<br />
					이에 현대종합금속 기업문화 Hyundai Welding Business Culture로서<br />
					HW의 임직원들은 믿음과 신념을 가지고 사업활동을 합니다.
				</div>
			</div>
			-->
		</div>
	</section>
	<!-- mainBusinessWrap// -->

	<section class="mainSection mainAboutWrap ">
		<div class="motion-show">
			<div class="innerWrap">
				<div class="titleArea noLine">
					<p class="titStyle1 c-white">ÜBER HYUNDAI WELDING</p>
					<p class="titStyle4 c-white">Leidenschaft, kreative Fantasie in die Realität umzusetzen.<br>Es ist die DNA von Hyundai Welding.</p>
				</div>
			</div>
			<div class="innerWrap">
				<div class="mainAboutCon">
					<ul class="mainAboutSlider">
						<li>
							<a href="<?=$host_url?>/about/hwbc">
								<span class="maiAboutNum">01</span>
								<span class="maiAboutTit">Unternehmensvorstellung</span>
								<span class="maiAboutText">
									Das am schnellsten wachsende Schweißfachunternehmen der Welt, das Herausforderungen und Innovation sucht
								</span>
								<span class="moreBtn icoMotion">Mehr
								<i class="ico ico-arrow"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="<?=$host_url?>/sus/ethicsAbout">
								<span class="maiAboutNum">02</span>
								<span class="maiAboutTit">Nachhaltigkeit</span>
								<span class="maiAboutText">
									Wir streben gemeinsamen Wohlstand an, indem wir unserer gesellschaftlichen Verantwortung als Unternehmen nachkommen.
								</span>
								<span class="moreBtn icoMotion">Mehr
								<i class="ico ico-arrow"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="<?=$host_url?>/recruit/rule">
								<span class="maiAboutNum">03</span>
								<span class="maiAboutTit">Personalsystem</span>
								<span class="maiAboutText">
									Wir unterstützen Herausforderungen und kreative Leidenschaft für mehr Wachstum.
								</span>
								<span class="moreBtn icoMotion">Mehr
								<i class="ico ico-arrow"></i>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="mainSection mainRecruitWrap ">
		<div class="motion-show">
			<div class="innerWrap">
				<div class="titleArea lineWhite">
					<p class="titStyle2 c-white">Stellenangebote</p>
				</div>
				<!-- 임시로 사람인 링크 사용
				<div class="mainRecruitLeft">
					<ul>
						<li>
							<a href="javascript:fnRecruit('recruitList');" class="c-pink">전체
							<sup><?=count($recruitList)?></sup>
							</a>
						</li>
						<li>
							<a href="javascript:fnRecruit('recruitList2');">경력
							<sup><?=count($recruitList2)?></sup>
							</a>
						</li>
						<li>
							<a href="javascript:fnRecruit('recruitList3');">신입
							<sup><?=count($recruitList3)?></sup>
							</a>
						</li>
						<li>
							<a href="javascript:fnRecruit('recruitList4');">인턴
							<sup><?=count($recruitList4)?></sup>
							</a>
						</li>
						<li>
							<a href="javascript:fnRecruit('recruitList5');">무관
							<sup><?=count($recruitList5)?></sup>
							</a>
						</li>
					</ul>
				</div>
				-->
			</div>

			<div class="mainRecruitCon">
			</div>
			<!-- 임시로 사람인 링크 사용
			<div class="innerWrap">
				<a href="<?=$host_url?>/recruit/noticeList" class="btn btn-round btnLineWhite icoMotion">채용공고 더보기
				<i class="ico ico-arrow"></i>
				</a>
			</div>
			-->
			<div class="innerWrap">
				<a href="https://hyundaiweld.saramin.co.kr/main/index" class="btn btn-round btnLineWhite icoMotion" target="_blank">Weitere Stellenangebote
				<i class="ico ico-arrow"></i>
				</a>
			</div>
		</div>
		<!--//motion-show -->
	</section>

	<section class="mainSection mainNoticeWrap motion-show">
		<div class="innerWrap">
			<div class="titleArea">
				<!-- <p class="titStyle1">NEWS</p> -->
				<h3 class="titStyle2">NEWS</h3>
			</div>
		</div>
		<div class="innerWrap">
			<div class="mainNoticeWrap">
				<ul class="mainNoticeSlider">
<?php
for( $i = 0; $i < count($news_list); $i++ ){
?>
					<li>
						<a href="<?=$host_url?>/support/newsDetail?seq=<?=$news_list[$i]['seq']?>">
							<span class="mainNoticeBg" style="background-image:url(<?=stripslashes($news_list[$i]['fileImage_url'])?>)"></span>
							<span class="mainNoticeText">
								<span class="mainNoticeTit"><?=stripslashes($news_list[$i]['title'])?></span>
								<span class="mainNoticeDate"><?=$news_list[$i]['newsDt']?></span>
								<span class="moreBtn icoMotion">Mehr<i class="ico ico-arrow"></i></span>
							</span>
						</a>
					</li>
<?php }?>
				</ul>
				<div class="mainNoticeBt">
					<a href="<?=$host_url?>/support/news" class="btn btnLineBlue icoMotion btn-round">Weitere Beiträge
					<i class="ico ico-arrowBlue"></i>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="mainSection mainCsWrap">
		<div class="innerWrap motion-show">
			<div class="mainNoticeCon">
				<div class="left">
					<div class="titleArea noLine">
						<h3 class="titStyle2">Rekrutierungsinformationen</h3>
					</div>
				</div>
				<div class="right">
					<ul>
						<li>
							<h3>Schweißzusatz</h3>
							<div class="mainCsBtn">
								<a href="<?=$host_url?>/support/contactUs?tab=1">
									<span>Korea</span>
									<i class="ico ico-arrowBlack"></i>
								</a>
								<a href="<?=$host_url?>/support/contactUs?tab=2">
									<span>internationale</span>
									<i class="ico ico-arrowBlack"></i>
								</a>
							</div>
						</li>
						<li>
							<h3>Maschinenabteilung</h3>
							<div class="mainCsBtn">
								<a href="<?=$host_url?>/support/contactUs?tab=3">
									<span>Kontakt</span>
									<i class="ico ico-arrowBlack"></i>
								</a>
							</div>
						</li>
<!-- 						<li>
							<h3>Stahlvertrieb</h3>
							<div class="mainCsBtn">
								<a href="<?=$host_url?>/support/contactSteel">
									<span>Kontakt</span>
									<i class="ico ico-arrowBlack"></i>
								</a>
							</div>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="mainSection mainGroupWrap motion-show">
		<div class="innerWrap">
			<div class="titleArea noLine">
				<p class="titStyle1">GROUP</p>
				<!--<p class="titStyle4 ">공동번영의 가치를 창조하여<br/>인류 행복에 기여합니다.</p>-->
			</div>

			<div class="mainGroupCon">
				<ul>
					<li>
						<a href="<?=G5_URL?>/<?=$schar?>/hdg/index">
							<span class="mainGroupTit">Logistikgeschäft<span>HYUNDAI GLOVILLE</span>
							</span>
							<span class="mainGroupBtn">Verknüpfung
							<i class="ico ico-arrow2"></i>
							</span>
						</a>
						<div class="mainGroupBg"></div>
					</li>
					<li>
						<a href="<?=G5_URL?>/<?=$schar?>/hds/index">
							<span class="mainGroupTit">Sonderschweißmaterialien<span>HYUNDAI SUPERTECK</span>
							</span>
							<span class="mainGroupBtn">Verknüpfung
							<i class="ico ico-arrow2"></i>
							</span>
						</a>
						<div class="mainGroupBg"></div>
					</li>
					<li>
						<a href="<?=G5_URL?>/<?=$schar?>/hdp/index">
							<span class="mainGroupTit">Schweißgeräte<span>HYUNDAI PNS</span>
							</span>
							<span class="mainGroupBtn">Verknüpfung
							<i class="ico ico-arrow2"></i>
							</span>
						</a>
						<div class="mainGroupBg"></div>
					</li>
				</ul>
			</div>

		</div>
	</section>


</div>

<div class="dim-layer popupContact mainPopup" id="" style="display: none;">
  <div class="dimBg"></div>
</div>

<script>
	$('.btn-Close').click(function () {
		$('.dim-layer').fadeOut();
	});
</script>

<!-- 메인 효과관련 -->
<script type="text/javascript">
	var scroll = window.requestAnimationFrame || function (callback) {
		window.setTimeout(callback, 1000 / 60);
	};
	var elementsToShow = document.querySelectorAll('.motion-show');

	function loop() {
		Array.prototype.forEach.call(elementsToShow, function (element) {
			if (isElementInViewport(element)) {
				element.classList.add('is-visible');
			} else {
				//element.classList.remove('is-visible');
			}
		});
		scroll(loop);
	}

	loop();

	function isElementInViewport(el) {
		if (typeof jQuery === "function" && el instanceof jQuery) {
			el = el[0];
		}
		var rect = el.getBoundingClientRect();
		return (
			(rect.top <= 0 && rect.bottom >= 0) || (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) && rect.top <= (window.innerHeight || document.documentElement.clientHeight)) || (rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
		);
	}

	setInterval(function () {
		$('.visualFade').addClass('on');
	}, 7000);

	$(document).ready(function () {
		function layout() {
			var wh = $(window).outerHeight();
			$('.mainVisualBg').css('height', wh);
			$('.mainBusinessWrap').css('margin-top', wh);
		}
		layout();

		$(window).resize(function () {
			layout();
		});

		$('.mainVisualText , .mainVisualTit p, .mainGlobalGateWay').addClass('on');
	});

//사업분야 관련 var swiper = new Swiper('.mainBusinessSlider', {   slidesPerView: 'auto',   spaceBetween: 20,
//
//   breakpoints: {     640: {       spaceBetween: 10,     },     768: {       spaceBetween: 20,     },     959: {       spaceBetween: 20,     },     1280: {       spaceBetween: 50,     }   } });

	$(window).scroll(function () {
		var secTop = $(document).scrollTop(),
		hvisual = $('.mainVisual').outerHeight();

		if (secTop >= hvisual / 2) {
			$('.mainBusinessCon').addClass('on');
			$('.mainVisual').addClass('on');
		} else {
			$('.mainVisual').removeClass('on');
		}
	});

// 기업소개 관련 var swiper = new Swiper('.mainAboutSlider', {   slidesPerView: 'auto',   spaceBetween: 10,   navigation: {     nextEl: '.swiper-about-next',     prevEl: '.swiper-about-prev',   },   breakpoints: {     640: {       spaceBetween: 10,
// allowTouchMove: true,       noSwiping: false,     },     768: {       spaceBetween: 20,       allowTouchMove: true,       noSwiping: false,     },     959: {       spaceBetween: 20,       allowTouchMove: true,       noSwiping: false,     }, 1280:
// {       spaceBetween: 50,       allowTouchMove: false,       noSwiping: true,     }   }
//
//
// }); 채용공고 관련 var swiper = new Swiper('.mainRecruitSlider', {   slidesPerView: 'auto',   spaceBetween: 20,   breakpoints: {     640: {       spaceBetween: 10     },     768: {       spaceBetween: 20     },     959: {       spaceBetween: 20     },
// 1280: {       spaceBetween: 50     }   } });

	$('.mainRecruitLeft li').click(function () {
		$(this).children('a').addClass('c-pink');
		$(this).siblings('li').children('a').removeClass('c-pink');
	});

// var swiper = new Swiper('.mainNoticeSlider', {   slidesPerView: 'auto',   spaceBetween: 30,   navigation: {     nextEl: '.swiper-button-next',     prevEl: '.swiper-button-prev'   },   breakpoints: {     640: {       spaceBetween: 10     },
// 768: {       spaceBetween: 20     },     959: {       spaceBetween: 20     },     1280: {       spaceBetween: 50     }   } });
</script>
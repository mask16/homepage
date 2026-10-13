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

	(function () {
		var a = document.createElement('div');
		a.setAttribute("id","plugin");
		a.style.cssText='position:fixed;right:35px;bottom:90px;z-index:99999 !important'             
		document.body.appendChild(a);
		window.shipgoPlugin={
			pluginKey: "<?php echo OCEAN_API_KEY; ?>",
			lang: "en"
		};

		var b = document.createElement('script');
		b.type = 'module';
		b.async = true;
		b.src = 'https://cdn.tradlinx.com/shipgo/plugin/shipgo-plugin-web.js';
		a.appendChild(b);
		document.body.appendChild(a);
  	})();
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
								<span>Gloville</span>
							</p>
						</div>
						<!--
						<div class="innerWrap">
							<a href="<?=$host_url?>/product/record" class="btn btnLineBlue icoMotion btn-round">
								주요납품실적 보기<i class="ico ico-arrowBlue"></i>
							</a>
						</div>
						20210518 수정 -->
						<div class="mainGlobalGateWay motionTop">
							<p>
								<i class="ico ico-lang"></i> <b> Select Your Language</b>
							</p>
							<ul>
								<li>
									<a href="/kor/hdg/index">
										한국어
									</a>
								</li>
								<li>
									<a href="/eng/hdg/index">
										English
									</a>
								</li>
								<li>
									<a href="/chn/hdg/index">
										中文
									</a>
								</li>
								<li>
									<a href="/jpn/hdg/index">
										日本語
									</a>
								</li>
								<li>
									<a href="/deu/hdg/index">
										Deutsch
									</a>
								</li>
								<li>
									<a href="/esp/hdg/index">
										Español
									</a>
								</li>
								<li>
									<a href="/fra/hdg/index">
										Français
									</a>
								</li>
								<li>
									<a href="/prt/hdg/index">
										Português
									</a>
								</li>
								<li>
									<a href="/rus/hdg/index">
										Русский
									</a>
								</li>
								<li>
									<a href="/vnm/hdg/index">
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
				<!--<p class="titStyle1">HYUNDAI GLOVILLE</p>-->
				<h3 class="titStyle2">Negocio</h3>
				<p class="titStyle3">
					HYUNDAI GLOVILLE presta servicios principalmente a empresas de transporte terrestre <br>y carga de importación y exportación.
				</p>
			</div>
		</div>
		<div class="mainBusinessCon">
			<div class="innerWrap mainBusinessSlider">
				<ul>
					<li>
						<a href="<?=$host_url?>/product/business" class="mainBusiness mainBusiness01">
							<span class="mainBusinessText">
								<span>Área de<br>negocio</span>
							</span>
							<span class="moreBtn icoMotion">Más<i class="ico ico-arrow"></i></span>
						</a>
					</li>
					<li>
						<a href="<?=$host_url?>/product/work" class="mainBusiness mainBusiness02">
							<span class="mainBusinessText">
								<span>Estado de<br>negocio</span>
							</span>
							<span class="moreBtn icoMotion">Más<i class="ico ico-arrow"></i></span>
						</a>
					</li>
					<li>
						<a href="<?=$host_url?>/product/partner" class="mainBusiness mainBusiness03">
							<span class="mainBusinessText">
								<span>Socio principal <br>del extranjero</span>
							</span>
							<span class="moreBtn icoMotion">Más<i class="ico ico-arrow"></i></span>
						</a>
					</li>
				</ul>
			</div>

			<!--
			<div class="innerWrap">
				<a href="<?=$host_url?>/product/record" class="btn btnLineBlue icoMotion btn-round">
					주요납품실적 보기<i class="ico ico-arrowBlue"></i>
				</a>
			</div>
			20210518 수정 -->
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
					<p class="titStyle1 c-white">ABOUT HYUNDAI GLOVILLE</p>
					<p class="titStyle4 c-white">
						Pasión por convertir la imaginación creativa en realidad.<br>
Es el ADN de Hyundai Gloville.
					</p>
				</div>
			</div>
			<div class="innerWrap">
				<div class="mainAboutCon">
					<ul class="mainAboutSlider">
						<li>
							<a href="<?=$host_url?>/about/hwbc">
								<span class="maiAboutNum">01</span>
								<span class="maiAboutTit">Introducción de la Compañía</span>
								<span class="maiAboutText">
									La empresa especializada en soldadura de más rápido crecimiento en el mundo que busca desafíos e innovación.
								</span>
								<span class="moreBtn icoMotion">Más
								<i class="ico ico-arrow"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="<?=$host_url?>/sus/ethicsAbout">
								<span class="maiAboutNum">02</span>
								<span class="maiAboutTit">Sustentabilidad</span>
								<span class="maiAboutText">
									Buscamos la prosperidad conjunta cumpliendo con nuestras responsabilidades sociales corporativas.
								</span>
								<span class="moreBtn icoMotion">Más
								<i class="ico ico-arrow"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="<?=$host_url?>/about/ceo">
								<span class="maiAboutNum">03</span>
								<span class="maiAboutTit">Saludo de presidente</span>
								<span class="maiAboutText">
									Les damos una sincera bienvenida al sitio web de Hyundai Gloville.
								</span>
								<span class="moreBtn icoMotion">Más
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
				       <!--<p class="titStyle1 c-white">RECRUITING</p> 인사팀요청으로 삭제-->
					<p class="titStyle2 c-white">Carreras</p>
				</div>
				<!-- 임시로 사람인 링크 사용
				<div class="mainRecruitLeft">
					<ul>
						<li>
							<a href="javascript:fnRecruit('recruitList');" class="c-pink">All
							<sup><?=count($recruitList)?></sup>
							</a>
						</li>
						<li>
							<a href="javascript:fnRecruit('recruitList2');">Career
							<sup><?=count($recruitList2)?></sup>
							</a>
						</li>
						<li>
							<a href="javascript:fnRecruit('recruitList3');">Newcomer
							<sup><?=count($recruitList3)?></sup>
							</a>
						</li>
						<li>
							<a href="javascript:fnRecruit('recruitList4');">Intern
							<sup><?=count($recruitList4)?></sup>
							</a>
						</li>
						<li>
							<a href="javascript:fnRecruit('recruitList5');">Irrelevant
							<sup><?=count($recruitList5)?></sup>
							</a>
						</li>
					</ul>
				</div>-->
			</div>
			<div class="mainRecruitCon">
			</div>

			<!-- 임시로 사람인 링크 사용
			<div class="innerWrap">
				<a href="<?=$host_url?>/recruit/noticeList" class="btn btn-round btnLineWhite icoMotion">
				More Job Openings
				<i class="ico ico-arrow"></i>
				</a>
			</div>
			-->
			<div class="innerWrap">
				<a href="https://hyundaiweld.saramin.co.kr/main/index" class="btn btn-round btnLineWhite icoMotion" target="_blank">
				Ver más ofertas de empleao
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
				<h3 class="titStyle2">Noticias</h3>
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
								<span class="moreBtn icoMotion">Más<i class="ico ico-arrow"></i></span>
							</span>
						</a>
					</li>
<?php }?>
				</ul>
				<div class="mainNoticeBt">
					<a href="<?=$host_url?>/support/news" class="btn btnLineBlue icoMotion btn-round">
					Ver más publicacióes
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
						<!--<p class="titStyle1">CONTACT US</p>-->
						<h3 class="titStyle2">Atención al cliente</h3>
					</div>
				</div>
				<div class="right">
					<ul>
						<li>
							<h3></h3>
							<div class="mainCsBtn">
								<a href="<?=$host_url?>/support/contactUs">
									<span>Contactos</span>
									<i class="ico ico-arrowBlack"></i>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="mainSection mainGroupWrap motion-show">
		<div class="innerWrap">
			<div class="titleArea noLine">
				<p class="titStyle1">GRUPO</p>
				<!--<p class="titStyle4 ">It contributes to human happiness<br>by creating the value of common prosperity.</p>-->
			</div>

			<div class="mainGroupCon">
				<ul>
					<li>
						<a href="<?=G5_URL?>/<?=$schar?>/hdg/index">
							<span class="mainGroupTit">
								Logística
								<span>HYUNDAI GLOVILLE</span>
							</span>
							<span class="mainGroupBtn">
							Ir a página
							<i class="ico ico-arrow2"></i>
							</span>
						</a>
						<div class="mainGroupBg"></div>
					</li>
					<li>
						<a href="<?=G5_URL?>/<?=$schar?>/hds/index">
							<span class="mainGroupTit">
								Cosumibles de soldadura especiales
								<span>HYUNDAI SUPERTECK</span>
							</span>
							<span class="mainGroupBtn">
							Ir a página
							<i class="ico ico-arrow2"></i>
							</span>
						</a>
						<div class="mainGroupBg"></div>
					</li>
					<li>
						<a href="<?=G5_URL?>/<?=$schar?>/hdp/index">
							<span class="mainGroupTit">
								Máquina de soldadura
								<span>HYUNDAI PNS</span>
							</span>
							<span class="mainGroupBtn">
							Ir a página
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
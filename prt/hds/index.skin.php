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
								<span>Superteck</span>
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
									<a href="/kor/hds/index">
										한국어
									</a>
								</li>
								<li>
									<a href="/eng/hds/index">
										English
									</a>
								</li>
								<li>
									<a href="/chn/hds/index">
										中文
									</a>
								</li>
								<li>
									<a href="/jpn/hds/index">
										日本語
									</a>
								</li>
								<li>
									<a href="/deu/hds/index">
										Deutsch
									</a>
								</li>
								<li>
									<a href="/esp/hds/index">
										Español
									</a>
								</li>
								<li>
									<a href="/fra/hds/index">
										Français
									</a>
								</li>
								<li>
									<a href="/prt/hds/index">
										Português
									</a>
								</li>
								<li>
									<a href="/rus/hds/index">
										Русский
									</a>
								</li>
								<li>
									<a href="/vnm/hds/index">
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
				<!--<p class="titStyle1">HYUNDAI SUPERTECK</p>-->
				<h3 class="titStyle2">O NEGÓCIO</h3>
				<p class="titStyle3">
					Hyundai Superteck é uma empresa profissional especializada em materiais de soldagem <br/>especiais para fornecer aos clientes as melhores soluções de soldagem.
				</p>
			</div>
		</div>
		<div class="mainBusinessCon">
			<div class="innerWrap mainBusinessSlider">
				<ul>
					<li>
						<a href="<?=$host_url?>/product/business" class="mainBusiness mainBusiness01">
							<span class="mainBusinessText">
								<span>Visão geral do negócio</span>
								<!--<span>BUSINESS</span>-->
							</span>
							<span class="moreBtn icoMotion">Mais<i class="ico ico-arrow"></i></span>
						</a>
					</li>
					<li>
						<a href="<?=$host_url?>/product/product" class="mainBusiness mainBusiness02">
							<span class="mainBusinessText">
								<span>Materiais Especiais de Soldagem</span>
							</span>
							<span class="moreBtn icoMotion">Mais<i class="ico ico-arrow"></i></span>
						</a>
					</li>
					<li>
						<a href="<?=$host_url?>/product/product?clCode=2" class="mainBusiness mainBusiness03">
							<span class="mainBusinessText">
								<span>Materiais de soldagem<br>não ferrosos</span>
							</span>
							<span class="moreBtn icoMotion">Mais<i class="ico ico-arrow"></i></span>
						</a>
					</li>
					<li>
						<a href="<?=$host_url?>/product/product?clCode=3" class="mainBusiness mainBusiness03">
							<span class="mainBusinessText">
								<span>Outros materiais<br>relacionados à soldagem</span>
							</span>
							<span class="moreBtn icoMotion">Mais<i class="ico ico-arrow"></i></span>
						</a>
					</li>
				</ul>
			</div>

		</div>
	</section>
	<!-- mainBusinessWrap// -->

	<section class="mainSection mainAboutWrap ">
		<div class="motion-show">
			<div class="innerWrap">
				<div class="titleArea noLine">
					<p class="titStyle1 c-white">ABOUT HYUNDAI SUPERTECK</p>
					<p class="titStyle4 c-white">Paixão por transformar a imaginação criativa em realidade.<br>É o DNA da HYUNDAI SUPERTECK.</p>

				</div>
			</div>
			<div class="innerWrap">
				<div class="mainAboutCon">
					<ul class="mainAboutSlider">
						<li>
							<a href="<?=$host_url?>/about/hwbc">
								<span class="maiAboutNum">01</span>
								<span class="maiAboutTit">Introdução da Empresa</span>
								<span class="maiAboutText">
									A empresa especializada em soldagem de crescimento mais rápido do mundo que busca desafios e inovação
								</span>
								<span class="moreBtn icoMotion">Mais
								<i class="ico ico-arrow"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="<?=$host_url?>/sus/ethicsAbout">
								<span class="maiAboutNum">02</span>
								<span class="maiAboutTit">Introdução de Negócios</span>
								<span class="maiAboutText">
									Buscamos a prosperidade conjunta cumprindo nossas responsabilidades sociais corporativas.
								</span>
								<span class="moreBtn icoMotion">Mais
								<i class="ico ico-arrow"></i>
								</span>
							</a>
						</li>
						<li>
							<a href="<?=$host_url?>/about/ceo">
								<span class="maiAboutNum">03</span>
								<span class="maiAboutTit">Saudações do CEO</span>
								<span class="maiAboutText">
									Sinceramente, damos as boas-vindas ao site da Hyundai Superteck.
								</span>
								<span class="moreBtn icoMotion">Mais
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
					<p class="titStyle2 c-white">Emprego</p>
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
				Mais vagas de emprego
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
				<h3 class="titStyle2">Notícia</h3>
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
								<span class="moreBtn icoMotion">Mais<i class="ico ico-arrow"></i></span>
							</span>
						</a>
					</li>
<?php }?>
				</ul>
				<div class="mainNoticeBt">
					<a href="<?=$host_url?>/support/news" class="btn btnLineBlue icoMotion btn-round">
						Mais postagens
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
						<!--<p class="titStyle1">CONTATE-NOS</p>-->
						<h3 class="titStyle2">Suporte ao cliente</h3>
					</div>
				</div>
				<div class="right">
					<ul>
						<li>
							<h3></h3>
							<div class="mainCsBtn">
								<a href="<?=$host_url?>/support/contactUs">
									<span>CONTATE-NOS</span>
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
								Negócios de logística
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
								Materiais de soldagem especiais
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
								Equipamentos de soldagem
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
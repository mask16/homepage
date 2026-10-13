<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.history.skin.php
+ Description	: about.history
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualAbout">
	<div class="innerWrap">
		<div class="visualText">
			<p>ABOUT US</p>
			<h3>기업소개</h3>
		</div>
	</div>
</section>

<div class="subWrap">
    <section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
<?php if( isset($SubNav[0]) ){?>
		<div class="subNav">
			<p><?=$SubNav[0]['title']?></p>
			<ul><?=$SubNav[0]['list']?></ul>
		</div>
<?php }?>
<?php if( isset($SubNav[1]) ){?>
		<div class="subNav">
			<p><?=$SubNav[1]['title']?></p>
			<ul><?=$SubNav[1]['list']?></ul>
		</div>
<?php }?>
	</section>

    <div class="subContent">
      <section class="aboutWrap aboutHistory">

        <div class="subTitleArea conPd">
          <h3 class="fontPop titStyle5"><b>Learn more about Hyundai Superteck<br /> growth story.</b></h3>
        </div>
        <div class="historyContent conPd">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2015 -</p>
                  <ul>
                    <li><span>2020.11</span>   특수합금강 (스테인리스, 알루미늄, 내열강, 내마모강 등) 사업 개시</li>
                    <li><span>2020.10</span>   용사용 선재 (ZINC, STS, Ni. 등) 사업 개시</li>
                    <li><span>2020.08</span>   브레이징 & 솔더링 (납땜용) 재료 사업 개시</li>
                    <li><span>2020.07</span>   텅스텐봉 사업 개시</li>
                    <li><span>2020.06</span>   가우징봉 사업 개시</li>
                    <li><span>2018.07</span>   알루미늄 용접봉 드럼 TYPE (80 KG ~ 173 KG 급) 사업 개시</li>
                    <li><span>2018.05</span>   HIGH TENSILE STRENGTH 용접봉 CE, TUV 인증 취득</li>
                    <li><span>2018.03</span>   알루미늄 용접봉 DNV-GL, CE, DB, TUV 인증 취득</li>
                    <li><span>2017.12</span>   구리 용접봉 사업 개시</li>
                    <li><span>2017.09</span>   알루미늄 용접봉 사업 개시</li>
                    <li><span>2015.01</span>   현대슈퍼텍 설립</li>
                    <li><span>       </span>   특수, 고기능을 필요로 하는 구조물에 적용할 수 있는 특수합금 용접봉 사업 개시 - Duplex, Super Duplex, Inconel, Hastelloy, Cr-Mo 내열강, 극저온, 내부식성, 고강도, 내진설계용, 저온인성 등 특수합금 용접봉</li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
  <script>
    var swiper = new Swiper('.historySlider', {
      slidesPerView: 'auto',
      spaceBetween: 30,
    });
  </script>
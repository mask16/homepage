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
			<p>HYUNDAI SUPERTECK</p>
			<h3>О компании</h3>
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
                    <li><span>2020.11</span>   Начато бизнес специальных легированных сталей (нержавеющая сталь, алюминий, жаропрочная сталь, износостойкая сталь и т. Д.)</li>
                    <li><span>2020.10</span>   Начато бизнес проволоки для термического напыления (ZINC, STS, Ni. И т. Д.).</li>
                    <li><span>2020.08</span>   Начато бизнес материалов для пайки и пылающей сварки</li>
                    <li><span>2020.07</span>   Начато бизнес вольфрамовых стержней</li>
                    <li><span>2020.06</span>   Начато бизнес стержневых стержней</li>
                    <li><span>2018.07</span>   Начато безнес барабанных типов изделий для сварки алюминия (80 кг ~ 173 кг).</li>
                    <li><span>2018.05</span>   Получены сертификаты CE, TUV на сварочные изделия ВЫСОКОЙ ПРОЧНОСТИ НА РАСТЯЖЕНИЕ.</li>
                    <li><span>2018.03</span>   Получены сертификаты DNV-GL, CE, DB, TUV для изделий для сварки алюминия.</li>
                    <li><span>2017.12</span>   Начато бизнес медных сварочных материалов</li>
                    <li><span>2017.09</span>   Начато бизнес алюминиевых сварочных материалов</li>
                    <li><span>2015.01</span>   Основание Hyundai Superteck</li>
                    <li><span>       </span>   Начато бизнес сварочных стержней из специальных сплавов, которые могут применяться в конструкциях, требующих специальных и высоких функций: дуплекс, супердуплекс, инконель, хастеллой, жаропрочная сталь Cr-Mo, криогенная, коррозионная стойкость, высокая прочность, сейсмостойкость, низкотемпературная вязкость , так далее</li>
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
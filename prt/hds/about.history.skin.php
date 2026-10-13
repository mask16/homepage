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
			<h3>Introdução da Empresa</h3>
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
                    <li><span>2020.11</span>   Iniciou negócios de ligas de aço especial (aço inoxidável, alumínio, aço resistente ao calor, aço resistente ao desgaste, etc.)</li>
                    <li><span>2020.10</span>   Iniciou o negócio de fios de spray térmico (ZINC, STS, Ni., Etc.)</li>
                    <li><span>2020.08</span>   Iniciou o negócio de brasagem e material de solda</li>
                    <li><span>2020.07</span>   Iniciou o negócio de hastes de tungstênio</li>
                    <li><span>2020.06</span>   Começou o negócio de hastes de goivagem</li>
                    <li><span>2018.07</span>   Iniciou negócios de tipos de tambor de produto de soldagem de alumínio (80kg ~ 173kg)</li>
                    <li><span>2018.05</span>   Adquiriu a certificação CE, TUV para produtos de soldagem de ALTA RESISTÊNCIA À TRAÇÃO</li>
                    <li><span>2018.03</span>   Adquiriu a certificação DNV-GL, CE, DB, TUV para produtos de soldagem de alumínio</li>
                    <li><span>2017.12</span>   Iniciou o negócio de produtos de soldagem de alumínio</li>
                    <li><span>2017.09</span>   Iniciou o negócio de produtos de soldagem de alumínio</li>
                    <li><span>2015.01</span>   niciou o negócio de hastes de soldagem de liga especial que pode ser aplicado a estruturas que requerem funções especiais e altas - Duplex, Super Duplex, Inconel, Hastelloy, Cr-Mo aço resistente ao calor, criogênico, resistência à corrosão, alta resistência, projeto sísmico, tenacidade a baixas temperaturas etc</li>
                    <li><span>2015.01</span>   Estabelecimento de Hyundai Superteck</li>
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
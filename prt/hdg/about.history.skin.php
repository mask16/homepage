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
			<p>HYUNDAI GLOVILLE</p>
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
          <h3 class="fontPop titStyle5"><b>Aprender mais sobre a história de crescimento da<br>
Hyundai Gloville.</b></h3>
        </div>
        <div class="historyContent conPd">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2011 -</p>
                  <ul>
                    <li>
						<span>2020</span>
						Mudou o nome para Hyundai Gloville Co., Ltd.
					</li>
                    <li>
						<span>2013</span>
						Fundido com Hyundai Welding (parte logística)
					</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2001 - 2010</p>
                  <ul>
                    <li>
						<span>2010</span>
						Aquisição de negócios de agenciamento de carga
					</li>
                    <li>
						<span>2004</span>
						Aquisição de um acordo de transporte combinado
					</li>
                    <li>
						<span>2003</span>
						Mudou o nome para Glovill Process Co., Ltd.
					</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1991 -2000</p>
                  <ul>
                    <li>
						<span>2000</span>
						Join FIATA (Federação Internacional de Associações de Transitários)
					</li>
                    <li>
						<span>2000</span>
						Join KIFFA (Associação Internacional de Fordarders de Frete da Coreia)
					</li>
                    <li>
						<span>1999</span>
						Estabelecimento de Gloville Jongwoon Co., Ltd.
					</li>
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
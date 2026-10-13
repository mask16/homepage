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
			<h3>HWBC</h3>
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
          <h3 class="fontPop titStyle5"><b>Learn more about Hyundai Gloville<br /> growth story.</b></h3>
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
						Se cambió el nombre de la empresa a Hyundai Gloville Co., Ltd.
					</li>
                    <li>
						<span>2013</span>
						 Se fusionó con Hyundai Welding Co., Ltd. (División de logística)
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
						Adquisición del negocio de transporte de carga
					</li>
                    <li>
						<span>2004</span>
						Adquisición del negocio de intermediación de transporte multimodal
					</li>
                    <li>
						<span>2003</span>
						Se cambió el nombre de la empresa a Glovill Process Co., Ltd.
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
						Se incorporó a FIATA (Federación Internacional de Empresas de Corretaje de Transporte Marítimo)
					</li>
                    <li>
						<span>2000</span>
						Se unió a KIFFA (Asociación de Corretaje de Transporte Multimodal de Corea)
					</li>
                    <li>
						<span>1999</span>
						Se estableció Gloville Jongun Co., Ltd.
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
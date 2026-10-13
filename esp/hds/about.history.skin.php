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
			<h3>Saludo de presidente</h3>
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
          <h3 class="fontPop titStyle5"><b>Obtenga más información sobre la historia de crecimiento de HYUNDAI SUPERTECK.</b></h3>
        </div>
        <div class="historyContent conPd">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2015 -</p>
                  <ul>
                    <li><span>2020.11</span>   Inicio del negocio de aleación especial (acero inoxidable, aluminio, acero resistente al calor, acero resistente al desgaste, etc.)</li>
                    <li><span>2020.10</span>   Inicio del negocio de soldadura de alambrón (ZINC, STS, NIC, etc.) </li>
                    <li><span>2020.08</span>   Inicio del negocio de materiales de soldadura brazing y soldering (para soldar)</li>
                    <li><span>2020.07</span>   Inicio del negocio de varillas de tungstenos</li>
                    <li><span>2020.06</span>   Inicio del negocio de varillas de ranurado</li>
                    <li><span>2018.07</span>   Inicio del negocio de tambor de varilla de soldadura de aluminio (clase 80 KG-173 KG)</li>
                    <li><span>2018.05</span>   Adquisición de la certificación CE y TUV de varilla de soldadura de alta resistencia a la tracción</li>
                    <li><span>2018.03</span>   Adquisición de la certificación DNV-GL, CE, DB, TUV de la soldadura de aluminio</li>
                    <li><span>2017.12</span>   Inicio del negocio de soldadura de cobre</li>
                    <li><span>2017.09</span>   Inicio del negocio de soldadura de aluminio</li>
                    <li><span>2015.01</span>   Inicio del negocio de varillas de soldadura de aleaciones especiales que se pueden aplicar a estructuras que requieren funciones especiales y altas: Duplex, Super Duplex, Inconel, Hastelloy, acero Cr-Mo resistente al calor, criogénico, resistente a la corrosión, alta resistencia, diseño sísmico, tenacidad a baja temperatura , etc</li>
                    <li><span>2015.01</span>   Establecimiento de Hyundai Superteck</li>
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
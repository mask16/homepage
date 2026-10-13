<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndAbout.skin.php
+ Description	: product.bwtsRndAbout
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI WELDING</p>
			<h3>Negocio</h3>
		</div>
	</div>
</section>


  <div class="subWrap">
    <section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
		<!-- subNav -->
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
		<!--//subNav -->
	</section>

	<div class="subContent">
      <section class="RnDAbout">
        <div class="conPd">
          <h5 class="titStyle5"><b>La  División de Maquinaria del Centro de I+D de Hyundai Welding se centra en el desarrollo y la investigación de equipos marinos para preservar el medio ambiente marino basado en tecnología de procesamiento ecológica.</b></h5>
        </div>
        <div class="RnDAboutImg"></div>
        <div class="RnDAboutCon">
          <div class="conPd">
            Estamos desarrollando materiales de electrodos insolubles (DSA) a través de la investigación electroquímica práctica, electrolizador de alta eficiencia, válvula electrohidráulica y sistema de control inteligente.<br /><br />

			Nos esforzamos por obtener resultados óptimos utilizando varios métodos de ingeniería y simulación por computadora, como el análisis de flujo de fluidos monofásicos y multifásicos mediante simulación de dinámica de fluidos computacional (CFD), análisis de rendimiento y flujo térmico e ingeniería de tuberías (modelado 3D). Basándonos en estas tecnologías, estamos investigando para optimizar el diseño y aumentar la eficiencia del sistema.<br /><br />

			Además, nos estamos enfocando en el desarrollo de nuevos productos y procesos de mayor valor agregado mediante el análisis de las tendencias de tecnologías innovadoras en los campos ecológicos.<br /><br />
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
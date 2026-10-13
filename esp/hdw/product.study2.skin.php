<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study2.skin.php
+ Description	: product.study2
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
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5"><b>Son los campos que se investiga y desarrolla constantemente en Hyundai Welding.</b></h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>Desarrollo de materiales de soldadura</b></h6>
          <div>
            <p class="text-blit">Desarrollo de productos optimizados para aceros de baja temperatura, aceros de alta resistencia y acero resistente al calor</p>
            <p class="text-blit">Desarrollo de productos con funciones especiales para la construcción naval, offshore, construcción, energía nuclear y centrales eléctricas</p>
            <p class="text-blit">Desarrollo de productos innovadores y funcionalizados para uso general como construcción naval, estructura metálicas, construcción, equipo pesado y automóviles</p>
            <p class="text-blit">I + D conjunto de la industria para la aplicación de nuevos grados de acero, nuevos materiales de soldadura y nuevas técnicas de soldadura, con el fin de proporcionar una tecnología de solución total</p>
            <p class="text-blit">Implementación de incremento en la velocidad y eficiencia de la soldadura, alta tenacidad, resistencia al agrietamiento e implementación ecológica</p>
          </div>
          <h6 class="titStyle3"><b>Investigación de tecnología de soldadura</b></h6>
          <div>
            <p class="text-blit">Evaluación de las características de alimentación del alambre de soldadura a través del monitoreo del arco</p>
            <p class="text-blit">Investigación sobre técnicas de mejora del rendimiento a través de la evaluación y análisis de las propiedades mecánicas de los materiales de soldadura</p>
            <p class="text-blit">Estudio de las características de las piezas soldadas según parámetros de soldadura</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiSimul.skin.php
+ Description	: product.bwtsHiSimul
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
      <div class="innerWrap">
        <div class="btwsProduct btwsProduct-simul">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">TODO EL PRODUCTO</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-Simul K es un equipo de simulación de capacitación que brinda a los usuarios una experiencia de operación del sistema similar a la de un barco al implementar el sistema HiBallast virtualmente y tiene las siguientes características principales.
			  <br /><br />

              <p class="bar-text">Proporcionar la condición de funcionamiento real de HiBallast con el sistema de la embarcación</p>
              <p class="bar-text">Mejorar la capacidad del usuario para hacer frente a la situación creando una situación de conducción anormal (modo escenario)</p>
              <p class="bar-text">Realización del monitoreo realista del valor de medición del sensor mediante la aplicación de condiciones del mundo real y modelos de estimación de alta dimensión</p>
              <p class="bar-text">Los datos de operación manual se pueden manipular para producir diversas situaciones deseadas por el usuario</p>
              <p class="bar-text">Educación a distancia disponible</p>
<!--               <p class="bar-text">Portable educational device</p> -->
            </div>
          </div>
          <div class="btImg">
            <img src="<?=$skin_url?>/img/content/simul_btImg03.jpg" alt="" />
          </div>
            <img src="<?=$skin_url?>/img/content/simul_btImg04.jpg" alt="" />
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
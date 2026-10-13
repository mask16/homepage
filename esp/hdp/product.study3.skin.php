<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study3.skin.php
+ Description	: product.study3
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI PNS</p>
			<h3>Negocio</h3>
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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>Esta es la dirección en la que se está desarrollando una máquina de soldar en el centro de investigación de Hyundai PNS.</b></h5>
          <h6 class="titStyle1 c-gray"><p>Dirección de Desarrollo</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Estabilidad del Producto</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Desarrollo de un sistema que sea independiente de los cambios en el entorno externo, como alta temperatura, alta humedad y polvo.</p>
              <p class="text-blit">Excelente durabilidad y retención</p>
              <p class="text-blit">Adopción de la función de circuito de protección múltiple</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Alta Funcionalidad</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">Desarrollo de tecnología de soldadura de líneas no ferrosas con diversas técnicas de control de pulsos como SAC y SPC. SAC (control de arco de superficie), SPC (control de pulso de superficie)</p>
              <p class="text-blit">Desarrollo y estabilización de un sistema de soldadura SAW con inversor de corriente grande</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Alta Eficiencia</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">El sistema inversor de control Full Bridge de conmutación de alta velocidad y conmutación suave logra una eficiencia de más del 90%</p>
              <p class="text-blit">Minimice la energía de reserva para optimizar la eficiencia eléctrica.</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Desarrollo Personalizado</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">Desarrollo de Auto-protección EGW para tanque de almacenamiento de planta</p>
              <p class="text-blit">Desarrollo de FCW de alta resistencia</p>
              <p class="text-blit">Desarrollo de material de soldadura para acero S500, S550, S690 para estructuras marinas</p>
              <p class="text-blit">Desarrollo de materiales de soldadura para nuevos procesos de soldadura como automatización, alta eficiencia, alta velocidad y peso ligero</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
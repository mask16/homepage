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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>Son los campos que se investiga y desarrolla constantemente en Hyundai Welding.</b></h5>
          <h6 class="titStyle1 c-gray"><p>Direction of Development</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Ecológico</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Consumibles de soldadura con baja emisión de humos</p>
              <p class="text-blit">Consumibles de soldadura con bajo Mn</p>
              <p class="text-blit">Consumibles de soldadura con bajas salpicaduras</p>
              <p class="text-blit">Alambre tubulares autoprotegidos</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Alta Funcionalidad</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">Consumible de soldadura con excelentes características CTOD criogénicas</p>
              <p class="text-blit">Consumible de soldadura de ultra alta resistencia / alta tenacidad para Offshore</p>
              <p class="text-blit">Consumible de soldadura de hidrógeno ultra bajo resistente a la humedad</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Alta Eficiencia</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">Consumible de soldadura por Electro-gas</p>
              <p class="text-blit">Alambre Metal-Cored para soldadura de alta velocidad </p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Adecuado para nuevos grados de acero</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">EGW auto-protegido desarrollado para tanques de almacenamiento</p>
              <p class="text-blit">Desarrollo de alambres tubulares de alta resistencia</p>
              <p class="text-blit">Desarrollo de consumibles de soldadura para acero de estructuras marinas grados de S500/S550/S690</p>
              <p class="text-blit">Desarrollo de consumibles de soldadura adecuados para nuevos procesos de soldadura como automatización / alta eficiencia / alta velocidad / aligeramiento</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
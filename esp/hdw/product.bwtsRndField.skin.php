<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndField.skin.php
+ Description	: product.bwtsRndField
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
      <section class="RnDField">
        <div class="conPd">
          <h5 class="titStyle5"><b>Los siguientes son los campos que la División de Maquinaria de Hyundai Welding investiga y desarrolla constantemente.</b></h5>
        </div>
        <div class="RnDFieldImg"></div>
        <div class="RnDFieldCon">
          <div class="conPd">
            <div class="">
              <h6 class="titStyle3"><b>I+D de BWTS y sus componentes:</b></h6>

              <p class="text-blit">Desarrollo de un dispositivo de electrólisis de agua de mar para mejorar la confiabilidad operativa y la disponibilidad de BWTS</p>
              <p class="text-blit">Desarrollo de procesos ecológicos y productos relacionados para prevenir la calidad del agua y la contaminación del aire.</p>
              <p class="text-blit">Evaluación de material BWTS e investigación práctica en el campo de la electroquímica</p>
              <p class="text-blit">Investigación sobre la mejora del rendimiento del sistema y la optimización del diseño basada en el análisis de flujo</p>
              <p class="text-blit">Investigación sobre la mejora de la calidad de equipos marinos ecológicos (Hi-CON, Hi-Power-V)
</p>
            </div>
            <div class="">
              <ul class="RnDFieldList">
                <li>
                  <p><b>Desarrollo de material de electrodos.</b></p>
                  <div class="right">
                    <img src="<?=$skin_url?>/img/content/bwtsRnD_img01.jpg" />
                  </div>
                </li>
                <li>
                  <p><b>Desarrollo de electrolizador de alta eficiencia.</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img02.jpg" />
                </div>
                </li>
                <li>
                  <p><b>Análisis de flujo térmico y de fluidos</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img03.jpg" />
                  </div>

                </li>
                <li>
                  <p><b>Modelado 3D</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img04.jpg" />
                  </div>

                </li>
              </ul>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
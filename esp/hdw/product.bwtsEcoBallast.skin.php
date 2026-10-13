<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsEcoBallast.skin.php
+ Description	: product.bwtsEcoBallast
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
        <div class="btwsProduct btwsProduct-ecoballast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">TODO EL PRODUCTO</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
EcoBallast es una marca de instalaciones de tratamiento de agua de lastre desarrollada por Hyundai Heavy Industries, y Hyundai Welding tiene una licencia para fabricar EcoBallast.
EcoBallast se basa en tecnologías de filtración e irradiación ultravioleta, y está compuesto por equipos importantes como filtro, lámpara UV, limpieza y control.<br /><br />
El filtro puede reducir significativamente la cantidad de la materia en suspensión en el agua de lastre y evitar la entrada de organismos marinos de más de 50 μm en los tanques de lastre.
El reactor UV está especialmente diseñada para EcoBallast para reducir su espacio de instalación y maximizar su eficiencia de tratamiento, que emplea una lámpara ultravioleta de alta intensidad y presión media.<br /><br />
Para un tratamiento completo del agua, el sistema debe funcionar durante la operación de lastrado y deslastrado, lo que significa que durante el lastrado se realiza un tratamiento adicional del agua, teniendo en cuenta la proliferación de organismos en el agua de mar tratada durante el lastrado.<br /><br />
El equipo CIP (limpieza en el lugar) es un equipo de limpieza automática que limpia las sustancias extrañas que pueden generarse fuera del tubo de protección de la lámpara UV durante la operación de lastrado y deslastrado. Este es un equipo que trabaja para prevenir la degradación de la lámpara UV debido a los contaminantes en el agua del mar.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img//content/ecoballast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Principio Operativo</th>
                  <td>Filtro + UV</td>
                </tr>
                <tr>
                  <th>Consumo de energía<br />(por 1000㎥/h)</th>
                  <td>100kW</td>
                </tr>
                <tr>
                  <th>Punto de tratamiento</th>
                  <td>Lastrado y Debalastrado</td>
                </tr>
                <tr>
                  <th>Características</th>
                  <td>Proceso de desifección ecológico (No químico)<br />No se ve afectado por la temperatura o la salinidad del agua de lastre</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left">
              <img src="<?=$skin_url?>/img/content/ecoballast_btImg01.jpg" alt="" />
            </div>
            <div class="right">

            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
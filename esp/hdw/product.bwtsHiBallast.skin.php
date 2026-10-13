<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiBallast.skin.php
+ Description	: product.bwtsHiBallast
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
        <div class="btwsProduct btwsProduct-hiBallast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">TODO EL PRODUCTO</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hiballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hyundai Welding Co., LTD es una empresa OEM autorizada de HHI y BWTS que cubre las ventas, fabricación, puesta en marcha y capacitación.<br /><br />
El sistema HiBallast se basa en tecnologías electrólisis indirecta (flujo lateral), y está compuesto por equipos importantes como filtro, electrólisis, neutralización y sensor TRO.<br /><br />
El filtro tiene una función de retrolavado automático y elimina físicamente los microbios y organismos mayores de 50 μm en el agua de mar.
Para tratar organismos de menos de 50μm que pasan por el filtro, el ácido hipocloroso de alta concentración (menos de 1,000 mg/l) se produce mediante el método de electrólisis indirecta y se inyecta en la tubería de agua de lastre del barco. El desinfectante producido elimina organismo marítimo y cumple con los requisitos reglamentarios.
<br /><br />
Si el agua de lastre se descarga sin neutralización después del tratamiento del agua, puede tener un efecto nocivo. Por lo tanto, antes de la descarga, se inyecta un neutralizante para eliminar el oxidante que queda en el agua de lastre antes de la descarga.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hiBallast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Principio Operativo</th>
                  <td>Filtro + Electrólisis (Tipo indirecto)</td>
                </tr>
                <tr>
                  <th>Consumo de energía<br />(por 1000㎥/h)</th>
                  <td>50kW lastrado<br />1kW deslastrado</td>
                </tr>
                <tr>
                  <th>Punto de tratamiento</th>
                  <td>tratamiento de agua solo durante el lastrado<br />neutralización durante el deslastrado</td>
                </tr>
                <tr>
                  <th>Características</th>
                  <td>Bajo consumo de energía<br />En áreas de baja salinidad, es posible operar solo con agua de mar del 1% de la capacidad total del tanque de lastre</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left"><h6>Flow diagram for ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg01.jpg" alt="" /></div>
            <div class="right"><h6>Flow diagram for de-ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg02.jpg" alt="" /></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
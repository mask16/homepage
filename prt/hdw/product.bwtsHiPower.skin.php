<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiPower.skin.php
+ Description	: product.bwtsHiPower
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI WELDING</p>
			<h3>Introdução de Negócios</h3>
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
        <div class="btwsProduct btwsProduct-hiPower">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">TODOS OS PRODUTOS
</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hipower.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-Power V usa apenas energia elétrica com um atuador hidráulico autônomo. Usar um atuador eletro-hidráulico oferece as seguintes vantagens.<br /><br />


              <p class="bar-text">Controle de válvula estável usando alto torque</p>
              <p class="bar-text">Baixo consumo de energia</p>
              <p class="bar-text">Aplicável a vários tipos de válvula</p>
              <p class="bar-text">Fácil instalação, operação e ajuste</p>
              <p class="bar-text">Modelos à prova de explosão e não à prova de explosão estão disponíveis</p><br /><br />

              Hi-Power V pode ser aplicado a várias aplicações industriais, como BWTS, planta on / offshore e planta de tratamento de água. Além disso, pode substituir o atuador elétrico, pneumático e hidráulico existente.

            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hipower_topImg.jpg" alt="" /></div>
          </div>

          <div class="btImg">
            <div class="left">
             <!--<h6>Valve</h6>-->
              <img src="<?=$skin_url?>/img/content/hipower_btImg01.jpg" alt="" />
            </div>
            <div class="right">
             <!--<h6>Actuator, Power Pack 등</h6>-->
              <img src="<?=$skin_url?>/img/content/hipower_btImg02.jpg" alt="" />
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
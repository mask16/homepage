<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiCon.skin.php
+ Description	: product.bwtsHiCon
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI WELDING</p>
		<h3>Geschäftseinführung</h3>
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
      <div class="innerWrap">
        <div class="btwsProduct btwsProduct-hicon">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hicon.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-CON ist eine intelligente Steuerung, die entwickelt wurde, um auch unter rauen Umgebungsbedingungen einen stabilen Betrieb zu gewährleisten.
			  Insbesondere hat Hi-CON seine Stabilität und Haltbarkeit durch verschiedene Arten von Umwelttests nachgewiesen, die von der Klassifizierungsgesellschaft gefordert werden, einschließlich Vibration, Kälte / Trockenwärme, Spannungsfestigkeit und anderen erforderlichen Tests.
			  <br /><br />
              Hi-CON bietet verschiedene industrielle Feldanwendungen wie BWTS, FGSS, SCR und verfügt über die folgenden Funktionen.
			  <br /><br />
              <p class="bar-text">Zuverlässiger Betrieb</p>
              <p class="bar-text">Kundenspezifische und benutzerfreundliche Oberflächen</p>
              <p class="bar-text">Unterstützung verschiedener Protokolle</p>
            </div>
          </div>
          <div class="btImg">
            <div class="left"><img src="<?=$skin_url?>/img/content/hicon_btImg01.jpg" alt="" /></div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hicon_btImg02.jpg" alt="" /></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
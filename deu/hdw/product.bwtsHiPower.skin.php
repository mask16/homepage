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
        <div class="btwsProduct btwsProduct-hiPower">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hipower.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-Power V verbraucht nur elektrischen Strom mit einem in sich geschlossenen hydraulischen Stellantrieb.
			  <br /><br />
              Die Verwendung eines elektrohydraulischen Aktuators bietet die folgenden Vorteile. 
			  <br /><br />
              <p class="bar-text">Stabile Ventilsteuerung mit hohem Drehmoment </p>
              <p class="bar-text">Energieeffizient</p>
              <p class="bar-text">Anwendbar auf verschiedenen Ventiltypen</p>
              <p class="bar-text">Einfache Installation, Bedienung und Einstellung </p>
              <p class="bar-text">Explosionsgeschützte und nicht explosionsgeschützte Modelle sind erhältlich</p>
			  <br /><br />
             Hi-Power V kann für verschiedene industrielle Anwendungen wie BWTS, On / Offshore-Anlagen und Wasseraufbereitungsanlagen eingesetzt werden. Darüber hinaus kann es den vorhandenen elektrischen, pneumatischen und hydraulischen Aktuator ersetzen.
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
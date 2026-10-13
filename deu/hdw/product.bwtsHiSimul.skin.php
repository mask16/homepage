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
        <div class="btwsProduct btwsProduct-simul">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
             Hi-Simul K ist ein pädagogisches Simulationsgerät, das Benutzern durch die virtuelle Implementierung des HiBallast-Systems eine 
Systembetriebserfahrung ähnlich der eines Schiffes bietet und die folgenden Hauptmerkmale aufweist.<br /><br />

              <p class="bar-text">Bereitstellung einer Systembetriebsumgebung unter Bedingungen, die denen an Bord sehr ähnlich sind</p>
              <p class="bar-text">Verbessert die Fähigkeit des Benutzers, mit Situationen umzugehen, indem eine anormale Fahrsituation erzeugt wird (Szenario-Modus)</p>
              <p class="bar-text">Realisieren Sie eine realistische Sensormesswertüberwachung durch Anwendung realistischer Bedingungen und hochdimensionaler Schätzmodelle</p>
              <p class="bar-text">Manuelles Manipulieren von Fahrdaten, um verschiedene vom Benutzer gewünschte Situationen zu schaffen</p>
              <p class="bar-text">Online-Bildung verfügbar</p>
              <p class="bar-text">Verfügbar für Fernunterricht</p>
            </div>
          </div>
          <div class="btImg">
            <img src="<?=$skin_url?>/img/content/simul_btImg03.jpg" alt="" />
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
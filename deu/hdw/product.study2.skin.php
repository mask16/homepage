<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study2.skin.php
+ Description	: product.study2
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
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5"><b>Es ist ein Bereich, der bei Hyundai Welding konsequent erforscht und weiterentwickelt wird.</b></h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>Entwicklung von Schweißzusatzwerkstoffen</b></h6>
          <div>
            <p class="text-blit">Entwicklung optimierter Produkte für Tieftemperatur-Servicestähle, hochfeste Stähle und hitzebeständige Stähle</p>
            <p class="text-blit">Entwicklung von Sonderlösungen für den Schiffbau, Offshore, Stahlbau und Kraftwerksbau </p>
            <p class="text-blit">Entwicklung innovativer und funktionalisierter Produkte für allgemeine Zwecke wie Schiffbau, Stahlkonstruktion, Bauwesen, Schwermaschinen und Automobile</p>
            <p class="text-blit">Industrielle gemeinsame Forschung und Entwicklung für die Anwendung neuer Stahlsorten, neuer Schweißmaterialien und neuer Schweißtechniken, um eine Gesamtlösungstechnologie bereitzustellen</p>
            <p class="text-blit">Implementierung einer Erhöhung der Schweißgeschwindigkeit und -effizienz, der mechanischen Gütewerte, der Rissbeständigkeit und der Umweltfreundlichkeit</p>
          </div>
          <h6 class="titStyle3"><b>Erforschung der Schweißtechnik</b></h6>
          <div>
            <p class="text-blit">Bewertung der Eigenschaften der Schweißdrahtzufuhr durch Lichtbogenüberwachung</p>
            <p class="text-blit">Erforschung von Techniken zur Leistungsverbesserung durch Bewertung und Analyse der mechanischen Eigenschaften von Schweißmaterialien</p>
            <p class="text-blit">Untersuchung der Eigenschaften von geschweißten Bauteilen anhand von Schweißparametern</p>
		  </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
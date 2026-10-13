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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>In diese Richtung wird im Forschungszentrum von Hyundai PNS ein Schweißgerät entwickelt.</b></h5>
          <h6 class="titStyle1 c-gray"><p>Entwicklungsrichtung</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Produktstabilität</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Entwicklung eines Systems, das unabhängig von Änderungen der äußeren Umgebung wie hohen Temperaturen, hoher Luftfeuchtigkeit und Staub ist</p>
              <p class="text-blit">Hervorragende Haltbarkeit und Retention</p>
              <p class="text-blit">Übernehmen Sie die Funktion mehrerer Schutzschaltungen</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Hohe Funktionalität</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">Entwicklung der Linie für Nichteinsen Metalle mit verschiedenen Impulssteuerungstechniken wie SAC und SPC. SAC (Surface Arc Control), SPC (Suface Pulse Control)</p>
              <p class="text-blit">Entwicklung und Stabilisierung eines SAW-Schweißsystems für große Wechselrichter</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Hohe Effizienz</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">Hochgeschwindigkeitsschaltung und weiches Schalten Das Wechselrichtersystem mit Vollbrückensteuerung erzielt einen Wirkungsgrad von über 90%</p>
              <p class="text-blit">Optimierung der Stromeffizienz durch Minimierung der Standby-Leistung</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Kundenspezifische Entwicklung</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">Self Shield EGW-Entwicklung für Silo- und Tankbau</p>
              <p class="text-blit">Entwicklung von hochfestem FCW</p>
              <p class="text-blit">Entwicklung von Schweißmaterial für Stahl S500, S550, S690 für Offshore-Strukturen</p>
              <p class="text-blit">Entwicklung von Schweißmaterialien für neue Schweißverfahren wie Automatisierung, hohe Effizienz, hohe Geschwindigkeit und geringes Gewicht</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
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
          <h5 class="titStyle5"><b>Es ist ein Bereich, der bei Hyundai Welding konsequent erforscht und weiterentwickelt wird.</b></h5>
          <h6 class="titStyle1 c-gray"><p>Entwicklung</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Umweltfreundlich</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Schweißzusätze mit geringer Schweißrauchbildung</p>
              <p class="text-blit">Schweißzusätze für niedriegen Mangang-Gehalt</p>
              <p class="text-blit">Schweißzusätze für spritzerarmes Schweißen</p>
              <p class="text-blit">Selbstschützende Fülldrahtelektroden</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Hochfunktionell</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">Außergewöhnliche CTOD-Leistung unter kryogenen Bedingungen</p>
              <p class="text-blit">Ultrahochintensive / hochfeste Schweißzusätze für die Offshore-Industrie</p>
              <p class="text-blit">Schweißzusätze mit geringer Feuchtigkeitsaufnahme und besonders niedrigem Wasserstoffgehalt</p>
			</div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Hohe Effizienz</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">Schweißzusatzwerkstoffe für das Elektrogasschweißen</p>
              <p class="text-blit">Metallpulver-Fülldrähte für das Hochgeschwindigkeitsschweißen</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Geeignet für neue Stahlsorten</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">Entwicklung selbstschützender Fülldrahtelektroden Elektro-Gas-Schweißen (EGW) für den Silo-und Tankbau</p>
              <p class="text-blit">Entwicklung hochfester Fülldrähte</p>
              <p class="text-blit">Entwicklung Schweißzusätze für Offshore-Stahlsorten S500 / S550 / S690</p>
              <p class="text-blit">Entwicklung Schweißzusätze, automatisierte Schweißverfahren / Hocheffizientes Schweißen / Hochgeschwindigkeitsschweißen / Schweißen im Dünnblechbereich</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
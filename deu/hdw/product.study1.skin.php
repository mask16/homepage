<?php
/***************************************************************
+ Page Name      : /skin/dc/kor/hdw/product.study1.skin.php
+ Description    : product.study1 (study1 + study2 + study3 통합)
***************************************************************/
if( !defined('_GNUBOARD_') ) EXIT;
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

    <!-- [1] study1 -->
    <section class="productStudy1">
      <div class="conPd">
        <h5 class="titStyle5">
          <b>
            Das Pohang-Tech-Laboratorium der Hyundai Welding Company konzentriert sich auf die Entwicklung von kundenspezifische schweißtechnische Lösungen.
          </b>
        </h5>
      </div>
      <div class="productStudyImg"></div>
      <div class="productStudy1Con">
        <div class="conPd">
          Seit seiner Gründung im Jahr 1977 hat es zur Entwicklung der Metallverarbeitenden-Industrie in Südkorea beigetragen, indem es Schweißelektroden, UP-Drähte und Schweißpulver (SAW), MSG-Drahtelektroden, Fülldrähte (FCW), WIG-Schweißstäbe und Nickelegierte Schweißzusätze erforscht und entwickelt. Wir fördern eine gegenseitige Entwicklung durch einen engen Technologieaustausch mit großen inländischen (Südkorea) Unternehmen und legen gemeinsam Strategien fest sowie mit unseren Niederlassungen weltweit.
          <br /><br />
          Darüber hinaus entwickeln wir stetig neue Schweißzusatzwerkstoffe und stärken unsere Produktzuverlässigkeit durch systematische Zusammenarbeit mit staatlichen Forschungsinstituten. Basierend auf dem Know-how führender Ingenieure werden wir hochfunktionierende, umweltfreundliche, hocheffiziente neue Produkte entwickeln und uns bemühen, ein Forschungsinstitut zu werden, das den Kunden mit seinen kundenspezifischen Dienstleistungen einen Schritt voraus ist, im In- und auch im Ausland. Das Institut ist bestrebt, die Produktivität und Produktqualität zu verbessern, neue Produkte zu entwickeln, die den Kundenanforderungen entsprechen, und Schweißmaterialien zu entwickeln, die sich an Marktveränderungen anpassen.
        </div>
      </div>
    </section>

    <div style="height:60px;"></div>

    <!-- [2] study2 -->
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

    <div style="height:100px;"></div>

    <!-- [3] study3 -->
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

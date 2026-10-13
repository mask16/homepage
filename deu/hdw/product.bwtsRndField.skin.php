<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndField.skin.php
+ Description	: product.bwtsRndField
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
      <section class="RnDField">
        <div class="conPd">
          <h5 class="titStyle5">
			<b>
				Die folgenden Bereiche werden von der Maschinenabteilung von Hyundai Welding ständig erforscht und weiterentwickelt.
			</b>
		  </h5>
        </div>
        <div class="RnDFieldImg"></div>
        <div class="RnDFieldCon">
          <div class="conPd">
            <div class="">
              <h6 class="titStyle3"><b>F & E zu BWTS und seinen Komponenten</b></h6>

              <p class="text-blit">Entwicklung einer Elektrolyseeinheit zur Verbesserung der Betriebssicherheit und Verfügbarkeit von BWTS</p>
              <p class="text-blit">Entwicklung umweltfreundlicher Verfahren und verwandter Produkte zur Vermeidung von Wasser- und Luftverschmutzung</p>
              <p class="text-blit">Bewertung von BWTS-Material und praktische Forschung auf dem Gebiet der Elektrochemie</p>
              <p class="text-blit">Forschung zur Verbesserung der Systemleistung und zur Optimierung des Designs basierend auf der Durchflussanalyse</p>
              <p class="text-blit">Forschung zur Verbesserung der Qualität umweltfreundlicher Schiffsausrüstung (Hi-CON, Hi-Power-V)</p>
            </div>
            <div class="">
              <ul class="RnDFieldList">
                <li>
                  <p><b>Entwicklung von Elektrodenmaterial</b></p>
                  <div class="right">
                    <img src="<?=$skin_url?>/img/content/bwtsRnD_img01.jpg" />
                  </div>
                </li>
                <li>
                  <p><b>Entwicklung eines hocheffizienten Elektrolyseurs</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img02.jpg" />
                </div>
                </li>
                <li>
                  <p><b>Flüssigkeits- und Wärmeflussanalyse</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img03.jpg" />
                  </div>

                </li>
                <li>
                  <p><b>3D-Modellierung</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img04.jpg" />
                  </div>

                </li>
              </ul>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
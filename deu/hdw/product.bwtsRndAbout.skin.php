<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndAbout.skin.php
+ Description	: product.bwtsRndAbout
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
      <section class="RnDAbout">
        <div class="conPd">
          <h5 class="titStyle5">
			<b>
				Das Forschungs- und Entwicklungszentrum (Technology Research Institute) der Maschinenabteilung von Hyundai Welding konzentriert sich auf die Entwicklung und Forschung von Schiffsausrüstung zum Schutz der Meeresumwelt auf der Grundlage umweltfreundlicher Verarbeitungstechnologie.
			</b>
		  </h5>
        </div>
        <div class="RnDAboutImg"></div>
        <div class="RnDAboutCon">
          <div class="conPd">
            Wir entwickeln unlösliche Elektrodenmaterialien (DSA) durch praktische elektrochemische Forschung, hocheffizienten Elektrolyseur, elektrohydraulisches Ventil und intelligentes Steuerungssystem.
			<br>
			Wir sind bestrebt, mithilfe verschiedener Computersimulations- und Konstruktionsmethoden wie der Durchflussanalyse von ein- und mehrphasigem Fluid mithilfe der CFD-Simulation (Computational Fluid Dynamics), der Analyse des thermischen Durchflusses und der Leistung sowie der Rohrleitungstechnik (3D-Modellierung) optimale Ergebnisse zu erzielen. Basierend auf diesen Technologien forschen wir daran, das Design zu optimieren und die Systemeffizienz zu steigern.
			<br>
			Außerdem konzentrieren wir uns auf die Entwicklung neuer Produkte und Verfahren mit höherer Wertschöpfung, indem wir die Trends innovativer Technologien in den umweltfreundlichen Bereichen analysieren.
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
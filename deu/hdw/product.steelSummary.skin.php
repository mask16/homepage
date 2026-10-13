<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.steelSummary.skin.php
+ Description	: product.steelSummary
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

	<div class="subContent steelSummary">
      <div class="conPd">
        <h5 class="titStyle5">
			<b>
				Wir verfolgen die Win-Win-Strategie mit unseren Kunden aufgrund der langjährigen Erfahrung in der Metallverteilung und der optimalen Servicebereitstellung.
			</b>
		</h5>
      </div>
      <div class="steelSummaryImg"></div>
      <div class="conPd">
        <p class="text-style1">
			Hyundai Welding vertreibt verschiedene Stahlteile wie Stahlblech, warmgewalzten Stahl, kaltgewalzten Stahl, Stahlrohr, H-Profil und Edelstahl in Zusammenarbeit mit weltweit führenden Metallunternehmen mit Sitz in China und Korea als Hyundai Steel Co., welche Automotive Produkte spezialisiert ist.
			Insbesondere verfolgen wir mit unseren Kunden eine Win-Win-Strategie aufgrund der langjährigen Erfahrungen im Metallvertrieb und der optimalen Dienstleistungen, die von herausragenden Team erbracht wird.
		</p>
      </div>
    </div>
  </div>
  <!-- subWrap// -->
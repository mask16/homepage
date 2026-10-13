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
			<h3>Nos activités</h3>
	</div>
	</div>
</section>


  <div class="subWrap">
    <section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
		<!-- subNav -->
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
		<!--//subNav -->
	</section>

	<div class="subContent">
      <section class="RnDAbout">
        <div class="conPd">
          <h5 class="titStyle5"><b>Le centre de recherche et développement de Hyundai Welding se concentre sur le développement et la recherche d'équipements marins pour préserver l'environnement marin sur la base d'une technologie de processus écologique.</b></h5>
        </div>
        <div class="RnDAboutImg"></div>
        <div class="RnDAboutCon">
          <div class="conPd">
            Nous développons des matériaux d'électrode insoluble (DSA) grâce à des recherches électrochimiques pratiques, un électrolyseur à haut rendement, une vanne électrohydraulique et un système de contrôle intelligent.<br /><br />

			Nous nous efforçons d'obtenir des résultats optimaux en utilisant diverses techniques d'analyse et d'ingénierie informatiques, telles que l'analyse d'écoulement monophasé et multi-fluides, l'analyse des flux thermiques et des performances, et l'ingénierie des tuyaux (modélisation 3D) à l'aide de la simulation de dynamique des fluides par ordinateur (CFD). Sur la base de ces technologies, nous recherchons pour optimiser la conception et augmenter l'efficacité du système.<br /><br />

			En outre, nous nous concentrons sur le développement de nouveaux produits et procédés à plus forte valeur ajoutée en analysant les tendances des technologies innovantes dans les domaines respectueux de l'environnement.<br /><br />
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
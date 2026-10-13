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
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5"><b>Domaines contamment en recherche et en développement.</b></h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>Développement de consommable de soudage</b></h6>
          <div>
            <p class="text-blit">Développement de produits optimisés pour les aciers à faible température, les aciers à haute résistance et les aciers résistants à la chaleur</p>
            <p class="text-blit">Développement de produits spécialisés pour la construction navale, l'offshore, la construction, l'énergie nucléaire et les centrales électriques</p>
            <p class="text-blit">Développement de produits spécialisés pour la construction navale, la structure métallique, la construction, l'équipement lourd et l'automobile</p>
            <p class="text-blit">R&D, technologie et solution compatible aux nouvelles nuances d'acier, nouveaux consommables de soudage et de nouvelles techniques de soudage</p>
            <p class="text-blit">Mise en œuvre de l'augmentation de la vitesse et l'efficacité de soudage, ténacité élevée, résistance aux fissures et respect l'environnemental</p>
          </div>
          <h6 class="titStyle3"><b>Recherche sur la technologie de soudage</b></h6>
          <div>
            <p class="text-blit">Évaluation des caractéristiques d'alimentation du fil de soudage par la surveillance de l'arc</p>
            <p class="text-blit">Recherche sur les techniques d'amélioration des performances par l'évaluation et l'analyse des propriétés mécaniques des matériaux de soudage</p>
            <p class="text-blit">Etude des caractéristiques des pièces à souder en fonction des paramètres de soudage</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
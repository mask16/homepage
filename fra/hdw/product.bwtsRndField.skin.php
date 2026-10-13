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
			<h3>Business Introduction</h3>
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
      <section class="RnDField">
        <div class="conPd">
          <h5 class="titStyle5"><b>Voici les domaines contamment en recherche et en développement.</b></h5>
        </div>
        <div class="RnDFieldImg"></div>
        <div class="RnDFieldCon">
          <div class="conPd">
            <div class="">
              <h6 class="titStyle3"><b>R&D sur BWTS</b></h6>

              <p class="text-blit">Développement d'électrolyse pour améliorer la fiabilité opérationnelle et la disponibilité des BWTS</p>
              <p class="text-blit">Développement de procédés écologiques et de produits associés pour prévenir la pollution de l'eau et de l'air</p>
              <p class="text-blit">Évaluation du matériel BWTS et recherche pratique dans le domaine de l'électrochimie</p>
              <p class="text-blit">Recherche sur l'amélioration des performances du système et l'optimisation de la conception basée sur l'analyse des flux</p>
              <p class="text-blit">Recherche sur l'amélioration de la qualité des équipements marins respectueux de l'environnement (Hi-CON, Hi-Power-V)</p>
            </div>
            <div class="">
              <ul class="RnDFieldList">
                <li>
                  <p><b> Développement du matériau d'électrode</b></p>
                  <div class="right">
                    <img src="<?=$skin_url?>/img/content/bwtsRnD_img01.jpg" />
                  </div>
                </li>
                <li>
                  <p><b>Développement d'électrolyseur à haut rendement</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img02.jpg" />
                </div>
                </li>
                <li>
                  <p><b>Analyse des fluides et des flux thermiques</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img03.jpg" />
                  </div>

                </li>
                <li>
                  <p><b>Modélisation 3D</b></p>
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
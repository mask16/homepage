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
			<h3>Nos activités</h3>
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
          <h5 class="titStyle5"><b>Voici la direction du développement du poste à souder au centre de recherche de Hyundai PNS.</b></h5>
          <h6 class="titStyle1 c-gray"><p>Direction du développement</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Stabilité du produit</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Développement d'un système indépendant des changements de l'environnement externe (haute températures, haute humidité, et la poussière)</p>
              <p class="text-blit">Excellente durabilité et rétention</p>
              <p class="text-blit">Adoptation d'une fonction de circuit de protection multiple</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Grande Fonctionnalité</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">Développement de la technologie de soudage de lignes non ferreuses avec diverses techniques de contrôle par impulsions telles que SAC et SPC. SAC (contrôle d'arc de surface), SPC (contrôle d'impulsion de surface)</p>
              <p class="text-blit">Développement et stabilisation d'un système de soudage SAW à grand inverseur de courant</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Haute efficacité</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">Commutation à grande vitesse et commutation douce, full bridge inverter système réalise plus de 90% d'efficacité</p>
              <p class="text-blit">Optimisation de l'efficacité électrique en minimisant la puissance de veille</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Développement personnalisé</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">Développement de l'EGW sans gaz pour les réservoirs de stockage</p>
              <p class="text-blit">Développement de FCW à haute résistance</p>
              <p class="text-blit">Développement de consommables de soudage pour les nuances d'acier des structures offshores S500 / S550 / S690</p>
              <p class="text-blit">Développement de consommables de soudage adaptés aux nouveaux procédés de soudage tels que l'automatisation / haute efficacité / haute vitesse / allégement du poids</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>Direction du développement et statut au Hyundai Welding Research Institute.</b></h5>
          <h6 class="titStyle1 c-gray"><p>Direction du développement</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Écologique</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Consommables de soudage à faible taux de fumée</p>
              <p class="text-blit">Consommables de soudage à faible teneur en Mn</p>
              <p class="text-blit">Consommables de soudage avec faibles projections</p>
              <p class="text-blit">Fil fourré sans gaz</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Grande Fonctionnalité</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">Performances CTOD extraordinaires dans des conditions cryogéniques</p>
              <p class="text-blit">Consommables de soudage à très haute intensité / haute résistance pour les industries offshore</p>
              <p class="text-blit">Consommables de soudage anti-humidité à faible niveau d'hydrogène</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Haute efficacité</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">Consommables de soudage électro-gaz</p>
              <p class="text-blit">Fils fourrés à poudre métalliques à grande vitesse</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Compatible aux nouvelles nuances d'acier</b></h6>
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
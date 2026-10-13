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
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5">
		  <b>
		  C'est un domaine qui a été continuellement recherché et développé par Hyundai PNS.
		  </b>
		  </h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>Développement d'équipement de soudage</b></h6>
          <div>
            <p class="text-blit">Développement de produits exclusifs optimisés pour les chantiers navals, les usines et les pièces automobiles</p>
            <p class="text-blit">Développement de synergies compatible avec divers matériaux de soudage</p>
            <p class="text-blit">Développement d'une technique de soudage pour réaliser la stabilité de l'arc et de faibles projections</p>
            <p class="text-blit">Développement d'un chargeur et d'un chariot capables d'une alimentation constante avec une commande moteur stabilisée</p>
            <p class="text-blit">Développement d'un système de surveillance afin d'améliorer la productivité</p>
            <p class="text-blit">Amélioration d'utilisation en développant HMI</p>
            <p class="text-blit">Développement des produits qui répondent aux exigences des clients avec un design ultra-léger et élégant</p>
          </div>
          <h6 class="titStyle3"><b>Recherche de brevets sur les équipements de soudage</b></h6>
          <div>
            <p class="text-blit">Dispositif de détection de déséquilibre de courant</p>
            <p class="text-blit">Dispositif de soudage à contrôle automatique de gaz de protection</p>
            <p class="text-blit">Puissance électrique pour poste à souder</p>
            <p class="text-blit">Panneau de commande pour poste à souder</p>
            <p class="text-blit">Contrôle constant de la vitesse du moteur du chargeur de la poste de soudage à l'arc</p>
            <p class="text-blit">Dispositif de contrôle du retour de flamme et méthode de soudage à l'arc</p>
            <p class="text-blit">Méthode de contrôle du soudage par impulsions pour fil fourré utilisant 100% de gaz CO2</p>
            <p class="text-blit">Dispositif de soudage qui détecte le contact du matériau de base et du fil</p>
            <p class="text-blit">Dispositif d'alimentation du fil de soudage</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
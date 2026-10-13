<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiSimul.skin.php
+ Description	: product.bwtsHiSimul
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
      <div class="innerWrap">
        <div class="btwsProduct btwsProduct-simul">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-Simul K est un équipement de simulation qui offre aux utilisateurs une expérience de fonctionnement du système dans des conditions similaires à bord en implémentant virtuellement le système HiBallast, et présente les principales caractéristiques suivantes
			  <br /><br />

              <p class="bar-text">Fournit un environnement d'exploitation du système dans des conditions très similaires à celles à bord</p>
              <p class="bar-text">Amélioration de la capacité de l'utilisateur à faire face à toute circonstance en appliquant différents modes de scénario.</p>
              <p class="bar-text">Réalisation d'une surveillance réaliste de la valeur de mesure du capteur grâce à l'application de conditions du monde réel et de modèles d'estimation à haute dimension</p>
              <p class="bar-text">Créer diverses situations en ajustant les paramètres de fonctionnement</p>
              <p class="bar-text">Enseignement à distance est possible </p>
             <!--  <p class="bar-text">Portable educational device</p> -->
            </div>
          </div>
          <div class="btImg">
            <img src="<?=$skin_url?>/img/content/simul_btImg03.jpg" alt="" />
          </div>
            <img src="<?=$skin_url?>/img/content/simul_btImg04.jpg" alt="" />
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
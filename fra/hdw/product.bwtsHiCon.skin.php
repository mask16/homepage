<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiCon.skin.php
+ Description	: product.bwtsHiCon
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
        <div class="btwsProduct btwsProduct-hicon">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hicon.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-CON est un contrôleur intelligent développé pour permettre un fonctionnement stable même dans des conditions environnementales sévères, telles que les navires. En particulier, Hi-CON garantit la stabilité et la durabilité grâce à divers types d'essais environnementaux exigés par la société de classification, y compris les vibrations, la chaleur froide / sèche, la tension de tenue et tout autre essai requis. <br /><br />

			  Hi-CON peut être appliqué à divers systèmes de contrôle automatique tels que BWTS, FGSS et SCR, et présente les caractéristiques suivantes:<br /><br />

              <p class="bar-text">Environnement de conduite stable</p>
              <p class="bar-text">Interface conviviale et optimisée</p>
              <p class="bar-text">Fournit divers types de connexion de communication</p>
            </div>
          </div>
          <div class="btImg">
            <div class="left"><img src="<?=$skin_url?>/img/content/hicon_btImg01.jpg" alt="" /></div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hicon_btImg02.jpg" alt="" /></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsEcoBallast.skin.php
+ Description	: product.bwtsEcoBallast
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
        <div class="btwsProduct btwsProduct-ecoballast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
EcoBallast est un système de traitement des eaux de ballast développé par Hyundai Heavy Industries Co., Ltd. (HHI) et Hyundai Welding Co., Ltd. est une société OEM autorisée de HHI BWTS et couvre les ventes, la conception, la fabrication, la mise en service et la formation.<br /><br />
EcoBallast est basé sur des technologies de filtration et d'irradiation ultraviolette, et il est composé d'équipements majeurs tels que filtre, réacteur UV, CIP (Cleaning in Place) et unité de contrôle du système.<br /><br />

Les équipements de filtration peuvent réduire considérablement la quantité de sédiments dans l'eau de ballast et empêcher la pénétration d'organismes marins au-dessus de 50 μm.
Les réacteur UV est spécialement conçu pour le système EcoBallast afin d'économiser l'espace d'installation et de maximiser l'efficacité de traitement en utilisant des réacteur UV à haute intensité.<br /><br />
Pour un traitement complet, l'eau de ballast est traitée à l'entrée (ballastage) et à nouveau au rejet (déballastage). En d'autres termes, le traitement supplémentaire des eaux de ballast est effectué lors du déballastage afin d'éviter la prolifération d'organismes marins dans l'eau de mer traitée lors du ballastage.<br /><br />
CIP (Cleaning in-place) est un dispositif de nettoyage automatique qui nettoie les manchons en quartz recouvrant les reacteurs UV après chaque opération de ballastage ou de déballastage. Il s'agit d'un équipement pour empêcher la dégradation des lreacteurs UV due aux contaminants marins.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img//content/ecoballast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Principe</th>
                  <td>Filter + UV</td>
                </tr>
                <tr>
                  <th>Consommation électrique<br />(pour 1 000㎥ / h)</th>
                  <td>100kW</td>
                </tr>
                <tr>
                  <th>Point de traitement</th>
                  <td>ballastage / déballastage</td>
                </tr>
                <tr>
                  <th>Caractéristiques</th>
                  <td>système écologique (non chimique)<br />Aucun effet sur la température / salité</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left">
              <img src="<?=$skin_url?>/img/content/ecoballast_btImg01.jpg" alt="" />
            </div>
            <div class="right">

            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
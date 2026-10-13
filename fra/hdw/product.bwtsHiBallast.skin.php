<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiBallast.skin.php
+ Description	: product.bwtsHiBallast
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
        <div class="btwsProduct btwsProduct-hiBallast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hiballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hyundai Welding Co., Ltd. est une société OEM autorisée de HHI BWTS et couvre les ventes, la conception, la fabrication, la mise en service et la formation.
Le système HiBallast est basé sur des technologies de filtration et d'électrolyse indirecte (à flux latéral), et est composé d'équipements majeurs tels que le filtre, l'unité d'électrolyse, l'unité de neutralisation et l'unité de capteur TRO.<br /><br />

Le filtre a une fonction automatique de lavage du dos et supprime physiquement les organismes marins nocifs, plus grands que 50 μm, infromant l'eau de last.Pour traiter les microorganismes de moins de 50 μm qui passent par le filtre, une forte concentration (mais moins de 1000 mg/L d'acide hypochloroux en Cl2) est produite par électrolyse indirecte et injectée dans le tuyau d'eau de ballast du navire.<br /><br />
Si l'eau de ballast est rejetée sans neutralisation après le traitement, cela peut avoir un effet néfaste sur l'environnement marin. Par conséquent, un agent neutralisant est injecté pour éliminer l'oxydant restant dans l'eau de ballast avant rejet.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hiBallast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Principe</th>
                  <td>filtre + électrolyse (indirecte)</td>
                </tr>
                <tr>
                  <th>Consommation électrique <br />(pour 1000 / h)</th>
                  <td>50kW pour le ballastage<br />1kW pour le déballastage</td>
                </tr>
                <tr>
                  <th>Durée du traitement</th>
                  <td>Traitement uniquement pendant le ballastage<br />Traitement de neutralisation pendant le déballastage</td>
                </tr>
                <tr>
                  <th>Caractéristiques</th>
                  <td> faible consommation d'énergie<br />Possibilité de fonctionner dans les zones à faible salinité avec seulement 1% de la capacité totale du ballast.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left"><h6>Flow diagram for ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg01.jpg" alt="" /></div>
            <div class="right"><h6>Flow diagram for de-ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg02.jpg" alt="" /></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
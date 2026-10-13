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
		<h3>Geschäftseinführung</h3>
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
      <div class="innerWrap">
        <div class="btwsProduct btwsProduct-ecoballast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              EcoBallast ist ein Ballastwasseraufbereitungssystem, das von Hyundai Heavy Industries Co., Ltd. (HHI) und Hyundai Welding Co., Ltd. entwickelt wurde. Hyundai Welding Co., Ltd. ist ein autorisiertes OEM-Unternehmen von HHI BWTS und umfasst Vertrieb, Design, Herstellung, Inbetriebnahme und Schulung.
			  EcoBallast basiert auf Filtrations- und UV-Bestrahlungstechnologien und besteht aus Hauptgeräten wie Filter, UV-Reaktor, CIP (Cleaning in Place) und Systemsteuereinheit.
			  <br /><br />
              Der Filter kann die Anzahl der im Ballastwasser suspendierten Feststoffe erheblich reduzieren und das Eindringen von Meeresorganismen von mehr als 50 μm in Ballasttanks verhindern.
			  <br /><br />
              Der UV-Reaktor wurde speziell für EcoBallast entwickelt, um den Installationsraum zu reduzieren und die Behandlungseffizienz zu maximieren. Dabei wird eine hochintensive Mitteldruck-Ultraviolettlampe verwendet.
			  <br /><br />
              Für eine vollständige Ballastwasserbehandlung wird das Ballastwasser beim Einlass (Ballastieren) und erneut beim Ablassen (Entballastieren) behandelt. Mit anderen Worten, die zusätzliche Ballastwasserbehandlung wird während des Deballastierens durchgeführt, um die Vermehrung von Meeresorganismen zu verhindern im behandelten Meerwasser während des Ballastierens.
			  <br /><br />
              Die CIP-Einheit (Cleaning in-Place) ist ein automatisches Reinigungsgerät, das die Quarzhülsen, die die UV-Lampen bedecken, nach jedem Ballastierungs- oder Entballastierungsvorgang reinigt. Es verhindert den Abbau von UV-Lampen aufgrund von Meeresschadstoffen.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img//content/ecoballast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Funktionsprinzip</th>
                  <td>Filter + UV</td>
                </tr>
                <tr>
                  <th>Durchschnittlicher Stromverbrauch<br />(per 1,000㎥/h)</th>
                  <td>100kW</td>
                </tr>
                <tr>
                  <th>Behandlungspunkte</th>
                  <td>Ballasting & Deballasting</td>
                </tr>
                <tr>
                  <th>Eigenschaften</th>
                  <td>
					Umweltfreundliches Desinfektionsverfahren (nicht chemisch)<br>
					Nicht beeinflusst von Temperatur oder Salzgehalt des Ballastwassers
				  </td>
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
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
        <div class="btwsProduct btwsProduct-hiBallast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hiballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hyundai Welding Co., Ltd. ist ein autorisiertes OEM-Unternehmen von HHI BWTS und deckt Vertrieb, Design, Herstellung, Inbetriebnahme und Schulung ab.
			  <br /><br />
              Das HiBallast-System basiert auf indirekten (Seitenstrom-) Elektrolysetechnologien und besteht aus Hauptbestandteilen: Filter, Elektrolyseeinheit, Neutralisationseinheit und TRO-Sensoreinheit.
			  <br /><br />
              Der Filter verfügt über eine automatische Rückspülfunktion und entfernt schädliche Meeresorganismen und Schwebstoffe, die größer als 50 μm sind.
			  <br /><br />
              Um Organismen mit weniger als 50 μm zu behandeln, die den Filter passieren, wird durch indirekte Elektrolyse eine Hypochlorit in hoher Konzentration (jedoch weniger als 1.000mg/l) produziert und in die Ballastwasserleitung des Schiffes injiziert.
			  Erzeugtes Desinfektionsmittel töten Meereslebewesen und erfüllen die gesetzlichen Anforderungen.
			  <br /><br />
              Wenn das Ballastwasser nach der Behandlung ohne Neutralisation abgelassen wird, kann dies schädliche Auswirkungen auf die Meeresumwelt haben. Daher wird das Neutralisationsmittel injiziert, um das verbleibende Desinfektionsmittel im Ballastwasser vor dem Ablassen zu entfernen.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hiBallast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Funktionsprinzip</th>
                  <td>Filter + Elektrolyse (Typ Indirekt (Seitenstrom))</td>
                </tr>
                <tr>
                  <th>Durchschnittlicher Stromverbrauch<br />(per 1,000㎥/h)</th>
                  <td>Während des Ballastierens 50 kW<br>Während des Ballastierens 1 kW</td>
                </tr>
                <tr>
                  <th>Behandlungspunkt</th>
                  <td>Wasseraufbereitung nur während des Ballastierens / Neutralisieren während des Deballastierens</td>
                </tr>
                <tr>
                  <th>Eigenschaften</th>
                  <td>
					Geringer Stromverbrauch<br />
					Im Bereich mit niedrigem Salzgehalt kann die Elektrolyseeinheit von HiBallast mit Meerwasser betrieben werden, das nur 1% der gesamten zu behandelnden Ballastwasserkapazität ausmacht.
				  </td>
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
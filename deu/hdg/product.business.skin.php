<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.history.skin.php
+ Description	: about.history
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI GLOVILLE</p>
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
      <section class="businessGloville innerWrap">
        <div class="conPd">
          <h5 class="titStyle5">
			<b>
				Das Hauptgeschäftsfeld von Hyundai Gloville sind Seefracht- und Landtransportdienstleistungen im Im- und Export. Zusätzlich zu diesen Dienstleistungen bieten wir auch Logistikdienstleistungen wie Frachtlagerung, Exportverpackung, Abwicklung von Flughafengeschäften, Transport von Spezialfracht und vieles mehr.
			</b>
		  </h5>

          <div class="businessGlovilleWrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Seefracht- und Landtransportdienstleistungen (Im- und Export)</b></h6>
              <p class="text-blit">Luftfracht, Seefracht Import und Export LCL / FCL, Güterverkehr</p>
              <p class="text-blit">Inländischer Güterverkehr (Unternehmenslogistik)</p>
              <p class="text-blit">Spezialfrachttransporte: Schwerlasttransporte, Kühllager, Ausstellungsgegenstände </p>
              <p class="text-blit">Projektladung</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville01.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>3PL / Lagerhaltung</b></h6>
              <p class="text-blit">Bestandsverwaltung, Lagerverwaltung, Transport, Inspektion, Verpackung usw.</p>
              <p class="text-blit">Lagerservices für landesweite Hauptvertriebszentren</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville02.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>Flughafen- / Hafenindustrie</b></h6>
              <p class="text-blit">Flughafentransfer / ULD-Transport</p>
              <p class="text-blit">Lager-, Empfangs- und Weiterleitungsverwaltung</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville03.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>Frachtverpackung (Export)</b></h6>
              <p class="text-blit">Aktuelle Verpackungsausrüstung und Arbeitsumgebung (luftdichte Verpackung, SKID, Vakuumverpackung usw.)</p>
              <p class="text-blit">Reduzierung der Logistikkosten der Kunden durch Verpackung der Systemintegration in den Transport</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville04.png" alt="" /></div>

            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
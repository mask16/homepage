<?php
/***************************************************************
+ Page Name		:
+ Description	:
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

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>Handhabung und Kontrolle</b></h6>
              <p class="titStyle5">HYUNDAI<br/>Visibility</p>
            </div>
            <div>
              <p class="">Echtzeit-Frachtverfolgung durch systematischen Informationsaustausch mit den Linienschiffen und Fluggesellschaften</p>
              <p class="">Genaue Zeitplanverwaltung des Abfahrts- und Ankunftshafens</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>Dedizierte Services</b></h6>
              <p class="titStyle5">HYUNDAI<br/>SQM</p>
              <b class="c-gray">service quality management</b>
            </div>
            <div>
              <p class="">Betrieb einer Task Force für jeden Kunden</p>
              <p class="">Wöchentliche Service- und Qualitätsprüfung für jeden Kunden (SQI, KPI-Bericht)</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>Logistiksicherheit</b></h6>
              <p class="titStyle5">HYUNDAI<br/>SSM</p>
              <b class="c-gray">security & safety management</b>
            </div>
            <div>
              <p class="">Betrieb des Sicherheitsleitfadens und der Task Force</p>
              <p class="">Management der regelmäßigen Sicherheitserziehung</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>After-Service</b></h6>
              <p class="titStyle5">HYUNDAI<br/>CCM</p>
              <b class="c-gray">claim & complaint management</b>
            </div>
            <div>
              <p class="">Management des Notfallunfallprozesses / Vor-Ort-Service / Versenderbesuchsservice</p>
              <p class="">Umfrage zur Kundenzufriedenheit, Analyse / Verbesserung von Beschwerden</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
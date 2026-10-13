<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsCharter.skin.php
+ Description	: sus.ethicsCharter
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>
.sus4Img {width:100%;height:300px;background:url("<?=$skin_url?>/img/content/sus4.jpg") no-repeat center;background-size:cover;margin:30px 0;
	transition:height .2s;
	-webkit-transition:height .2s;
	-ms-transition:height .2s;
	-moz-transition:height .2s;
	-o-transition:height .2s;
}
				@media only all and (max-width: 959px) {
				.sus4Img {width:100%;height:200px;}
				}
</style>
  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI WELDING</p>
		<h3>Nachhaltigkeitsmanagement</h3>
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

    <div class="subContent conPd">
      <section class="susWrap susCharter">
        <div class="subTitleArea" style="border-bottom:solid 1px #e5e5e5;padding-bottom:50px;">
          <h3 class="titStyle5"><b>SHE (Safety, Health and Environment) Management </b></h3>
          <h3 class="text-style1">
			<b>Vision des SHE-Managements<br><br>
				<p class="titStyle5">„Sicherheit und Gesundheit stehen bei allem, was wir tun, an erster Stelle und gewährleisten den Schutz unserer Belegschaft und unseres Arbeitsplatzes.“</p>
			</b>
		  </h3>
        <div class="sus4Img"></div>
        </div>

        <div class="text-style1">
          <p class="titStyle5 pb10"><b>4 Grundsätze des SHE-Managements</b></p>
        </div>

        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>1. Einrichtung eines SHE-Managementsystems</b></p>
		  <p>- Einrichtung eines „Sicherheits-, Gesundheits- und Umweltmanagementteams“ mit speziellen Sicherheits- und Gesundheitsabteilungen in jedem Geschäftsbereich, um ein systematisches Sicherheits- und Gesundheitssystem zur Vermeidung von Arbeitsunfällen umzusetzen.	<br>
- Legen Sie die Managementleistung im Bereich Sicherheit, Gesundheit und Umwelt (SHE) sowohl internen als auch externen Stakeholdern transparent offen.<br>
- Priorisieren Sie die Sicherheit und Gesundheit der Umwelt, der Mitarbeiter, Geschäftspartner, Kunden und der lokalen Gemeinschaft.<br>
- Erhalten Sie die Zertifizierungen ISO 14001 (Internationaler Standard für Umweltmanagementsysteme) und ISO 45001 (Arbeitsschutzmanagementsysteme).<br>
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>2. Sichere Arbeitsplätze schaffen</b></p>
		  <p>- Fördern Sie in allen Geschäftsbereichen eine „Sicherheit geht vor“-Kultur.<br>
		  - Führen Sie regelmäßige Inspektionen von Einrichtungen und Geräten am Arbeitsplatz durch, um Gefahren zu erkennen und das Risiko von Unfällen und Verletzungen zu minimieren.br>
		 - Befähigen Sie Mitarbeiter und Geschäftspartner, aktiv zu einem sicheren Arbeitsplatz beizutragen, indem Sie umfassende Gesundheits- und Sicherheitsschulungen anbieten. Vermitteln Sie unseren Mitarbeitern die notwendigen Kenntnisse und Fähigkeiten, um potenzielle Gefahren zu erkennen und Sicherheitsprotokolle einzuhalten.<br>
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>3. Förderung gesunder Arbeitsplätze</b></p>
		  <p>- Implementierung eines proaktiven Gesundheitsmanagementsystems mit Schwerpunkt auf Prävention.<br>
		 - Führen Sie regelmäßige Audits und Schweißrisikobewertungen durch, um gefährliche Substanzen (z. B. Schweißrauch und Staub) in Arbeitsbereichen zu identifizieren.<br>
		 - Die Auswirkungen gesundheitsbezogener Gefahren durch die Umsetzung wirksamer Kontrollmaßnahmen abmildern.<br>
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>4. Schaffung umweltfreundlicher Arbeitsplätze</b></p>
		  <p>- Reduzieren Sie den ökologischen Fußabdruck und mindern Sie Umweltrisiken durch kontinuierliche Überwachung.<br>
		 - Einhaltung von Umweltgesetzen und -vorschriften und proaktive Reaktion auf nationale und internationale Umweltprobleme.<br>
		 - Treiben Sie umweltfreundliche Geschäftsinitiativen voran, indem Sie Innovationen und Investitionen in neue umweltfreundliche Technologien und Produkte fördern.<br>
		  </p>
        </div>

		<p style="margin:20px 0">
			<a href="/pdf/Hyundai_Welding_Environmental_Management_Policy_Kor.pdf" target="_blank" class="btn btnLineGray btn-round" style="margin-right:10px; margin-bottom:10px">
				<i class="xi-document xi-x"></i> Hyundai Welding Environmental Management Policy PDF Korean
			</a>
			<a href="/pdf/Hyundai_Welding_Environmental_Management_Policy_Eng.pdf" target="_blank" class="btn btnLineGray btn-round">
				<i class="xi-document xi-x"></i> Hyundai Welding Environmental Management Policy PDF English
			</a>
		</p>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
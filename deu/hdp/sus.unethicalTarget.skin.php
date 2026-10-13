<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail.skin.php
+ Description	: sus.unethicalResultDetail.skin.php
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI PNS</p>
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

    <div class="subContent">
      <section class="susWrap">
        <div class="conPd">
          <div class="subTitleArea">
            <p class="text-style1">
				<b>
					Führungskräfte und Mitarbeiter müssen gemäß den Richtlinien für ethisches Management Bericht erstatten. Wenn sie jedoch nicht im Text angegeben sind oder die Möglichkeit von Meinungsverschiedenheiten bei der Interpretation besteht, wenden Sie sich an das Ethikmanagementbüro. Das Unternehmen betreibt verschiedene Kanäle der internen Berichterstattung, damit ein ethisches Management implementiert werden kann. Die Berichterstattung erfolgt in Anonymität.
				</b>
			</p>
          </div>
        </div>

        <div class="innerWrap">
          <ul class="unethicalTargetList">
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail1">
                <span class="titStyle7"><b>Unterschlagung und Bestechung</b></span>
                <span class="text-style2">Veruntreuung des Unternehmensgeldes oder Annahme von Geld, Waren oder Unterhaltung von externen Interessengruppen in Bezug auf den beruflichen Pflicht.</span>
                <span class="text-style2">Wenn eine Unterschlagung öffentlicher Gelder oder ein Geldeingang festgestellt wird, kann die strafrechtliche Verfolgung und Entlassung dahingehend überprüft werden, jenach Übermäßiger Geldbetrag und Verlust des Unternehmens.</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail2">
                <span class="titStyle7"><b>Belästigung am Arbeitsplatz</b></span>
                <span class="text-style2">Bewusst Überlegenheit oder Autorität einsetzen, um anderen Mitarbeitern körperliche oder geistige Schmerzen zuzufügen oder Betriebs- und Arbeitsplatzklima durch Gewalt oder missbräuchliche Sprache zu verschlechtern.</span>
                <span class="text-style2">Disziplinäre Maßnahmen wie die Entlassung können aufgrund der Schwere des Falls in Betracht gezogen werden</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail3">
                <span class="titStyle7"><b>Sexuelle Belästigung bei der Arbeit</b></span>
                <span class="text-style2">Eine Handlung, bei der sich die andere Person sexuell gedemütigt oder angewidert fühlt, indem sie die Position am Arbeitsplatz nutzt oder sexuelle Sprache oder sexuelle Nachfrage in Bezug auf Arbeit usw.</span>
                <span class="text-style2">Auch wenn bei einer Festivität versehentlich alkoholische sexuelle Belästigung auftritt, können Disziplinarmaßnahmen nach dem Grundsatz der Nulltoleranz aus irgendeinem Grund in Betracht gezogen werden.</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail4">
                <span class="titStyle7"><b>Anderes unethisches Verhalten</b></span>
                <span class="text-style2">Aktionen, die gegen die Richtlinien des Ethik</span>
                <span class="text-style2">und Praxiskodex verstoßen oder als illegal oder unethisch gelten</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->

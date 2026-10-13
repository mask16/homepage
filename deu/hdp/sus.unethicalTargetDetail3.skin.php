<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail3.skin.php
+ Description	: sus.unethicalResultDetail3.skin.php
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

    <div class="subContent unethicalTargetDetail">
      <section class="susWrap">

        <div class="innerWrap">
          <a href="<?=$host_url?>/sus/unethicalTarget" class="backBtn">Gesamtansicht</a>
          <div class="subTitleArea">
            <h5 class="titStyle5"><b>Sexuelle Belästigung bei der Arbeit</b></h5>
            <p class="bar-text">Eine Handlung, bei der sich die andere Person sexuell gedemütigt oder angewidert fühlt, indem sie die Position am Arbeitsplatz nutzt oder sexuelle Sprache oder sexuelle Nachfrage in Bezug auf Arbeit usw.</p>
            <p class="bar-text">Auch wenn bei einer Festivität versehentlich alkoholische sexuelle Belästigung auftritt, können Disziplinarmaßnahmen nach dem Grundsatz der Nulltoleranz aus irgendeinem Grund in Betracht gezogen werden.</p>
		  </div>
          <div class="unethicalTargetDetailWrap">

            <div class="unethicalTargetDetailCon">
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">

                    </colgroup>
                    <thead>
                      <tr>
                        <th>Vorbehaltlich der Meldung von Verstößen gegen das ethische Management</th>

                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>Körperkontakt, Berühren bestimmter Körperteile usw.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>Sexuelle Metaphern und Witze, Bewertungen der körperlichen Erscheinung usw.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>Absichtliche Verbreitung von Informationen über sexuelle Inhalte</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>Sexuelle Beziehungen unter Druck setzen oder versöhnen, mit obszönen Inhalten telefonieren usw.</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>Anzeigen von pornografischen Bildern wie Bildern, Graffiti usw.</p></div>

                  </li>
                </ul>
              </div>
            </div>

          </div>
          <!-- unethicalTargetDetailWrap// -->
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->

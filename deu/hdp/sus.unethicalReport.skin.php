<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalReport.skin.php
+ Description	: sus.unethicalReport
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

    <div class="subContent unethicalMain">
      <div class="innerWrap">
        <div class="unethicalTit">
          <h3>Ehrlichkeit, Fairness </br> und Integrität verfolgen.</h3>
      <!--    <p class="text-style1">‘기업윤리’를 최우선 가치로 생각하며, 투명하고 공정하며<br />합리적인 업무 수행을 추구하는 경영정신</p>-->
        </div>

        <ul class="unethicalList">
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=1">
              <span class="tit">Unterschlagung öffentlicher Gelder und den Erhalt von Geldern melden</span>
              <span class="text">Melden Sie Mitarbeiter von Hyundai Welding, die in Korruption, Erpressung, Unterschlagung  oder Bestechung verwickelt sind.</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=2">
              <span class="tit">Belästigung und Missbrauch am Arbeitsplatz melden</span>
              <span class="text">Melden Sie, wenn Sie oder andere Mitarbeiter am Arbeitsplatz körperliche oder geistige Schmerzen zugefügt bekommen haben oder unter Gewalt oder missbräuchlicher Sprache gelitten haben</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=3">
              <span class="tit">Sexuelle Belästigung melden</span>
              <span class="text">Melden Sie Handlungen,physische und psychische, durch die Sie und andere bei der Arbeit sexuell gedemütigt oder entwürdigt fühlen.</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=4">
              <span class="tit">Andere unethische Verhaltensweisen melden</span>
              <span class="text">Melden Sie , Mitarbeiter die gegen die Richtlinien des Verhaltenskodex verstoßen, oder andere Handlungen, die als illegal oder unethisch gelten</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- subWrap// -->
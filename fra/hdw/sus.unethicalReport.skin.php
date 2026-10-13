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
        <p>HYUNDAI WELDING</p>
        <h3>Gestion de la durabilité</h3>
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

    <div class="subContent unethicalMain">
      <div class="innerWrap">
        <div class="unethicalTit">
          <h3>Nous recherchons l'honnêteté, <br>l'équité et l'intégrité.</h3>
          <!-- <p class="text-style1">‘기업윤리’를 최우선 가치로 생각하며, 투명하고 공정하며<br />합리적인 업무 수행을 추구하는 경영정신</p> -->
        </div>

        <ul class="unethicalList">
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=1">
              <span class="tit">Signalement de détournement de fonds et de corruption</span>
              <span class="text">Concernant les employés de Hyundai Welding se livrant à des actes de corruption, d'extorsion, de détournement de fonds ou de pots-de-vin</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=2">
              <span class="tit">Signaler le harcèlement et les abus sur le lieu de travail</span>
              <span class="text">Menacer les travailleurs de, ou les soumettre à, des traitements durs ou inhumains, y compris, mais sans s'y limiter, la violence verbale et le harcèlement, le harcèlement psychologique et la coercition mentale et physique</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=3">
              <span class="tit">Signalement de harcèlement sexuel</span>
              <span class="text">Des mots et des actions qui font que les autres se sentent sexuellement humiliés ou dégoûtés au travail</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=4">
              <span class="tit">Signaler d'autres problèmes contraires à l'éthique</span>
              <span class="text">Actions qui violent les directives de pratique du code de conduite, ou d'autres actes jugés illégaux ou contraires à l'éthique</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- subWrap// -->
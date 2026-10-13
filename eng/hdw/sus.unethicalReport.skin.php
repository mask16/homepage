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
        <h3>Sustainable Management</h3>
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
          <h3>Pursuing honesty,<br />fairness, and integrity.</h3>
          <!-- <p class="text-style1">‘기업윤리’를 최우선 가치로 생각하며, 투명하고 공정하며<br />합리적인 업무 수행을 추구하는 경영정신</p> -->
        </div>

        <ul class="unethicalList">
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=1">
              <span class="tit">Reporting Embezzlement and Bribery</span>
              <span class="text">Regarding Hyundai Welding employees engaging in corruption, extortion, embezzlement, or bribery</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=2">
              <span class="tit">Reporting Workplace Harassment and Abuse</span>
              <span class="text">Threaten workers with, or subject them to, harsh or inhumane treatment, including but not limited to verbal abuse and harassment, psychological harassment, and mental and physical coercion</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=3">
              <span class="tit">Reporting Sexual Harassment</span>
              <span class="text">Words and actions that make others feel sexually humiliated or disgusted at work</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=4">
              <span class="tit">Reporting Other Unethical Issues</span>
              <span class="text">Actions that violate the code of conduct practice guidelines, or other acts deemed illegal or unethical</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- subWrap// -->
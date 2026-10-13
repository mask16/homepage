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
		<h3>持続可能経営</h3>
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
          <h3>正直、公正、</br>清廉を追求する</h3>
        <!--  <p class="text-style1">‘기업윤리’를 최우선 가치로 생각하며, 투명하고 공정하며<br />합리적인 업무 수행을 추구하는 경영정신</p>-->
        </div>

        <ul class="unethicalList">
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=1">
              <span class="tit">公金の横領及び金品の受取りの申告</span>
              <span class="text">
				現代綜合金属役職員の公金の横領及び金品や供応接待を受取る行為に対する申告
			  </span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=2">
              <span class="tit">職場内ハラスメントの申告</span>
              <span class="text">
				職場内で他の職員から身体的、精神的苦痛を与えられたり、暴力や暴言の被害を受けた場合の申告
			  </span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=3">
              <span class="tit">職場内セクハラの申告</span>
              <span class="text">
				職場内で性的な言動または性的な要求などで、相手から性的な屈辱感や嫌悪感を感じさせる行為の申告
			  </span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=4">
              <span class="tit">その他、非倫理的な行為に対する申告</span>
              <span class="text">
				その他、非倫理的な行為の申告、倫理経営規範及び実践の指針に違反する行為の申告
			  </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- subWrap// -->
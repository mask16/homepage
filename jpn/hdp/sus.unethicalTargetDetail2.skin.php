<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail2.skin.php
+ Description	: sus.unethicalResultDetail2.skin.php
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

    <div class="subContent unethicalTargetDetail">
      <section class="susWrap">

        <div class="innerWrap">
          <a href="<?=$host_url?>/sus/unethicalTarget" class="backBtn">全体を見る</a>
          <div class="subTitleArea">
            <h5 class="titStyle5"><b>職場内ハラスメント</b></h5>
            <p class="bar-text">職場内の地位や職位を用いて他の職員に身体的、精神的苦痛を与えたり、暴力や暴言などで業務環境を悪化させる行為</p>
            <p class="bar-text">職場内ハラスメントが摘発された場合、事案の重大さによっては解任まで懲戒を考慮する事が出来る</p>
		  </div>
          <div class="unethicalTargetDetailWrap">

            <div class="unethicalTargetDetailCon">
              <p><b>1) 職場内ハラスメント</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">

                    </colgroup>
                    <thead>
                      <tr>
                        <th>倫理経営違反の行為に対する申告対象</th>

                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>役職員間で物理的な暴力を加える行為</p></div>
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>常習的な罵倒や暴言、大声などで精神的苦痛を加える行為</p></div>
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>相手を故意に虐めたり締め出す行為</p></div>
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>根拠のない誹謗、噂の流布、外見の指摘、私生活に対する過度な干渉などの行為</p></div>
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>合理的な理由が無いのに能力や経験とかけ離れた業務を指示したり、業務から除外する行為</p></div>
                  </li>
                </ul>
              </div>
            </div>


            <div class="unethicalTargetDetailCon">
              <p><b>2) 役職員相互の尊重</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>倫理経営違反の行為に対する申告対象</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>役職員の間で互いに礼儀をわきまえない行為</p></div>
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>性別、学歴、出身地、結婚、人種、国籍、宗教などを持って差別する行為</p></div>
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>非公式的な集いを通して派閥を組んだり、違和感を作り上げ私的な利益を図る行為</p></div>
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
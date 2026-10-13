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
        <p>HYUNDAI SUPERTECK</p>
        <h3>可持续经营</h3>
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
          <a href="<?=$host_url?>/sus/unethicalTarget" class="backBtn">整体视图</a>
          <div class="subTitleArea">
            <h5 class="titStyle5"><b>职场性骚扰</b></h5>
            <p class="bar-text">利用公司内地位或以与工作等相关的性言行或性要求等使对方产生性屈辱感或厌恶感的行为。</p>
            <p class="bar-text">即使是在聚餐时偶发饮酒性戏弄的情况，也可以考虑以零容忍原则进行处罚。</p>
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
                        <th>违反伦理经营行为的举报对象</th>

                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>身体接触、触摸特定身体部位等行为</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>淫乱的玩笑或淫言秽语、外貌的性比喻或评价的行为</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>有意地传播有关性的内容</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>强迫性关系、拉拢、通话时提起淫乱内容等行为</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>展示淫秽图片、图画、涂鸦、淫秽出版物等行为</p></div>

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
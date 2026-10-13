<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail1.skin.php
+ Description	: sus.unethicalResultDetail1.skin.php
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI GLOVILLE</p>
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
            <h5 class="titStyle5"><b>贪污财物</b></h5>
            <p class="bar-text">有关职务侵吞公司公款或收受外部利益相关者财物或宴请的行为</p>
            <p class="bar-text">揭发贪污公款及收受财物时，考虑金额是否过多、公司损失与否等，可以考虑刑事起诉及解雇。</p>
          </div>
          <div class="unethicalTargetDetailWrap">

            <div class="unethicalTargetDetailCon">
              <p><b>1) 贪污公款</b></p>
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
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>侵吞公司公款的行为</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>将公司公款以法人以外的账户管理的行为</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>使用公司支出后不进行证明的行为</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>公司业务外把公司法人卡、车辆给家人、亲戚提供并使用的行为</p></div>

                  </li>
                </ul>
              </div>
            </div>


            <div class="unethicalTargetDetailCon">
              <p><b>2) 收受钱财</b></p>
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
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>从员工及利害关系人支付或收取相应利息的行为</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>出差时从利害关系人未经公司批准收取交通费、食宿费等便利的行为</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>从利害关系人在不健康场所受到招待、在赌博性娱乐（赌场）受支援的行为</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>让利害关系人负担招待费、聚餐费及个人费用的行为</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>从利害关系人收受礼金时，脱离社会传统观念范围外收受的行为</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>3) 执行不恰当的预算</b></p>
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
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>用于业务外目的经费虚报为公司费用的行为</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>将招待费预算用于部门会餐、员工红白喜事及个人活动等, 用于本目的以外的行为</p></div>

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

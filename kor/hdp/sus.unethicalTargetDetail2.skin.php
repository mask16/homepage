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
        <p>Sustainable Management</p>
        <h3>지속가능경영</h3>
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
          <a href="<?=$host_url?>/sus/unethicalTarget" class="backBtn">신고대상 전체보기</a>
          <div class="subTitleArea">
            <h5 class="titStyle5"><b>직장 내 괴롭힘 신고</b></h5>
            <p class="bar-text">직장 내 우월적 지위를 이용하여 다른 직원에게 신체적, 정신적 고통을 주거나 폭력, 욕설 등으로 업무환경을 악화시키는 행위</p>
            <p class="bar-text">직장 내 괴롭힘 적발 시 사안의 경중에 따라 해임까지 징계를 고려할 수 있다.</p>
          </div>
          <div class="unethicalTargetDetailWrap">

            <div class="unethicalTargetDetailCon">
              <p><b>1) 직장 내 괴롭힘</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                      
                    </colgroup>
                    <thead>
                      <tr>
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                        
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>임직원 간에 물리적인 폭력을 가하는 행위</p></div>
                    
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>상습적인 욕설과 폭언, 고성 등으로 정신적인 충격을 가하는 행위</p></div>
                    
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>상대방을 고의로 괴롭히거나 따돌리는 행위</p></div>
                    
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>근거 없는 비방, 소문 유포, 외모지적, 사생활에 대한 지나친 간섭 등의 행위</p></div>
                    
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>합리적 이유 없이 능력이나 경험과 동떨어진 업무를 지시하거나 업무 배제 행위</p></div>
                    
                  </li>
                </ul>
              </div>
            </div>


            <div class="unethicalTargetDetailCon">
              <p><b>2) 임직원 상호 존중</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                      
                    </colgroup>
                    <thead>
                      <tr>
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                        
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>임직원 간 상호 예의를 갖추지 않는 행위</p></div>
                    
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>성별, 학력, 출신지역, 결혼, 인종, 국적, 종교 등을 이유로 차별하는 행위</p></div>
                    
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>비공식적 모임으로 파벌을 조장하거나, 위화감을 조성하여 이를 통해 사적이익을 도모하는 행위</p></div>
                    
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

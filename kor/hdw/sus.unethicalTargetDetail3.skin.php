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
            <h5 class="titStyle5"><b>직장 내 성희롱 신고</b></h5>
            <p class="bar-text">직장 내 지위를 이용하거나 업무 등과 관련하여 성적 언동 또는 성적 요구 등으로 상대방에게 성적 굴욕감이나 혐오감을 느끼게 하는 행위</p>
            <p class="bar-text">회식 자리에서 음주 성희롱이 우발적으로 발생하는 경우라도 이유 여하를 막론하고 무관용을 원칙으로 징계를 고려할 수 있다.</p>
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
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                        
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>신체적 접촉, 특정 신체 부위를 만지는 행위 등</p></div>
                    
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>음란한 농담이나 음담패설, 외모에 대한 성적인 비유나 평가 행위</p></div>
                    
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>성적인 내용의 정보를 의도적으로 유포하는 행위</p></div>
                    
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>성적 관계를 강요, 회유, 음란한 내용의 전화통화 행위 등</p></div>
                    
                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>외설적인 사진ㆍ그림ㆍ낙서ㆍ음란출판물 등을 보여주는 행위</p></div>
                    
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

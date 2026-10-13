<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalReward.skin.php
+ Description	: sus.unethicalReward.skin.php
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

    <div class="subContent unethicalReward">
      <div class="conPd">
        <div class="subTitleArea">
          <h5 class="text-style1"><b>임직원은 윤리강령 및 실천지침에 구체적으로 정하지 않은 부분이 있거나 해석에 분쟁이 있는 경우,
              윤리경영실에 문의하여 그 해석에 따라 신고를 할 수 있다. 회사는 윤리경영이 성실히 준수될 수 있도록 다양한 경로의 내부제보.신고 제도를
              운영하고 있으며 익명신고를 원칙으로 한다.</b></h5>
        </div>
      </div>

      <div class="innerWrap">
        <ul class="unethicalRewardList">
          <li>
            <h4><b>1. 보상대상</b></h4>
            <p class="num-text"><span>1)</span> 회사는 윤리경영 관련 신고자 및 신고관련 참고진술자에게 필요하다고 인정되는 경우 별도로 정한 기준에 따라 보상금을 지급할 수 있다.</p>
            <p class="num-text"><span>2)</span> 조사결과 신고내용이 사실로 인정된 건에 한하여, 신고의 결과로 회사의 수익증대나 손실감소가 발생된 건에 대해서 보상한다.</p>
          </li>
          <li>
            <h4><b>2. 보상기준</b></h4>
            <p class="num-text"><span>1)</span> 수익증대 또는 손실감소액을 보상대상가액이라 한다.</p>
            <p class="num-text"><span>2)</span> 동일 건에 대해 보상금 지급사유가 중복인 경우 큰 금액기준으로 한다.</p>
            <p class="num-text"><span>3)</span> 손실 관련 건에서 신고내용과 다른 사유로 해당 손실이 발생한 경우 손실금액은 보상대상에서 제외한다.</p>
          </li>
          <li>
            <h4><b>3. 보상금 산정</b></h4>
            <p>보상금은 수익증대 또는 손실감소액을 기준으로 한 보상대상가액의 5%이며 최대 1천만원을 넘길 수 없다.</p>
          </li>
          <li>
            <h4><b>4. 보상금 지급제외</b></h4>
            <p class="num-text"><span>1)</span>신고내용이 사실이 아닌 것으로 판명되거나 증거부족으로 사실여부 확인이 곤란한 경우 지급을 하지 않는다.</p>
            <p class="num-text"><span>2)</span>이미 신고된 사항이거나 윤리경영실 및 외부기관에서 이미 인지하여 조사가 진행 중이거나 징계절차 등이 진행 또는 완료된 사항.</p>
            <p class="num-text"><span>3)</span>언론보도 등에 의해 공개된 사항.</p>
            <p class="num-text"><span>4)</span>윤리경영실 직원이 신고한 경우.</p>
            <p class="num-text"><span>5)</span>기타 보상 심의 결과 보상이 부적절하다고 인정되는 경우.</p>

          </li>
        </ul>

      </div>
    </div>
  </div>
  <!-- subWrap// -->

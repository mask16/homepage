<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.steelSummary.skin.php
+ Description	: product.steelSummary
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
        <p>Business</p>
        <h3>사업소개</h3>
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

	<div class="subContent steelSummary">
      <div class="conPd">
        <h5 class="titStyle5"><b>철강 유통 경험과 최적의 서비스 제공을 통해<br />고객과 WIN-WIN을 추구하고 있습니다. </b></h5>
      </div>
      <div class="steelSummaryImg"></div>
      <div class="conPd">
        <p class="text-style1">현대종합금속은 자동차 소재 전문 제철소인 한국의 현대제철을 비롯하여, 중국에 소재하는 세계 유수의 철강 전문 기업과 협업하여
          후판, 열연, 냉연, 강관, 형강, 스테인리스 등 다양한 철강품목을 취급하고 있습니다. 특히 뛰어난 인재들의 철강 유통 경험과
          최적의 서비스 제공을 통해 고객과 WIN-WIN을 추구하고 있습니다. </p>
      </div>
    </div>
  </div>
  <!-- subWrap// -->
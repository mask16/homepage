<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.ceo.skin.php
+ Description	: about.ceo
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualAbout">
	<div class="innerWrap">
		<div class="visualText">
			<p>ABOUT US</p>
			<h3>기업소개</h3>
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


    <div class="subContent conPd">
      <section class="aboutWrap aboutCeo">

        <div class="subTitleArea">
          <h3 class="titStyle5"><b>현대종합금속 홈페이지를<br />방문해 주신 여러분을 진심으로 환영합니다.</b></h3>
        </div>
        <div class="text-style1">
          현대종합금속은 1975년 설립 이래 끊임없는 연구개발과 적극적인 최신 설비 투자를 하여 우수한 품질의 용접재료를 생산하고 있으며, 국내 1위는 물론 그 품질을 세계에서 인정받는 용접 전문 기업입니다.<br />
          또한, 각 산업에 적합한 디지털 인버터 용접기 등 최신 용접 장비와 친환경 신규 사업인 선박용 BWTS를 개발하여 공급하고 있습니다.<br /><br />

          우리는 여기에 안주하지 않고 끊임없는 도전과 혁신의 마인드를 가지고 지속적으로 우수한 인재를 육성하고, R&D 및 품질 혁신, 그리고 최신 용접 장비 개발을 통하여 조선, 해양, 중공업, 플랜트, 자동차, 건설, 강관, 친환경 에너지 산업 등 여러 산업 전반에 걸쳐 고객에게 보다 좋은 서비스와 용접 솔루션을 제공할 수 있도록 앞장서겠습니다.<br /><br />

          현대종합금속은 항상 고객을 중시하는 고객 중심 경영과 미래를 향한 도전정신을 발판으로 사회적 가치를 중시하며, 항상 고객 여러분과 함께 더 큰 꿈을 키우고 실현해 나가는 기업이 되기 위해 최선을 다 할 것입니다.<br /><br />

          고객 여러분께 진심으로 감사 드리며, 많은 관심과 성원을 부탁 드립니다.
          <p class="tar ceoName">현대종합금속 대표이사</p>

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
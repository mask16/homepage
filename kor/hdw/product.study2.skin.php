<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study2.skin.php
+ Description	: product.study2
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

    <div class="subContent">
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5"><b>현대종합금속에서 꾸준히 연구하며,<br />발전시키고 있는 분야입니다.</b></h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>용접재료 개발</b></h6>
          <div>
            <p class="text-blit">저온용강, 고강도강, 내열강 등에 최적화된 제품개발</p>
            <p class="text-blit">조선, 해양, 건설, 원자력, 발전플랜트용 특수기능성 제품개발</p>
            <p class="text-blit">조선, 철골, 건설, 중장비, 자동차 등 범용제품에 대한 혁신적 기능화 제품개발</p>
            <p class="text-blit">新강종, 新용접재료, 新용접기법 적용을 위한 업계 공동연구개발, 토탈 솔루션 기술 제공</p>
            <p class="text-blit">용접속도 및 효율증대, 고인성, 내균열, 친환경化 구현</p>
          </div>
          <h6 class="titStyle3"><b>용접기술 연구</b></h6>
          <div>
            <p class="text-blit">Arc 모니터링을 통한 용접와이어 송급 특성 평가</p>
            <p class="text-blit">용접재료의 기계적 특성 평가 및 분석을 통해 성능 향상 기법 연구</p>
            <p class="text-blit">용접 Parameter에 따른 용접부 특성 연구</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
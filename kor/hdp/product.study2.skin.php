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
          <h5 class="titStyle5"><b>현대 PNS에서 꾸준히 연구하며, <br/>발전시키고 있는 분야입니다.</b></h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>용접 장비 개발</b></h6>
          <div>
            <p class="text-blit">조선소, 플랜트, 자동차부품등에 최적화된 전용 제품 개발</p>
            <p class="text-blit">다양한 용접재료와 호환되는 시너직 개발</p>
            <p class="text-blit">아크 안정성 및 저스패터 실현을 위한 용접기능 개발</p>
            <p class="text-blit">안정화된 모터제어로 일정한 송급이 가능한 피더, 캐리지 개발</p>
            <p class="text-blit">작업률, 생산성 향상을 목적으로 관리하는 모니터링 시스템 개발</p>
            <p class="text-blit">HMI 개발로 사용자 편의성 향상</p>
            <p class="text-blit">초경량화, 세련된 디자인으로 고객 니즈에 맞는 제품 개발</p>
          </div>
          <h6 class="titStyle3"><b>용접장비 특허 연구</b></h6>
          <div>
            <p class="text-blit">전류 불균형 감지 장치</p>
            <p class="text-blit">쉴드 가스 자동 제어 용접 장치</p>
            <p class="text-blit">용접기용 전력기</p>
            <p class="text-blit">용접기용 컨트롤 판넬</p>
            <p class="text-blit">아크 용접기 피더의 모터 정속 제어</p>
            <p class="text-blit">아크용접시 번백처리 제어 장치 및 방법</p>
            <p class="text-blit">CO2 100% 가스를 이용한 플럭스 코어드 와이어용 펄스 용접 파형 제어 방법</p>
            <p class="text-blit">모재와 와이어의 터치를 센싱하는 용접 장치</p>
            <p class="text-blit">용접 시스템의 와이어 송급 장치</p>          
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
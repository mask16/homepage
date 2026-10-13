<?php
/***************************************************************
+ Page Name      : /skin/dc/kor/hdw/product.study.skin.php
+ Description    : product.study (study1+study2+study3 통합)
***************************************************************/
if( !defined('_GNUBOARD_') ) EXIT;
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

    <!-- [1] 연구소소개 (기존 study1) -->
    <section class="productStudy1">
      <div class="conPd">
        <h5 class="titStyle5"><b>현대종합금속 포항기술연구소는 고객들의 니즈를 최우선적으로 생각하고<br />
         이를 즉시 충족시킬 수 있는 용접솔루션 개발에 주력하고 있습니다.</b></h5>
      </div>
      <div class="productStudyImg"></div>
      <div class="productStudy1Con">
        <div class="conPd">
          1977년 연구소 발족 이래로 피복 아크 용접재료, 서브머지드 아크 용접재료(SAW), 솔리드 와이어, 플럭스 코어드 와이어(FCW), TIG와이어,
          니켈합금강 및 기타 용접재료를 연구 개발하며 대한민국의 산업 발전에 기여해 왔습니다. 국내 대형 실수요 업체와의 밀접한 기술공유를 통해
          공통기술 개발을 추진하고 해외지사를 통해 경쟁업체 및 해외 실수요 업체에 대한 데이터베이스를 확보하여 전략을 수립하고 있습니다.<br /><br />

          나아가 국책연구기관과 유기적인 협력을 통해 신강재 개발에 따른 용접재료 개발, 제품 신뢰성 확보 및 발전을 거듭하고 있습니다. 또한, 축적된
          노하우를 바탕으로 고기능성, 친환경, 고능률, 신강종 연계형 용접재료를 개발하며 국내외 AS/BS 및 기술지원을 통해 고객맞춤 서비스로 고객에게
          한 발 더 다가가는 연구소가 되도록 노력하고 있습니다. 본 연구소는 고객 생산성 향상(向上) 및 품질개선, 원가절감과 고객니즈에 부합하는 신제품
          개발 및 모든 분야에서 최상의 결과를 도출할 수 있도록 노력하고 있으며 시장의 변화에 맞춘 용접재료를 개발하기 위한 연구에 집중하고 있습니다.
        </div>
      </div>
    </section>

    <!-- [2] 연구분야 (기존 study2) -->
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

    <!-- [3] 제품개발 방향 (기존 study3) -->
    <section class="productStudy3">
      <div class="conPd">
        <h5 class="titStyle5"><b>현대종합금속의 연구소에서 용접재료를<br />개발하고 있는 방향입니다.</b></h5>
        <h6 class="titStyle1 c-gray"><p>개발방향</p></h6>

        <div class="productStudy3Wrap brdr-b">
          <div>
            <h6 class="titStyle3"><b>환경 친화형</b></h6>
          </div>
          <div>
            <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
            <p class="text-blit">Low 흄 용접재료 개발</p>
            <p class="text-blit">Low Mn 용접재료 개발</p>
            <p class="text-blit">Low 스패터 용접재료 개발</p>
            <p class="text-blit">Self-Shielded 플럭스 코어드 와이어 개발</p>
          </div>
        </div>

        <div class="productStudy3Wrap">
          <div>
            <h6 class="titStyle3"><b>고기능성</b></h6>
          </div>
          <div>
            <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
            <p class="text-blit">극저온 CTOD 특성이 우수한 용접재료 개발</p>
            <p class="text-blit">Offshore용 초고강도/고인성 용접재료 개발</p>
            <p class="text-blit">내흡습 극저수소계 용접재료 개발</p>
          </div>
        </div>

        <div class="productStudy3Wrap">
          <div>
            <h6 class="titStyle3"><b>고능률</b></h6>
          </div>
          <div>
            <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
            <p class="text-blit">일렉트로 가스 용접재료 개발</p>
            <p class="text-blit">고속 용접용 메탈코어드 와이어 개발</p>
          </div>
        </div>

        <div class="productStudy3Wrap">
          <div>
            <h6 class="titStyle3"><b>신강종 연계형</b></h6>
          </div>
          <div>
            <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
            <p class="text-blit">플랜트 저장 Tank용 Self Shield EGW 개발</p>
            <p class="text-blit">고강도 FCW 개발</p>
            <p class="text-blit">해양구조물 S500, S550, S690강용 용접재료 개발</p>
            <p class="text-blit">자동화, 고효율화, 고속화, 경량화 등 新용접공정 용접재료 개발</p>
          </div>
        </div>

      </div>
    </section>

  </div>
</div>
<!-- subWrap// -->

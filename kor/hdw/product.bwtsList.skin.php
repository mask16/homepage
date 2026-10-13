<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsList.skin.php
+ Description	: product.bwtsList
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
      <div class="conPd">
        <h6 class="titStyle5" style="font-size:35px;" ><b>현대종합금속 기계사업본부는 친환경 선박 기자재를 개발하고 최신의 ICT, AI 기술을 접목하여 고객에게 최적의 제품과 서비스를 포함한 Total Solution을 제공하고 있습니다.</b></h6>
      </div>
      <div class="innerWrap">
        <ul class="c-bwtsProductList">
          <li class="bwtsProductList-hiballast">
            <a href="<?=$host_url?>/product/bwtsHiBallast">
              <img src="<?=$skin_url?>/img/content/logo_hiballast.png" alt="" />
              <p class="product-desc">HD한국조선해양에서 개발한 선박 평형수 처리 장치</p>
            </a>
          </li>
          <li class="bwtsProductList-ecoballast">
            <a href="<?=$host_url?>/product/bwtsEcoBallast">
              <img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" />
              <p class="product-desc">HD한국조선해양에서 개발한 선박 평형수 처리 장치</p>
            </a>
          </li>
<!-- 추가 -->
          <li class="bwtsProductList-hiballastnf">
            <a href="<?=$host_url?>/product/bwtsHiBallastNF">
              <img src="<?=$skin_url?>/img/content/hiballast_nf.png" alt="" />
              <p class="product-desc">HD한국조선해양에서 개발한 선박 평형수 처리 장치</p>
            </a>
          </li>
<!--  -->
          <li class="bwtsProductList-simul">
            <a href="<?=$host_url?>/product/bwtsHiQAMP">
              <img src="<?=$skin_url?>/img/content/logo_bwtsHiQAMP.png" alt="" />
              <p class="product-desc">모듈화된 컨테이너 내장형 육상전원 공급시스템</p>
            </a>
          </li>

<!-- 추가 -->
          <li class="bwtsProductList-simul">
            <a href="<?=$host_url?>/product/bwtsHiQFO">
              <img src="<?=$skin_url?>/img/content/logo_hiqfo.png" alt="" />
              <p class="product-desc">선박 연료 공급 시스템</p>
            </a>
          </li>
          <li class="bwtsProductList-simul">
            <a href="<?=$host_url?>/product/bwtsN2GEN">
              <img src="<?=$skin_url?>/img/content/logo_n2gen.png" alt="" />
              <p class="product-desc">선박용 불활성 가스(질소) 공급 시스템</p>
            </a>
          </li>
<!--  -->
          <li class="bwtsProductList-simul">
            <a href="<?=$host_url?>/product/bwtsHiCon">
              <img src="<?=$skin_url?>/img/content/logo_hicon.png" alt="" />
              <p class="product-desc">다양한 산업 분야의 플랜트 및 공장 자동화 시스템에 적용되는 스마트 제어기</p>
            </a>
          </li>

<!-- 추가 -->
          <li class="bwtsProductList-simul">
            <a href="<?=$host_url?>/product/bwtsHiQRMS">
              <img src="<?=$skin_url?>/img/content/logo_hiqrms.png" alt="" />
              <p class="product-desc">BWTS 데이터를 수집·분석하여, 효율적인 관리와 유지보수를 지원하는 웹 기반 솔루션</p>
            </a>
          </li>
          <li class="bwtsProductList-hipowe">
            <a href="<?=$host_url?>/product/bwtsHiPower">
              <img src="<?=$skin_url?>/img/content/logo_hipower.png" alt="" />
              <p class="product-desc">전기유압 액츄에이터로 구동되는 밸브</p>
            </a>
          </li>
          <li class="bwtsProductList-simul">
            <a href="<?=$host_url?>/product/bwtsHiSimul">
              <img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" />
              <p class="product-desc">HiBallast 시스템운전 경험을 제공하는 교육용 simulation 장비
              </p>
            </a>
          </li>
          <li class="bwtsProductList-ecoballast">
            <a href="<?=$host_url?>/product/bwtsHabonim">
              <img src="<?=$skin_url?>/img/content/logo_habonim.png" alt="" />
              <p class="product-desc">Habonim, 75년 전통의 고성능 산업용 밸브 전문 브랜드</p> 
            </a>
          </li>
 <!--  -->    
        </ul>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
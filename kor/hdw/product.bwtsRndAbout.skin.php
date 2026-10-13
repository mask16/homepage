<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndAbout.skin.php
+ Description	: product.bwtsRndAbout
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
      <section class="RnDAbout">
        <div class="conPd">
          <h5 class="titStyle5"><b>현대종합금속 기계사업부 R&D 센터(기술연구소)는 친환경 공정기술을 기반으로 해양 환경 보전을 위해 친환경 선박 기자재 개발 및 연구에 주력하고 있습니다.</b></h5>
        </div>
        <div class="RnDAboutImg"></div>
        <div class="RnDAboutCon">
          <div class="conPd">
            본 R&D 센터(기술연구소)는 전기화학 기초연구를 통한 불용성전극(DSA) 소재의 개발, 고효율 해수 전기분해 전해조 개발, Electro-Hydraulic 밸브 및 스마트 컨트롤 시스템을 개발하고 있습니다. 전산유체역학(CFD) 시뮬레이션을 이용한 단상 및 다중 유체의 유동 해석, 열 유동 및 성능 해석, 파이프 엔지니어링(3D modeling) 등의 다양한 전산 해석 및 엔지니어링 기법을 이용하여 최적의 결과를 도출할 수 있도록 노력하고 있으며, 이를 기반으로 한 설계 최적화, 제품 효율 증대를 위해 연구를 진행하고 있습니다. 또한, 친환경 분야의 혁신 기술 동향을 분석하고 이를 적용한 시장의 변화에 맞춘 고부가가치의 신규 제품 및 공정 개발을 위한 연구에 집중하고 있습니다.
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
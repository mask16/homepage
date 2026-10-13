<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiSimul.skin.php
+ Description	: product.bwtsHiSimul
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
      <div class="innerWrap">

        <!-- Hi-Simul K - KOR -->
        <!-- URL: https://www.hyundaiwelding.com/kor/hdw/product/bwtsHiSimul -->
        <div class="sr-only">
          <h1>Hi-Simul K – HiBallast 제어 시스템을 배울 수 있는 시뮬레이션 키트</h1>
          <h2>가상 시나리오를 통한 맞춤형 교육</h2>
          <h2>Hi-Simul K – HiBallast와 동일한 HMI를 반영한 시뮬레이터</h2>
          <h3>컴팩트한 설계</h3>
        </div>


        <div class="btwsProduct btwsProduct-simul">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-Simul K는 HiBallast시스템을 가상으로 구현함으로써 사용자에게 선상과 유사한 조건의 시스템운전 경험을 제공하는 교육용 simulation 장비이며
              다음과 같은 주요 특징을 가지고 있습니다. <br /><br />

              <p class="bar-text">선상과 매우 유사한 조건으로 시스템 운전 환경 제공</p>
              <p class="bar-text">비정상적인 운전상황을 연출함으로써 사용자의 상황 대처능력을 향상시킴 (시나리오모드)</p>
              <p class="bar-text">실제와 같은 조건과 고차원적인 추정모델 적용을 통해 현실적인 센서 계측값 모니터링 구현</p>
              <p class="bar-text">운전데이터를 수동으로 조작하여 사용자가 원하는 다양한 상황연출 가능</p>
              <p class="bar-text">온라인 교육제공 가능</p>
              <p class="bar-text">원격 교육제공 가능</p>
            </div>
          </div>
          <div class="btImg">
            <img src="<?=$skin_url?>/img/content/simul_btImg03.jpg" alt="" />
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
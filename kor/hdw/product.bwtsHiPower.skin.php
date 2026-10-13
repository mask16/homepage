<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiPower.skin.php
+ Description	: product.bwtsHiPower
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

        <!-- Hi-POWER V - KOR -->
        <!-- URL: https://www.hyundaiwelding.com/kor/hdw/product/bwtsHiPower -->
        <div class="sr-only">
          <h1>Hi-Power V – 전기식, 공압식 및 유압식 밸브를 대체할 수 있는 밸브입니다.</h1>
          <h2>BWTS, 각종 육상 Plant, 수처리 설비 등 다양한 분야에 적용 가능</h2>
          <h2>높은 토크를 사용한 안정적인 밸브 제어</h2>
          <h3>쉬운 설치, 작동 및 조절 방법</h3>
        </div>

  
        <div class="btwsProduct btwsProduct-hiPower">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hipower.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-PowerV는 전기유압 액츄에이터로 구동되는 밸브입니다.<br /><br />

              전기유압 액츄에이터를 사용함으로써 다음과 같은 장점을 제공합니다.<br /><br />

              <p class="bar-text">높은 토크를 사용한 안정적인 밸브제어</p>
              <p class="bar-text">적은 전력소모량</p>
              <p class="bar-text">다양한 밸브에 적용 가능</p>
              <p class="bar-text">쉬운 설치, 작동 및 조절 방법</p>
              <p class="bar-text">방폭/비방폭 모델 제공</p><br /><br />

              Hi-Power V는 BWTS, 각종 육상 Plant, 수처리 설비 등에 다양한 분야에 적용
              가능하며, 기존의 전기식, 공압식 및 유압식 밸브를 대체할 수 있습니다.

            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hipower_topImg.jpg" alt="" /></div>
          </div>

          <div class="btImg">
            <div class="left">
              <!--<h6>Valve</h6>-->
              <img src="<?=$skin_url?>/img/content/hipower_btImg01.jpg" alt="" />
            </div>
            <div class="right">
              <!--<h6>Actuator, Power Pack 등</h6>-->
              <img src="<?=$skin_url?>/img/content/hipower_btImg02.jpg" alt="" />
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiCon.skin.php
+ Description	: product.bwtsHiCon
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

        <!-- Hi-CON - KOR -->
        <!-- URL: https://www.hyundaiwelding.com/kor/hdw/product/bwtsHiCon -->
        <div class="sr-only">
          <h1>고객맞춤형 시스템 제어장치를 제공합니다.</h1>
          <h2>안정적이고 다양한 필드버스(Modbus)와 호환</h2>
          <h3>Compact and flexible configuration with Remote IO</h3>
        </div>

        <div class="btwsProduct btwsProduct-hicon">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hicon.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
            이 시스템은 BWTS, FGSS, SCR을 비롯한 다양한 산업 분야의 플랜트 및 공장 자동화 시스템에 적용될 수 있습니다.</br> 
            또한 유연한 구성으로 기존 제어 시스템을 대체할 수 있어, 최적화된 효율적인 솔루션을 제공합니다.
            <br /><br /><br /><br />
              <b style="color:#12357d; font-weight:900;">스마트 컨트롤러의 기능</b>
              <p class="bar-text">신뢰성 높은 운전</p>
              <p class="bar-text">맞춤형 및 사용자 친화적인 인터페이스</p>
              <p class="bar-text">다양한 필드버스(Field Bus)와의 연결 지원</p>
              <p class="bar-text">IEC 61131-3 완전 지원</p>
              <p class="bar-text">다양한 통신 프로토콜 지원</p>
              <p class="bar-text">원격 I/O 기반의 컴팩트하고 유연한 구성</p>
            </div>
          </div>
          <div class="btImg">
            <div style="text-align: center;"><img src="<?=$skin_url?>/img/content/hicon_btImg_n.png" alt="" style="width: 60%; height: auto;"/></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
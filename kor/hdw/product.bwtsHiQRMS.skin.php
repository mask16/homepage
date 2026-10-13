<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiQRMS.skin.php
+ Description	: product.bwtsHiQRMS
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>BUSINESS</p>
			<h3>사업소개</h3>
		</div>
	</div>
</section>


  <div class="subWrap">
    <section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
		<!-- subNav -->
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
		<!--//subNav -->
	</section>

	<div class="subContent">
      <div class="innerWrap">

        <!-- HiQ-RMS - KOR -->
        <!-- URL: https://www.hyundaiwelding.com/kor/hdw/product/bwtsHiQRMS -->
        <div class="sr-only">
          <h1>HiQ-RMS – HiBallast BWTS Remote Monitoring System</h1>
          <h2>실시간 모니터링, 정비, 운영 최적화</h2>
          <h3>이상 조기 감지와 예방 조치로 안정성 극대화</h3>
        </div>
  
        <!-- <div class="btwsProduct btwsProduct-hicon"> -->
        <div class="btwsProduct btwsProduct-hiPower">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <div class="left text-style1">
          <span style="font-size:1.2em;"><b style="color:#12357d; font-weight:900;">사이버 보안 요건(IACS UR E27) 완전 준수<br><br></b></span></div>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hiqrms.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
            HiQ-RMS는 선박의 BWTS(선박평형수 처리 시스템) 관련 데이터를 수집하고, 웹 서비스를 통해 분석 결과를 사용자에게 제공하여 시스템 및 구성품의 효율적인 관리와 유지보수를 위한 솔루션을 제공합니다.
             
            이 플랫폼을 기반으로 HiBallast 시스템의 치명적인 고장을 사전에 방지하고 이상을 조기에 파악하여 유지보수를 수행함으로써, 유지관리 비용 절감 효과를 기대할 수 있습니다.
            </div>
          </div>

          <div class="btImg"style="text-align: center;"><img src="<?=$skin_url?>/img/content/hiqrms_img01.png" alt="" style="width: 70%; height: auto;"/></div>
          <br /><br /><br /><br />

          <div class="left text-style1">
            <b style="color:#12357d; font-weight:900;">주요 장점</b>
            <br/>
            <b style="font-weight:500;">운전 모니터링</b>
            <p class="bar-text" style="font-weight:200;">자동화된 시스템이 데이터를 수집·분석하여 정확하고 신뢰할 수 있는 모니터링 기능을 제공합니다.</p>
            <br/>
            <b style="font-weight:500;">운영 비용 절감</b>
            <p class="bar-text" style="font-weight:200;">시스템 상태를 예측하고 예방 조치를 취함으로써 잠재적인 손실을 최소화하고 비용을 절감하며, 시스템 가용성을 향상시킬 수 있습니다.</p>
            <br/>
            <b style="font-weight:500;">신속한 대응</b>
            <p class="bar-text" style="font-weight:200;">시스템 상태를 지속적으로 모니터링하고 이상을 실시간으로 감지하여 문제를 빠르게 파악하고 즉각적으로 대응함으로써 다운타임을 최소화할 수 있습니다.</p>
          </div>
          
      </div>
    </div>
  </div>
  <!-- subWrap// -->
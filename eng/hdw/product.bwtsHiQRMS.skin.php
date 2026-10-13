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
			<p>HYUNDAI WELDING</p>
			<h3>Business Introduction</h3>
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

        <!-- HiQ-RMS - ENG -->
        <!-- URL: https://www.hyundaiwelding.com/eng/hdw/product/bwtsHiQRMS -->
        <div class="sr-only">
          <h1>HiQ – RMS - Remote Monitoring System for BWTS</h1>
          <h2>Real-Time Monitoring, Maintenance, and Operational Optimization</h2>
          <h3>Maximizing Reliability through Early Detection and Preventive Actions</h3>
        </div>

        <!-- <div class="btwsProduct btwsProduct-hicon"> -->
        <div class="btwsProduct btwsProduct-hiPower">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <div class="left text-style1">
          <span style="font-size:1.2em;"><b style="color:#12357d; font-weight:900;">Fully comply with the requirement of cybersecurity (IACS UR E27)          <br><br></b></span></div>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hiqrms.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              HiQ-RMS collects data related to the ship's BWTS (Ballast Water Treatment System) and delivers 
              analysis results to users through web services, offering solutions for efficient management and maintenance of both the system and its components. 
              <br/>
              Based on this platform, the HiQ-RMS can be expected that the maintenance costs can be reduced by identifying the system abnormalities and 
              performing maintenance prior to a catastrophic failure of HiBallast system.
            </div>
          </div>

          <div class="btImg"style="text-align: center;"><img src="<?=$skin_url?>/img/content/hiqrms_img01.png" alt="" style="width: 70%; height: auto;"/></div>
          <br /><br /><br /><br />

          <div class="left text-style1">
            <b style="color:#12357d; font-weight:900;">Key Advantage</b>
            <br/>
            <b style="font-weight:500;">Operation Monitoring</b>
            <p class="bar-text" style="font-weight:200;">An automated system gathers and analyzes data to provide a rigorous and dependable monitoring  function.</p>
            <br/>
            <b style="font-weight:500;">Lower Operating Costs</b>
            <p class="bar-text" style="font-weight:200;">Utilizing data for predicting system status and taking preventive measures can minimize potential  losses, lower costs, and improve system availability.</p>
            <br/>
            <b style="font-weight:500;">Faster Response</b>
            <p class="bar-text" style="font-weight:200;">Continuous monitoring of system health and real-time anomaly detection enable rapid problem  identification and immediate action to minimize downtime.</p>
          </div>
          
      </div>
    </div>
  </div>
  <!-- subWrap// -->
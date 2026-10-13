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
      <section class="RnDAbout">
        <div class="conPd">
          <h5 class="titStyle5"><b>The R&D Center (Technology Research Institute) of the Machinery Division of Hyundai Welding is focusing on the development and research of marine equipment to preserve the marine environment based on eco-friendly processing technology.</b></h5>
        </div>
        <div class="RnDAboutImg"></div>
        <div class="RnDAboutCon">
          <div class="conPd">
            We are developing Dimensionally Stable Anode (DSA) electrodes through practical electrochemical research, high-efficiency electrolyzer, Electro-Hydraulic valve, and smart control system.<br /><br />

			We strive to derive optimal results using various computer simulation and engineering methods such as flow analysis of single and multi-phase fluid using computational fluid dynamics (CFD) simulation, thermal flow and performance analysis, and pipe engineering (3D modeling). Based on these technologies, we are researching to optimize the design and increase system efficiency.<br /><br />

			Besides, we are focusing on the development of new higher value-added products and processes by analyzing the trends of innovative technologies in the eco-friendly fields.<br /><br />
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
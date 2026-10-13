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

        <!-- Hi-POWER V - ENG -->
        <!-- URL: https://www.hyundaiwelding.com/eng/hdw/product/bwtsHiPower -->
        <div class="sr-only">
          <h1>Hi-Power V can replace the existing electric, pneumatic, and hydraulic actuators.</h1>
          <h2>Applicable to BWTS, on/offshore plants, and water treatment plants</h2>
          <h2>Stable valve control by using high torque</h2>
          <h3>Easy installation, operation, and adjustment</h3>
        </div>

        <div class="btwsProduct btwsProduct-hiPower">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hipower.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-Power V uses only electric power with a self-contained hydraulic actuator.<br /><br />
			  Using an electro-hydraulic actuator provides the following advantages.<br /><br />


              <p class="bar-text">Stable valve control by using High-torque</p>
              <p class="bar-text">Low power consumption</p>
              <p class="bar-text">Applicable to various types of valve</p>
              <p class="bar-text">Easy installation, operation, and adjustment</p>
              <p class="bar-text">Explosion-proof & non-explosion-proof models are available</p><br /><br />

              Hi-Power V can be applied to various industrial applications such as BWTS, on/offshore plant, and water treatment plant. Furthermore, it can replace the existing electric, pneumatic, and hydraulic actuator.

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
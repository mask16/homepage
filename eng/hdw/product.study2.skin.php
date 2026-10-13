<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study2.skin.php
+ Description	: product.study2
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
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5"><b>It is a field that is consistently researched and developed by Hyundai Welding.</b></h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>Development of Welding Materials</b></h6>
          <div>
            <p class="text-blit">Development of optimized products for Low-Temperature Service Steel, High Tensile Steel, and Heat-Resistant Steel</p>
            <p class="text-blit">Development of special functioning products for Shipbuilding, Offshore, Construction, Nuclear Energy, and Power Plants</p>
            <p class="text-blit">Development of innovative and functionalized products for general-purpose such as, Shipbuilding, Structural Steel, Construction, Heavy Equipment, and Automotive</p>
            <p class="text-blit">Joint R&D for the application of new steel grades, welding materials and new welding techniques, in order to provide a total solution technology</p>
            <p class="text-blit">Increases in welding speed and efficiency, high toughness, crack resistance, and eco-friendliness
</p>
          </div>
          <h6 class="titStyle3"><b>Reasearch of Welding Technology</b></h6>
          <div>
            <p class="text-blit">Evaluation of welding wire feeding characteristics through Arc Monitoring</p>
            <p class="text-blit">Research for performance improvement techniques through the evaluation and analysis of mechanical properties of welding materials</p>
            <p class="text-blit">Study of the characteristics of welding parts, according to welding parameters</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
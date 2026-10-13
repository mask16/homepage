<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study1.skin.php
+ Description	: product.study1
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI PNS</p>
			<h3>Business Introduction</h3>
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
      <section class="productStudy1">
        <div class="innerWrap conPd">
          <h5 class="titStyle5">
		  <b>
		  Hyundai PNS Welding System Technology Research Center puts customers' needs first. We focus on developing comprehensive welding solutions that can immediately meet customer needs.
		  </b>
		  </h5>
        </div>
        <div class="productStudyImg"></div>
        <div class="innerWrap productStudy1Con">
          <div class="conPd">
            HYUNDAI PNS develops and provides a total solution of welding equipment such as wire feeders, carriages and monitoring systems, as well as welding machines such as machines for covered arc, mig/mag, submerged arc, and TIG products.
			<br><br>
			In addition, we are making great investments and efforts to lead the market by selecting products in accordance with the rapidly changing welding market. We are doing this via joint collaboration with major companies around the world.
			<br><br>
			We develop equipment that is 100% consistent with the welding materials of Hyundai Welding. We provide everything from welding materials and welding equipment to full welding solutions.
			<br><br>
			Experts in each field are in close collaboration and are operating the system from a diversified perspective to increase the productivity, efficiency and workability of our customers.
			Our R&D aims to become the top R&D center in the global welding equipment market.
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
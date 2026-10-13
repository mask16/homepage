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
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5">
		  <b>
		  Hyundai PNS continuously invests in its R&D.
		  </b>
		  </h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>Welding Equipment Development</b></h6>
          <div>
            <p class="text-blit">Development of custom products for shipyards, plants, and automobile parts</p>
            <p class="text-blit">Synergic product development compatible with various welding materials</p>
            <p class="text-blit">Development of function that ensures arc stability and low spatter</p>
            <p class="text-blit">Developed a feeder and a carriage capable of constant feeding with a stabilized motor control</p>
            <p class="text-blit">Development of a monitoring system that improves work rate and productivity</p>
            <p class="text-blit">Improved user convenience by developing HMI</p>
            <p class="text-blit">Developed products that meet customer needs such as ultra-lightweight and stylish design</p>
          </div>
          <h6 class="titStyle3"><b>Welding Equipment Patent Research</b></h6>
          <div>
            <p class="text-blit">Current imbalance detection device</p>
            <p class="text-blit">Shield gas automatic control welding device</p>
            <p class="text-blit">Electric power for welding machine</p>
            <p class="text-blit">Control panel for welding machine</p>
            <p class="text-blit">Constant motor speed control of arc welding machine feeder</p>
            <p class="text-blit">Burnback control device and method for arc welding</p>
            <p class="text-blit">Pulse welding waveform control method for flux-cored wire using 100% CO2 gas</p>
            <p class="text-blit">Welding device that senses the touch of the base material and wire</p>
            <p class="text-blit">Wire feeding device of welding system</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.steelSummary.skin.php
+ Description	: product.steelSummary
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

	<div class="subContent steelSummary">
      <div class="conPd">
        <h5 class="titStyle5"><b>We pursue a Win-Win strategy with our customers through the long historical experience of metal distribution and optimal service provisions.</b></h5>
      </div>
      <div class="steelSummaryImg"></div>
      <div class="conPd">
        <p class="text-style1">Hyundai Welding handles various steel items such as, Steel Plate, Hot-Rolled Steel, Cold-Rolled Steel, Steel Pipe, H-Section and Stainless Steel by cooperating with some of the world's leading metal companies based in China and Korea - Hyundai Steel Co which specializes in Automotive Materials.<br /><br />
We pursue a Win-Win strategy with our customers through the long historical experience of metal distribution and by providing optimal services.</p>
      </div>
    </div>
  </div>
  <!-- subWrap// -->
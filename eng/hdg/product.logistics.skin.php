<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual logisticsVisual">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI GLOVILLE</p>
		<h3>BUSINESS</h3>
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
      
	<section class="logistics">
		<h1 class="title">Logistics</h1>
				<hr class="line" />
				<h1 class="title">To challenge and innovate ideally for customers value maximization</h2>
				<p class="conBox-txt">Hyundai Gloville provides differentiated and unique logistics services to customers based on efficient global networking and professional solutions</p>

		<ul class="ul-banner">
			<a href="<?=$host_url?>/product/logisticsOcean">
				<li class="li-1"><h2>Marine/Ship<br>transportation</h2></li>
			</a>
			<a href="<?=$host_url?>/product/logisticsAir">
				<li class="li-2"><h2>Air<br>transportation</h2></li>
			</a>
			<a href="<?=$host_url?>/product/logisticsLand">
				<li class="li-3"><h2>Land<br>transportation</h2></li>
			</a>
			<a href="<?=$host_url?>/product/logistics3PL">
				<li class="li-4"><h2>3PL<br>Solution</h2></li>
			</a>
		</ul>
		<hr class="both" />
	</section>
    
</div>
<!-- subWrap// -->

<script type="text/javascript">
	$(document).ready(function(){
		ResizeBanner();
	});

	$(window).resize(function(){
		ResizeBanner();
	});

	function ResizeBanner(){
		var w = $(".ul-banner .li-1").css('width');
		$(".ul-banner li").css('height',w);
	}
</script>
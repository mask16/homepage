<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual distributionVisual">
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
      
	<section class="distribution">
		<h1 class="title">유통제품 소개</h1>
		<ul class="ul-banner">
			<a href="<?=$host_url?>/product/distributionOil">
				<li class="li-1"><h2>Engine Oils</h2>
				<p>엔진오일</p>
				</li>
			</a>
			<a href="<?=$host_url?>/product/distributionLubricant">
				<li class="li-2"><h2>Industrial<br>Lubricant Oils</h2>
				<p>산업용 윤활유</p>
				</li>
			</a>
			<a href="<?=$host_url?>/product/distributionMetal">
				<li class="li-3"><h2>Metalworking<br>Fluids Oils</h2>
				<p>금속가공유</p>
				</li>
			</a>
			<a href="<?=$host_url?>/product/distributionParts">
				<li class="li-4"><h2>Automotive<br>Parts</h2>
				<p>자동차 용품</p>
				</li>
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
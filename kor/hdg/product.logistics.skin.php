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
      
	<section class="logistics">
		<h1 class="title">물류</h1>
				<hr class="line" />
				<h1 class="title">고객 가치를 극대화시킨다는 이념하에 끊임없는 도전과 혁신
</h2>
				<p class="conBox-txt">현대글로빌은 효율적인 글로벌 네트워크 시스템과 전문적인 솔루션을 기반으로 차별화된 물류 서비스를 제공하고 있습니다.</p>

		<ul class="ul-banner">
			<a href="<?=$host_url?>/product/logisticsOcean">
				<li class="li-1"><h2>해상운송</h2></li>
			</a>
			<a href="<?=$host_url?>/product/logisticsAir">
				<li class="li-2"><h2>항공운송</h2></li>
			</a>
			<a href="<?=$host_url?>/product/logisticsLand">
				<li class="li-3"><h2>육상운송</h2></li>
			</a>
			<a href="<?=$host_url?>/product/logistics3PL">
				<li class="li-4"><h2>3PL 물류</h2></li>
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
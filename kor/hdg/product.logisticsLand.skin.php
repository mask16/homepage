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
		<!-- conBox -->
		<div class="conBox">
			<!-- conBox-left -->
			<div class="conBox-left">
				<h1>육상운송</h1>
				<a class="his" href="<?=$host_url?>/product/logistics">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" />물류 메인으로
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Why Hyundai Gloville?</h1>
					<p class="conBox-txt">
							다양한  화물운송 경험과 전문성으로 고객 사업별 특성에 맞는 최적의 SERVICE을 제공합니다.
					</p>
			
				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
				<ul class="conBox-menu2w">
					<li class="on" t="1">콜드체인</li>
				</ul>
				<hr class="both" />
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/logisticsLand_img01.png" />
						<img src="<?=$skin_url?>/img/content/logisticsLand_img02.png" />
					</div>	
					<h2 class="conBox-sub-title">• 이커머스<br>• B2B 배송</h2>
					<p class="conBox-txt">
						고객 니즈와 상품별 특성에 맞는 최적의 프로세스로 고객의 사업을 지원
					</p>

				</div>
				<!--//conBox-in-1 -->
				
				<!-- conBox-in-2 -->
				<div class="conBox-in conBox-in-2" style="padding-top:0px;">
				<ul class="conBox-menu2w">
					<li class="on" t="1">중량물 운송</li>
				</ul>
				<hr class="both" />
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/logisticsLand_img03.png" />
						<img src="<?=$skin_url?>/img/content/logisticsLand_img04.png" />
					</div>				
				<!-- conBox-in-1 -->
					<h2 class="conBox-sub-title">• 코일운송<br>• 건설자재운송</h2>
					<p class="conBox-txt">
						경험과 노하우로 고객의 장비, 상품 등 안정하게 설치 및 운송
					</p>

				<!--//conBox-in-2 -->

				<!-- conBox-in-3 -->
				<div class="conBox-in conBox-in-3" style="padding-top:0px;">
				<ul class="conBox-menu2w">
					<li class="on" t="1">일반운송</li>
				</ul>
				<hr class="both" />
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/logisticsLand_img05.png" />
						<img src="<?=$skin_url?>/img/content/logisticsLand_img06.png" />
					</div>				
				<!-- conBox-in-1 -->
					<h2 class="conBox-sub-title">• 간선운송<br>• 일반화물운송</h2>
					<p class="conBox-txt">
						TMS시스템을 활용한 센터간 운송 및 일반육상화물운송 서비스
					</p>
				</div>
				<!--//conBox-in-3 -->

				<!-- conBox-in-4 -->

				<!--//conBox-in-4 -->

				<!-- conBox-in-5 -->
				<div class="conBox-in conBox-in-5" style="padding-top:0px;">
				<ul class="conBox-menu2w">
					<li class="on" t="1">특수화물</li>
				</ul>
				<hr class="both" />
			
				<!-- conBox-in-1 -->
					<h2 class="conBox-sub-title">• 군 / 방산물품 운송<br>• 설치 / 운송</h2>
					<p class="conBox-txt">
						군 관련 물류 운영<br>풍력, 핵 등 특수화물 운송

					</p>
				</div>
				<!--//conBox-in-5 -->
				<!-- conBox-in-6 -->
				<div class="conBox-in conBox-in-6">
				<ul class="conBox-menu2w">
					<li class="on" t="1">스마트 기업/물류 이전 운송</li>
				</ul>
				<hr class="both" />
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/logisticsLand_img07.png" />
					</div>				
				<!-- conBox-in-1 -->
					<h2 class="conBox-sub-title">• 기업이전<br>• 물류센터 이전</h2>
					<p class="conBox-txt">
						최적의 동선 반영한 레이아웃 설계 및 안정적인 이전업무 서비스
					</p>
					<hr class="line" />
<!-- 					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img11.png" />
					</div> -->

				</div>
				<!--//conBox-in-6 -->
				
			</div>
			<!--//conBox-right -->
		</div>
		<!--//conBox -->
		<hr class="both" />
	</section>
    
</div>
<!-- subWrap// -->

<script type="text/javascript">
	$(".conBox-menu2w li").click(function(){
		var t = $(this).attr('t');
		$(".conBox-menu2w li").attr('class','');
		$(this).attr('class','on');

		$(".conBox-in").hide();
		$(".conBox-in-"+t).show();
	});
</script>
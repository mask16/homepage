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
		<!-- conBox -->
		<div class="conBox">
			<!-- conBox-left -->
			<div class="conBox-left">
				<h1>Land<br>transportation</h1>
				<a class="his" href="<?=$host_url?>/product/logistics">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" />Logistics Main
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Why Hyundai Gloville?</h1>
					<p class="conBox-txt">
							Based on our various and professional transportation experience,<br>we provide the best solutions and services to our customers with respect to the business model
					</p>
			
				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
				<ul class="conBox-menu2w">
					<li class="on" t="1">Cold Chain</li>
				</ul>
				<hr class="both" />
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/logisticsLand_img01.png" />
						<img src="<?=$skin_url?>/img/content/logisticsLand_img02.png" />
					</div>	
					<h2 class="conBox-sub-title">• E-commerce<br>• B2B transport</h2>
					<p class="conBox-txt">
						Support the customers business by providing the optimal process with respect to their needs and characteristics
					</p>

				</div>
				<!--//conBox-in-1 -->
				
				<!-- conBox-in-2 -->
				<div class="conBox-in conBox-in-2" style="padding-top:0px;">
				<ul class="conBox-menu2w">
					<li class="on" t="1">Heavyweight transport</li>
				</ul>
				<hr class="both" />
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/logisticsLand_img03.png" />
						<img src="<?=$skin_url?>/img/content/logisticsLand_img04.png" />
					</div>				
				<!-- conBox-in-1 -->
					<h2 class="conBox-sub-title">• Coil transport<br>• Construction material transport</h2>
					<p class="conBox-txt">
						Properly delivering and installing customers equipment with the past know-hows and experience
					</p>

				<!--//conBox-in-2 -->

				<!-- conBox-in-3 -->
				<div class="conBox-in conBox-in-3" style="padding-top:0px;">
				<ul class="conBox-menu2w">
					<li class="on" t="1">General transport</li>
				</ul>
				<hr class="both" />
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/logisticsLand_img05.png" />
						<img src="<?=$skin_url?>/img/content/logisticsLand_img06.png" />
					</div>				
				<!-- conBox-in-1 -->
					<h2 class="conBox-sub-title">• Mainline transport<br>• General logistics transport</h2>
					<p class="conBox-txt">
						TMS systems utilized to transport general goods from center to center or provide typical service
					</p>
				</div>
				<!--//conBox-in-3 -->

				<!-- conBox-in-4 -->

				<!--//conBox-in-4 -->

				<!-- conBox-in-5 -->
				<div class="conBox-in conBox-in-5" style="padding-top:0px;">
				<ul class="conBox-menu2w">
					<li class="on" t="1">Special cargo/transport</li>
				</ul>
				<hr class="both" />
			
				<!-- conBox-in-1 -->
					<h2 class="conBox-sub-title">• Military logistics transport<br>• Installation / transport</h2>
					<p class="conBox-txt">
						Defense logistics transport<br>Windpower/Nuclear transport or installation

					</p>
					<br><br>
				</div>
				<!--//conBox-in-5 -->
					<hr class="line" />

				<!-- conBox-in-6 -->
				<div class="conBox-in conBox-in-6">
				<ul class="conBox-menu2w">
					<li class="on" t="1">Smart company/Logistics moving transport</li>
				</ul>
				<hr class="both" />
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/logisticsLand_img07.png" />
					</div>				
				<!-- conBox-in-1 -->
					<h2 class="conBox-sub-title">• Business Relocation<br>• Warehouse Relocation</h2>
					<p class="conBox-txt">
						Safe and quick relocation services provided accounting the optimal layout design
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
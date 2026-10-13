<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>
.distribution ul.conBox-menu2 li {
    width: 24%;
</style>
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
		<!-- conBox -->
		<div class="conBox">
			<!-- conBox-left -->
			<div class="conBox-left">
				<h1>소재/원료</h1>

			</div> 
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Department of Trading & SCM</h1>
				<ul class="conBox-menu2">
					<a href="/kor/hdg/product/smrmSmRm"><li t="1">제강원료 및 합금철</li></a>
					<a href="/kor/hdg/product/smrmMetalSilicon" ><li t="2">메탈실리콘</li></a>
					<a href="/kor/hdg/product/smrmNonFerrousMetal"><li t="3">비철금속</li></a>
					<a href="/kor/hdg/product/smrmGeneralTrading" ><li t="4" class="on" >일반무역</li></a>

				</ul>
				<hr class="both" />
				
				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<ul class="smrmCommonList gt_ul">
						<li class="full_li">
							<div class="txt_box">
								<h2>
									일반무역
									<span>
										(General Trading)
									</span>
								</h2>
								<p>
									Peanut Kernel, Crude Peanut Oil, Refined Peanut Oil, Soy bean and Sesame seeds, Cereals & Agriculture Items
								</p>
							</div>
							<div class="img_box">
								<img src="<?=$skin_url?>/img/content/gt_img01.jpg" />
							</div>
						</li>
						<li>
							<h2>
								Peanut Kernel, Crude Peanut Oil, Refined Peanut Oil,<br>Soy bean and Sesame seeds, Cereals & Agriculture Items
							</h2>
							<div class="img_box img_grid_3">
								<img src="<?=$skin_url?>/img/content/gt_img02.jpg" />
								<img src="<?=$skin_url?>/img/content/gt_img03.jpg" />
								<img src="<?=$skin_url?>/img/content/gt_img04.jpg" />
								<span>
									Cereals & Agriculture Items
								</span>
							</div>
							<div class="img_box img_grid_2">
								<div>
									<img src="<?=$skin_url?>/img/content/gt_img05.jpg" />
									<span>
										Crude Peanut Oil
									</span>
								</div>
								<div>
									<img src="<?=$skin_url?>/img/content/gt_img06.jpg" />
									<span>
										Crude Peanut Oil
									</span>
								</div>
							</div>
							<div class="img_box img_grid_3">
								<img src="<?=$skin_url?>/img/content/gt_img07.jpg" />
								<img src="<?=$skin_url?>/img/content/gt_img08.jpg" />
								<img src="<?=$skin_url?>/img/content/gt_img09.jpg" />
								<span>
									Peanut Kernel
								</span>
							</div>
						</li>
					</ul>
				</div>
				<!--//conBox-in-1 -->
				

				
			</div>
			<!--//conBox-right -->
		</div>
		<!--//conBox -->
		<hr class="both" />
	</section>
    
</div>
<!-- subWrap// -->

<script type="text/javascript">
	$(".conBox-menu2 li").click(function(){
		var t = $(this).attr('t');
		$(".conBox-menu2 li").attr('class','');
		$(this).attr('class','on');

		$(".conBox-in").hide();
		$(".conBox-in-"+t).show();
	});
</script>
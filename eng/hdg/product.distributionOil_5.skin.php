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

	<section class="distribution">
		<!-- conBox -->
		<div class="conBox">
			
			<!-- conBox-left -->
			<div class="conBox-left">
				<h1>Engine Oil</h1>
				<a class="his" href="<?=$host_url?>/product/distribution">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" /> Distribution Oil Main
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">BRAKE FLUIDS (GV DOT Series)</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_5_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_5_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						GV DOT Series shows strong and stable braking performance.<br>
						This product can be used even in harsh climates.<br>
						High boiling point and low evaporation characteristics maintain high stability during use.<br>
						As an international Standard product, it is suitable for use in domestic and imported vehicles as well.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>All types of vehicle brakes other than passenger cars, buses, trucks, and trailers
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>SAE J1703, SAE J1704, FMVSS No.116 (DOT3, DOT4), KS M 2141 (DOT 3 and DOT 4)
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table" style="width:100%;">
						<tr>
							<th>Categoty</th>
							<th>DOT-3</th>
							<th>DOT-4</th>
						</tr>
						<tr>
							<td class="f">VISCOSITY, cSt, 40°C</td>
							<td>1,332</td>
							<td>1,148</td>
						</tr>
						<tr>
							<td class="f">VISCOSITY, cSt, 100°C</td>
							<td>1.97</td>
							<td>2.06</td>
						</tr>
						<tr>
							<td class="f">Dry boiling point °C</td>
							<td>229</td>
							<td>261</td>
						</tr>
						<tr>
							<td class="f">Wet boiling point °C</td>
							<td>147</td>
							<td>162</td>
						</tr>
						<tr>
							<td class="f">Pour point, °C</td>
							<td>>9.18</td>
							<td>>8.81</td>
						</tr>
						</table>
					</div>
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> -->
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
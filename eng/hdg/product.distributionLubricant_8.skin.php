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
				<h1>Industrial Lubricant</h1>
				<a class="his" href="<?=$host_url?>/product/distribution">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" /> Distribution Oil Main
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Grease (GV Grease)</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionLubricant_8_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionLubricant_8_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV Grease Series</span> is a high-performance automobile and industrial grease Standard for cloud bearing, No. 2/3.It is recommended for Automobile parts and Industrial equipment and exhibits optimized performance for adhesion, water resistance, and oxidation stability.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt">
							• Construction equipment. Heavy equipment used in mines.<br>
							• Motor bearings, fan bearings, pump bearings and other sliding bearings and rolling bearings.<br>
							• Industrial equipment that requires multi-purpose grease and chassis for automobiles.<br>
							• Wheel bearings, ball joints, universal joints, connections, car parts.
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• KSM2130 Grease Type 3 for Cloud Bearing No. 2 (NLGI2) <br>
							• KSM2130 Grease Type 3 for Cloud Bearing No. 3 (NLGI3)
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table" style="width:100%;">
						<tr>
							<th>NLGI CLASS</th>
							<th>2</th>
							<th>3</th>
						</tr>
						<tr>
							<td class="f">Unworked Pentration (25℃)</td>
							<td>270</td>
							<td>235</td>
						</tr>
						<tr>
							<td class="f">Dropping Point (℃)</td>
							<td>235</td>
							<td>230</td>
						</tr>
						<tr>
							<td class="f">Corrosion Copper(@100℃,24hr)</td>
							<td>Black/Green No change (1a)</td>
							<td>Black/Green No change (1a)</td>
						</tr>
						<tr>
							<td class="f">Evaporation (99℃,22hr)(%)</td>
							<td>0.1</td>
							<td>0.1</td>
						</tr>
						<tr>
							<td class="f">Stability Oxidation (99℃,100hr)(kgf/cm2)</td>
							<td>0.25</td>
							<td>0.25</td>
						</tr>
						<tr>
							<td class="f">Moisture(wt%)</td>
							<td>None</td>
							<td>None</td>
						</tr>
						<tr>
							<td class="f">Water Washout 38℃, wt%</td>
							<td>0.75</td>
							<td>0.75</td>
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
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
				<h1 class="conBox-title">Motorcycle</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_3_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_3_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV 2T & 4T Oil</span> is a product that meets JASOFB, the Standard for engine oil quality in Japan. As a product, advanced clean dispersants can be used to prevent piston ring pressing and provide excellent engine protection and shift performance even under extreme operating conditions at high speed.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>Applied to domestic and foreign 2 administrations, motor cycles, and scooters (2T)<br>
							<span style="margin:0 3px 0 -18px;">•  </span>It's applied to domestic and foreign 4 administrations (4T)
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• US Standard. : API SL<br>
							• Japanese Standard : JASO FB, MA2
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr class="rowspan">
							<th rowspan="2">SAE  VISCOSITY / Performance</th>
							<th>10W40</th>
							<th>15W40</th>
							<th>10W30</th>
							<th>10W40</th>
							<th rowspan="2">&nbsp;</th>
						</tr>
						<tr class="rowspan">
							<th>CK-4</th>
							<th>CK-4</th>
							<th>CI-4</th>
							<th>CI-4/SL</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.87</td>
							<td>0.86</td>
							<td>0.86</td>
							<td>0.86</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>47.5</td>
							<td>97.6</td>
							<td>97.6</td>
							<td>154</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>7.5</td>
							<td>15.1</td>
							<td>15.1</td>
							<td>18.7</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>122</td>
							<td>163</td>
							<td>163</td>
							<td>137</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>70</td>
							<td>>210</td>
							<td>>220</td>
							<td>>220</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-33</td>
							<td>-33</td>
							<td>-33</td>
							<td>-30</td>
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
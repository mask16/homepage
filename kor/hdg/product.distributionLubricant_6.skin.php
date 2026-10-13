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
		<!-- conBox -->
		<div class="conBox">
			
			<!-- conBox-left -->
			<div class="conBox-left">
				<h1>산업용 윤활유</h1>
				<a class="his" href="<?=$host_url?>/product/distribution">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" /> 윤활유 메인으로
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">기계유 (GV MACHINE)</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionLubricant_6_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionLubricant_6_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV MACHINE</span>은 고도로 정제한 파라핀계 기유로 열 안정성, 산화안정성, 방청성 및 소포성이 우수한 제품으로,각종 산업용 기계유 / Flushing유 및 주물 작업용 플런저 오일로 사용되며 슬러지 생성 방지 및 저온 작동에 최적화된 성능을 발휘합니다.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt">
							• 산업 순환계통의 오염물질 제거를 위한 Flushing유<br>
							• 각종 산업유 기계유 (내마모 성능이 필요없 는, 각종 유압 시스템)<br>
							• 고점도의 Plunger유

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• 우수한 열안정성 및 산화안정성으로 장기간 사용 가능<br>
							• 수분리성 및 항유화성이 우수<br>
							• 녹 및 부식 발생을 최소화

						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr>
							<th>ISO 점도 등급</th>
							<th>32</th>
							<th>46</th>
							<th>68</th>
							<th>100</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.86</td>
							<td>0.87</td>
							<td>0.87</td>
							<td>0.88</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>235</td>
							<td>240</td>
							<td>255</td>
							<td>260</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-38</td>
							<td>-35</td>
							<td>-35</td>
							<td>-33</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>32.0</td>
							<td>46.0</td>
							<td>68.0</td>
							<td>100.0</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>5.36</td>
							<td>6.97</td>
							<td>9.05</td>
							<td>11.7</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>110</td>
							<td>108</td>
							<td>107</td>
							<td>105</td>
						</tr>
						<tr>
							<td class="f">Corrosion Copper 3Hr @100°C</td>
							<td>1a</td>
							<td>1a</td>
							<td>1a</td>
							<td>1a</td>
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
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
				<h1>엔진오일</h1>
				<a class="his" href="<?=$host_url?>/product/distribution">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" /> 윤활유 메인으로
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">바이크 엔진오일</h1>
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
						<span class="bold">GV 2T & 4T Oil</span>는 일본 모터싸이클 엔진오일 품질 규격 JASO FB를 만족하는 제품으로, 첨단 청정 분산제를 사용하여, 피스톤 링 눌어붙음을 방지 할 수 있으며,  고속의 극심한 운전 조건 하에서도,  뛰어난 엔진 보호  성능 과 변속 성능 우수한 승차감을 제공합니다.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding: 0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>국내 외 2 행정, 모터 싸이클 및 스쿠터에 적용 (2T)<br>
							<span style="margin:0 3px 0 -18px;">•  </span>국내 외 4 행정, 모터 싸이클에 적용 (4T)

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							•  미국 공인 규격 : API SL<br>
							•  일본 공인규격 : JASO FB, MA2

						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr class="rowspan">
							<th rowspan="2">SAE 점도 / 성능 규격</th>
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
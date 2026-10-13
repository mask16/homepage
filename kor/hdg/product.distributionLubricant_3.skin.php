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
				<h1 class="conBox-title">습동면유 (GV WAY)</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionLubricant_3_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionLubricant_3_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV WAY</span>는 고품질의 기유와 우수한 첨가제로 만든 습동면유 입니다.  우수한  내 마모성능, 점착성, 부식방지 및 스틱 슬립(Stick-Slip) 방지에  탁월한 성능을 발휘하여, 공장기계의 습동부에 최적화된 제품입니다.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>점착성, 부식방지성능 및 극압특성이 요구되는 모든 공작기계<br>
							<span style="margin:0 3px 0 -18px;">•  </span>공작기계 습동부, 테이블과 공급장치<br>
							<span style="margin:0 3px 0 -18px;">•  </span>유압과 기어박스 시스템<br>

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>점착성이 우수하여, Stick Slip 문제를 해결하고, 금속가공품의 품질을 향상됨<br>
							<span style="margin:0 3px 0 -18px;">•  </span>우수한 내마모성능으로 가공 정밀도가 유지되며 기계부품의 수명이 연장됨<br>
							<span style="margin:0 3px 0 -18px;">•  </span>녹 및 부식방지성이 탁월하여 기계부품의 수명을 연장됨

						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr>
							<th>ISO 점도 등급</th>
							<th>68</th>
							<th>100</th>
							<th>150</th>
							<th>220</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.85</td>
							<td>0.87</td>
							<td>0.87</td>
							<td>0.88</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>221</td>
							<td>238</td>
							<td>255</td>
							<td>270</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-39</td>
							<td>-33</td>
							<td>-27</td>
							<td>-21</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>30.9</td>
							<td>68.2</td>
							<td>144.6</td>
							<td>207.0</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>5.6</td>
							<td>9.4</td>
							<td>15.06</td>
							<td>19.7</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>124</td>
							<td>116</td>
							<td>105</td>
							<td>110</td>
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
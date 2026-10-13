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
				<h1 class="conBox-title">변속기오일</h1>
				<ul class="conBox-menu2">
					<li class="on" t="1">자동변속기오일</li>
					<li t="2">수동변속기오일</li>
				</ul>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_4_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_4_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV ATF Series</span>는 우수한 유동성, 우수한 산화 안정성을 가진 제품 입니다. 국내외 주요 자동변속기 제조사의 요구조건을 만족하는 제품으로 승용차 및 상용 차량의 자동변속기 또는 Power Steering Unit 사용이 가능 하며, 연비  개선 효과가 우수한 제품입니다.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt">
							• 승용 차량의 자동 변속기<br>
							• 대형상용 차량의 자동 변속기<br>
							• 파워 스티어링 유닛<br>
							• 승용 차량의 4~8속 자동 변속기

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt" style="padding: 0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>HYUNDAI/KIA : SP-III/IV/IV-RR<br>
							<span style="margin:0 3px 0 -18px;">•  </span>GM : DEXRON II, III, VI<br>
							<span style="margin:0 3px 0 -18px;">•  </span>FORD : MERCON, MERCON LV<br>
							<span style="margin:0 3px 0 -18px;">•  </span>T-IV (JWS 3309), M-1375.4, JWS 3314/3317, NWS-9638, RED-1/1K<br>
							<span style="margin:0 3px 0 -18px;">•  </span>BMW : 83 22 0 142 516, 83 22 0 026 922, ETL-7045E, 8072B, LA 2634, LT 71141, ZF 5HP18FL, 5HP24, 5HP30<br>
							<span style="margin:0 3px 0 -18px;">•  </span>Mercedes-Benz : MB 236.1/2/3/5/6/7/9/10/11/15/16/17/41/81/91<br>
							<span style="margin:0 3px 0 -18px;">•  </span>VW/AUDI : G 052 162/990, G 055 005/025/162<br>
							<span style="margin:0 3px 0 -18px;">•  </span>Porsche : T-IV (JWS 3309), JASO 1A / 1A LV, -NISSAN/INFINITY : MATIC-C/D/J/K/S/W<br>
							<span style="margin:0 3px 0 -18px;">•  </span>MITSUBISHI : SP-II, SP-III, J2, J3, ATF PA, -HONDA/ACURA : ATF Z-1, DW-1, Type 3.0<br>
							<span style="margin:0 3px 0 -18px;">•  </span>TOYOTA/LEXUS : T-I, T-II, T-III, T-IV, WS (JWS 3324), SUBARU : ATF, ATF HP, ATF 5AT, Auto Fluid WS<br>
							<span style="margin:0 3px 0 -18px;">•  </span>MAZDA : ATF D-II, M-III, M-V, S-1, N-1, 3317, ZF : TE-ML 03D, 04D, 05L, 09, 11A, 11B, 14A, 16L, 17C, 21L<br>
							<span style="margin:0 3px 0 -18px;">•  </span>Allison : C3/4, TES-295, 389
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr class="">
							<th>SAE 점도</th>
							<th>GV ZF</th>
							<th>GV ATF Ⅲ</th>
							<th>GV SP-4</th>
							<th>GV CVT</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.85</td>
							<td>0.86</td>
							<td>0.85</td>
							<td>0.85</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>36.8</td>
							<td>38.1.</td>
							<td>30.0</td>
							<td>36.9</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>6.9</td>
							<td>7.4</td>
							<td>6.0</td>
							<td>7.4</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>150</td>
							<td>164</td>
							<td>151</td>
							<td>172</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>200</td>
							<td>>200</td>
							<td>>200</td>
							<td>>200</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-48</td>
							<td>-39</td>
							<td>-48</td>
							<td>-39</td>
						</tr>
						</table>
					</div>
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> -->
				</div>
				<!--//conBox-in-1 -->

				<!-- conBox-in-2 -->
				<div class="conBox-in conBox-in-2" style="display:none;">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_4_img03.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_4_img04.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV GEAR Series</span>는 고급 기유를 적용하여, 저온에서 부드러운 변속을 가능하게 하고 소음을 감소시켜 주는 최고급 기어 오일입니다. 우수한 극압 성능과 내마모성을 가진 제품으로 승용차 /상용차의 기어박스에서 최적의 성능을 발휘할 수 있는 제품입니다. 산화 안정 성능이 우수하여,  이물질이 혼입되어도 산화를 억제시키는 성능이 우수하여 장기간 사용이 가능 합니다.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt">
							•  승용 및 상용 차량의 수동 변속기 및 후 차축 기어<br>
							•  트랙터, 각종 농기계의 기어박스

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							•  미국 공인 규격 : API GL-4, API GL-5
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr class="rowspan">
							<th rowspan="2">SAE 점도 / 성능 규격</th>
							<th>75W90</th>
							<th>80W90</th>
							<th>75W90</th>
							<th>80W90</th>
							<th>85W140</th>
							<th>80W90</th>
							<th rowspan="2"></th>
						</tr>
						<tr class="rowspan">
							<th>GL-4</th>
							<th>GL-4</th>
							<th>GL-5</th>
							<th>GL-5</th>
							<th>GL-5</th>
							<th>GL-5</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.88</td>
							<td>0.89</td>
							<td>0.88</td>
							<td>0.89</td>
							<td>0.91</td>
							<td>0.89</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>94.8</td>
							<td>134.2</td>
							<td>98.0</td>
							<td>139.6</td>
							<td>311.1</td>
							<td>139.6</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>15.4</td>
							<td>14.5</td>
							<td>15.7</td>
							<td>14.2</td>
							<td>24.5</td>
							<td>14.2</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>172</td>
							<td>107</td>
							<td>171</td>
							<td>99</td>
							<td>100</td>
							<td>99</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>180</td>
							<td>>220</td>
							<td>>180</td>
							<td>>220</td>
							<td>>220</td>
							<td>>220</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-42</td>
							<td>-30</td>
							<td>-45</td>
							<td>-33</td>
							<td>-18</td>
							<td>-33</td>
						</tr>
						</table>
					</div>
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> -->
				</div>
				<!--//conBox-in-2 -->

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
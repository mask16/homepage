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
				<h1 class="conBox-title">디젤 엔진오일</h1>
				<ul class="conBox-menu2">
					<li class="on" t="1">GVD-CK, CI</li>
					<li t="2">GVD-CH, CF</li>
					<li t="3">GVD-SAE</li>
				</ul>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_2_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_2_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GVD Series</span>는 초 저유황 연료를 사용하는 엔진 및 배기가스 후처리 DPF(Diesel Particulate Filter, SCR(Selective Catalyst Reduction) 장치의  수명을 연장 시켜줍니다. EGR(exhaust gas recirculation) 장착 엔진에서, 점도 증가와 엔진마모의 영향을 최소화 하여 엔진을 보호해줍니다.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>디젤 (대형차량 / 건설중장비)<br>
							<span style="margin:0 3px 0 -18px;">•  </span>DPF, CPF (매연저감정치) 장착 차량<br>
							<span style="margin:0 3px 0 -18px;">•  </span>VHM 기유를 100% 사용한 합성 엔진오일<br>
							<span style="margin:0 3px 0 -18px;">•  </span>오일 교환 주기 연장 및 연비를 향상<br>

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							•  미국 공인 규격 : API CK-4/CI-4, ACEA E9
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr class="rowspan">
							<th rowspan="3">SAE 점도 /성능 규격</th>
							<th>10W40</th>
							<th>15W40</th>
							<th>10W30</th>
							<th>10W40</th>
							<th>15W40</th>
							<th>20W50</th>
							<th rowspan="3">&nbsp;</th>
						</tr>
						<tr class="rowspan">
							<th>CK-4</th>
							<th>CK-4</th>
							<th>CI-4</th>
							<th>CI-4/SL</th>
							<th>CI-4/SL</th>
							<th>CI-4/SL</th>
						</tr>
						<tr class="rowspan">
							<th>DPF/CPF</th>
							<th>DPF/CPF</th>
							<th colspan="4">디젤 (대형차량 / 건설중장비)</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.87</td>
							<td>0.87</td>
							<td>0.87</td>
							<td>0.87</td>
							<td>0.88</td>
							<td>0.88</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>125.0</td>
							<td>125.0</td>
							<td>81.0</td>
							<td>108.5</td>
							<td>115.2</td>
							<td>167.2</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>15.7</td>
							<td>15.7</td>
							<td>11.9</td>
							<td>15.4</td>
							<td>15.1</td>
							<td>17.6</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>132</td>
							<td>132</td>
							<td>141</td>
							<td>150</td>
							<td>136</td>
							<td>115</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>220</td>
							<td>>220</td>
							<td>>220</td>
							<td>>220</td>
							<td>>220</td>
							<td>>220</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-33</td>
							<td>-33</td>
							<td>-36</td>
							<td>-33</td>
							<td>-30</td>
							<td>-27</td>
						</tr>
						</table>
					</div>
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> -->
				</div>
				<!--//conBox-in-1 -->

				<!-- conBox-in-2 -->
				<div class="conBox-in conBox-in-2" style="display:none;">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_2_img03.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_2_img04.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GVD Series</span>는 모든 디젤 엔진용 멀티그레이드 엔진오일로, 토목공사 기계류, 트럭, 어선, 기관차의 모든 터보 차저나 자연흡입방식 디젤 엔진에 적합하고 국제성능규격 API CH-4/SG 을 만족하는 차량에 적합한 제품입니다.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>디젤 (대형차량 / 건설중장비)<br>
							<span style="margin:0 3px 0 -18px;">•  </span>터보 차져나 자연흡입방식 디젤 엔진이 장착된 가혹한 운전조건의 차량<br>
							<span style="margin:0 3px 0 -18px;">•  </span>디젤 엔진이 장착된 소형트럭, RV, SUV, 대형트럭, 버스<br>
							<span style="margin:0 3px 0 -18px;">•  </span>특히 고압고온에서 작동하는 유럽형 디젤엔진 차량
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							•  미국 공인 규격 : API CF-4/SG
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr class="rowspan">
							<th rowspan="2">SAE 점도 / 성능 규격</th>
							<th>15W40</th>
							<th>20W50</th>
							<th>10W30</th>
							<th>15W40</th>
							<th>20W50</th>
							<th>25W50</th>
							<th rowspan="2">&nbsp;</th>
						</tr>
						<tr class="rowspan">
							<th>CH-4/SG</th>
							<th>CH-4/SG</th>
							<th>CF-4/SG</th>
							<th>CF-4/SG</th>
							<th>CF-4/SG</th>
							<th>CF-4/SG</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.87</td>
							<td>0.88</td>
							<td>0.87</td>
							<td>0.87</td>
							<td>0.88</td>
							<td>0.88</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>125.2</td>
							<td>167.1</td>
							<td>72.2</td>
							<td>109.6</td>
							<td>170.0</td>
							<td>168.0</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>15.1</td>
							<td>18.2</td>
							<td>10.7</td>
							<td>14.1</td>
							<td>19.0</td>
							<td>18.8</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>124</td>
							<td>121</td>
							<td>136</td>
							<td>130</td>
							<td>127</td>
							<td>126</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>220</td>
							<td>>220</td>
							<td>>220</td>
							<td>>220</td>
							<td>>220</td>
							<td>>220</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-36</td>
							<td>-18</td>
							<td>-33</td>
							<td>-24</td>
							<td>-24</td>
							<td>-24</td>
						</tr>
						</table>
					</div>
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> -->
				</div>
				<!--//conBox-in-2 -->

				<!-- conBox-in-3 -->
				<div class="conBox-in conBox-in-3" style="display:none;">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_2_img05.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_2_img06.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GVD Series</span>는 모든 디젤 엔진용 멀티그레이드 엔진오일로, 토목공사 기계류, 트럭, 어선, 기관차의 모든 터보 차저나 자연흡입방식 디젤 엔진에 적합하고 국제성능규격 API CF-4/SG 을 만족하는 차량에 적합한 제품입니다.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>디젤 (대형차량 / 건설중장비)<br>
							<span style="margin:0 3px 0 -18px;">•  </span>터보 차져나 자연흡입방식 디젤 엔진이 장착된 가혹한 운전조건의 차량<br>
							<span style="margin:0 3px 0 -18px;">•  </span>디젤 엔진이 장착된 소형트럭, RV, SUV, 대형트럭, 버스<br>
							<span style="margin:0 3px 0 -18px;">•  </span>특히 고압고온에서 작동하는 유럽형 디젤엔진 차량<br>

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							•  미국 공인 규격 : API CF-4/SG
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr class="">
							<th>SAE 점도</th>
							<th>SAE 30</th>
							<th>SAE 40</th>
							<th>SAE 50</th>
							<th>SAE 60</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.87</td>
							<td>0.87</td>
							<td>0.88</td>
							<td>0.88</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>93.52</td>
							<td>123.8</td>
							<td>163.4</td>
							<td>213.0</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>11.2</td>
							<td>14.1</td>
							<td>18.16</td>
							<td>23.18</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>99</td>
							<td>113</td>
							<td>124</td>
							<td>134</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>220</td>
							<td>>220</td>
							<td>>220</td>
							<td>>220</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-20</td>
							<td>-20</td>
							<td>-37</td>
							<td>-35</td>
						</tr>
						</table>
					</div>
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> -->
				</div>
				<!--//conBox-in-3 -->

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
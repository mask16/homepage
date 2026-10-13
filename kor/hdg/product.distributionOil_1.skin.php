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
				<h1 class="conBox-title">가솔린 엔진오일</h1>
				<ul class="conBox-menu2">
					<li class="on" t="1">GV PAO</li>
					<li t="2">GV T.O.P</li>
					<li t="3">GV GOLD</li>
					<li t="4">GVS</li>
					<li t="5">GV</li>
					<li t="6">GVL</li>
				</ul>
				<hr class="both" />
				
				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV PAO Series</span> 는  최고급 100%  합성 엔진 오일로 API 최고 성능 등급 및 유럽 규격을 만족 시켜 가솔린, 디젤 (RV포함), LPG를 연료로 사용하는 최고급 전 차종에 적합한 제품 입니다. 특히, 최고의 엔진 보호 성능과 고속 주행 시 탁월한 안정감을 제공합니다.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>가솔린, 디젤, LPG 차량<br>
							<span style="margin:0 3px 0 -18px;">•  </span>DPF/CPF/TWC가 장착된 디젤 차량<br>
							<span style="margin:0 3px 0 -18px;">•  </span>직분사엔진 (GDi : Gasoline Direct Injection Engine)<br>
							<span style="margin:0 3px 0 -18px;">•  </span>고급 수입자동차<br>
							<span style="margin:0 3px 0 -18px;">•  </span>스포츠카, RV, SUV 차량

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• 미국 공인규격 : API SP, SN<br>
							• 유럽 공인규격 : C2, C3, C5
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr>
							<th>SAE 점도 / Performance<br>API & ACEA</th>
							<th>0W16<br>SP, ILSAC GF-6B</th>
							<th>0W20<br>SP, ILSAC GF-6A</th>
							<th>0W20 SP/C5<br>(DPF)</th>
							<th>0W30 SP/,C2<br>(DPF)</th>
							<th>0W40 SP/C3<br>(DPF)</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>35.5</td>
							<td>43.0</td>
							<td>42.96</td>
							<td>62.9</td>
							<td>90.0</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>6.95</td>
							<td>8.19</td>
							<td>8.22</td>
							<td>11.2</td>
							<td>14.00</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>161</td>
							<td>168</td>
							<td>169</td>
							<td>173</td>
							<td>160</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>228</td>
							<td>228</td>
							<td>230</td>
							<td>232</td>
							<td>232</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-40</td>
							<td>-40</td>
							<td>-40</td>
							<td>-40</td>
							<td>-40</td>
						</tr>
						</table>
					</div>
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> -->

				</div>
				<!--//conBox-in-1 -->
				
				<!-- conBox-in-2 -->
				<div class="conBox-in conBox-in-2" style="display:none;">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img03.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img04.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV T.O.P Series</span>는  PAO  기반의,  최 고급 100%  합성 엔진 오일로 API 최고 성능 등급 및 유럽 규격을 만족 시켜 가솔린, 디젤 (RV포함),  LPG를 연료로 사용하는 최고급 전 차종에 적합한 제품 입니다. 특히 엔진 오일 교환 주기 연장, 엔진 보호 강화, 연비 향상 및 배기 가스  배출 저감에 최적화된 성능을 발휘 합니다.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>가솔린, 디젤, LPG 차량<br>
							<span style="margin:0 3px 0 -18px;">•  </span>DPF/CPF/TWC가 장착된 디젤 차량<br>
							<span style="margin:0 3px 0 -18px;">•  </span>직분사엔진 (GDi : Gasoline Direct Injection Engine)<br>
							<span style="margin:0 3px 0 -18px;">•  </span>고급 수입자동차<br>
							<span style="margin:0 3px 0 -18px;">•  </span>스포츠카, RV, SUV 차량

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• 미국 공인규격 :  API SP<br>
							• 유럽 공인규격 :  C2/C3
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table" style="width:100%;">
						<tr>
							<th>SAE  점도 /<br>API & ACEA</th>
							<th>5W30<br>SP, C2/C3</th>
							<th>5W40<br>SN, C3</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.852</td>
							<td>0.853</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>68.5</td>
							<td>90.1</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>11.1</td>
							<td>14.2</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>160</td>
							<td>163</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>200</td>
							<td>>210</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-39</td>
							<td>-39</td>
						</tr>
						</table>
					</div>
<!-- 					<p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p>
					 -->				</div>
				<!--//conBox-in-2 -->

				<!-- conBox-in-3 -->
				<div class="conBox-in conBox-in-3" style="display:none;">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img05.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img06.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV GOLD Series</span>는  100%  합성 엔진 오일로, API 최고 성능 등급 및  유럽 규격을 만족 시켜, 높은 산화안정성 및 전단안정성으로 장기간 사용시에도 우수한 윤활성능을 보장하고, 뛰어난 가속 성능과 부드러운 주행 안정성에 탁월한 성능을 발휘하는 제품입니다.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>가솔린, 디젤, LPG 차량<br>
							<span style="margin:0 3px 0 -18px;">•  </span>DPF/CPF/TWC가 장착된 디젤 차량<br>
							<span style="margin:0 3px 0 -18px;">•  </span>직분사엔진 (GDi : Gasoline Direct Injection Engine)<br>
							<span style="margin:0 3px 0 -18px;">•  </span>고급 수입자동차<br>
							<span style="margin:0 3px 0 -18px;">•  </span>스포츠카, RV, SUV 차량

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• 미국 공인규격 : API SN<br>
							• 유럽 공인규격 : C2/C3
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table" style="width:100%;">
						<tr>
							<th>SAE 점도 /<br>API & ACEA</th>
							<th>5W30</th>
							<th>5W40</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.853</td>
							<td>0.853</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>68.0</td>
							<td>91.3</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>10.9</td>
							<td>14.6</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>151</td>
							<td>167</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>210</td>
							<td>>210</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-39</td>
							<td>-39</td>
						</tr>
						</table>
					</div>
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> -->
				</div>
				<!--//conBox-in-3 -->

				<!-- conBox-in-4 -->
				<div class="conBox-in conBox-in-4" style="display:none;">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img07.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img08.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GVS Series</span>는 100% 합성 엔진오일로, 연비 개선 효과와 소음 감소  및 엔진 최대 출력이 가능 하도록 그 성능을 극대화 시켰습니다.  미국석유협회의 최신 규격을  만족 하며, T-GDI 엔진보호와, 연비 개선 및 마모 방지 성능에 특화된 제품 입니다.  장시간 사용 하여도 오일 소모량이 적고, 점도 변화도 거의 없어, 가혹한 조건의 운전 차량에 적합 합니다.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>가솔린 차량 전 차종, LPG 차량<br>
							<span style="margin:0 3px 0 -18px;">•  </span>직 분사엔진 (T-GDi : Turbo Gasoline Direct Injection Engine)<br>
							<span style="margin:0 3px 0 -18px;">•  </span>엔진을 청정하게 유지시켜주고, 엔진의 구동력을 유지 시켜줍니다.<br>
							<span style="margin:0 3px 0 -18px;">•  </span>연비를 향상시키고, 장기간 사용에도 점도 변화가 및 오일 소모량이 적어, 오일 교환 주기를  연장 시킵니다.<br>

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							•  미국 공인 규격 : API SP, ILSAC GF-6
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr class="rowspan">
							<th rowspan="2">SAE 점도<br>/ 성능 규격</th>
							<th>0W20</th>
							<th>5W20</th>
							<th>0W30</th>
							<th>5W30</th>
							<th>5W40</th>
							<th>5W30</th>
							<th>5W40</th>
							<th rowspan="2">&nbsp;</th>
						</tr>
						<tr class="rowspan">
							<th>SP/GF-6</th>
							<th>SP/GF-6</th>
							<th>SP/GF-6</th>
							<th>SP/GF-6</th>
							<th>SP</th>
							<th>SP</th>
							<th>SP</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.86</td>
							<td>0.86</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>46.4</td>
							<td>48.9</td>
							<td>54.7</td>
							<td>60.1</td>
							<td>84.0</td>
							<td>114.7</td>
							<td>97.6</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>8.8</td>
							<td>8.5</td>
							<td>10.2</td>
							<td>10.2</td>
							<td>14.0</td>
							<td>18.0</td>
							<td>15.1</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>172</td>
							<td>151</td>
							<td>177</td>
							<td>158</td>
							<td>172</td>
							<td>175</td>
							<td>163</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>200</td>
							<td>>200</td>
							<td>>200</td>
							<td>>200</td>
							<td>>200</td>
							<td>>200</td>
							<td>>200</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-45</td>
							<td>-39</td>
							<td>-45</td>
							<td>-42</td>
							<td>-39</td>
							<td>-42</td>
							<td>-33</td>
						</tr>
						</table>
					</div>
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> -->
				</div>
				<!--//conBox-in-4 -->

				<!-- conBox-in-5 -->
				<div class="conBox-in conBox-in-5" style="display:none;">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img09.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img10.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV Series</span>는 합성 엔진 오일로, 연비 개선 효과와 소음 감소 및  엔진 최대 출력이 가능 하도록 그 성능을 극대화 시켰습니다. 미국석유협회의 최신 규격을  만족 하며, T-GDI 엔진보호와, 연비 개선 및  마모 방지 성능에 특화된 제품 입니다.  장시간 사용 하여도 오일 소모량이 적고,  점도 변화도 거의 없어, 가혹한 조건의 운전 차량에 적합 합니다.


					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>가솔린 차량 전 차종, LPG 차량<br>
							<span style="margin:0 3px 0 -18px;">•  </span>직 분사엔진 (T-GDi : Turbo Gasoline Direct Injection Engine)<br>
							<span style="margin:0 3px 0 -18px;">•  </span>엔진을 청정하게 유지시켜주고, 엔진의 구동력을 유지 시켜줍니다.<br>
							<span style="margin:0 3px 0 -18px;">•  </span>연비를 향상시키고, 장기간 사용에도 점도 변화가 및 오일 소모량이 적어, 오일 교환 주기를  연장 시킵니다.<br>

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							•  미국 공인 규격 : API SP, ILSAC GF-6
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr class="rowspan">
							<th rowspan="2">SAE 점도<br>/ 성능 규격</th>
							<th>5W30</th>
							<th>5W40</th>
							<th>10W30</th>
							<th>10W40</th>
							<th>20W50</th>
							<th rowspan="2">&nbsp;</th>
						</tr>
						<tr class="rowspan">
							<th>SP/GF-6</th>
							<th>SP</th>
							<th>SP/GF-6</th>
							<th>SP</th>
							<th>SP</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.87</td>
							<td>0.87</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>63.8</td>
							<td>84.5</td>
							<td>63.7</td>
							<td>102.7</td>
							<td>158.0</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>10.7</td>
							<td>13.8</td>
							<td>10.1</td>
							<td>15.0</td>
							<td>17.6</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>159</td>
							<td>168</td>
							<td>145</td>
							<td>153</td>
							<td>122</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>200</td>
							<td>>210</td>
							<td>>210</td>
							<td>>210</td>
							<td>>210</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-39</td>
							<td>-39</td>
							<td>-39</td>
							<td>-36</td>
							<td>-24</td>
						</tr>
						</table>
					</div>
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> -->
				</div>
				<!--//conBox-in-5 -->

				<!-- conBox-in-6 -->
				<div class="conBox-in conBox-in-6" style="display:none;">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img11.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_1_img12.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GVL Series</span> 는 VHVI(Very High Viscosity Index) 고급 기유를 사용하여, 연비 개선 효과와 소음 감소 및 엔진 최대 출력이 가능 하도록 그 성능을 극대화 시켰습니다.  미국석유협회의 최신 규격을  만족 하며,  연비 개선 및 마모 방지 성능에 특화된 제품 입니다.  장시간 사용 하여도 오일 소모량이 적고, 점도 변화도 거의 없어, 가혹한 조건의 운전 차량에 적합 합니다.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>가솔린 차량 전 차종, LPG 차량<br>
							<span style="margin:0 3px 0 -18px;">•  </span>엔진을 청정하게 유지시켜주고, 엔진의 구동력을 유지 시켜줍니다.<br>
							<span style="margin:0 3px 0 -18px;">•  </span>연비를 향상시키고, 장기간 사용에도 점도 변화가 및 오일 소모량이 적어, 오일 교환 주기를  연장 시킵니다.<br> 
							<span style="margin:0 3px 0 -18px;">•  </span>사계절용 엔진오일

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							•  미국 공인 규격 : API SP, ILSAC GF-6
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr>
							<th>SAE 점도</th>
							<th>5W20</th>
							<th>5W30</th>
							<th>10W30</th>
							<th>10W40</th>
							<th>15W40</th>
							<th>20W50</th>
						</tr>
						<tr>
							<td class="f">Specific Gravity (15/4°C)</td>
							<td>0.86</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.87</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 40˚C, cSt</td>
							<td>46.0</td>
							<td>60.0</td>
							<td>63.5</td>
							<td>112.0</td>
							<td>112.0</td>
							<td>158.0</td>
						</tr>
						<tr>
							<td class="f">Kinematic Viscosity at 100˚C, cSt</td>
							<td>8.5</td>
							<td>10.0</td>
							<td>10.1</td>
							<td>14.6</td>
							<td>14.6</td>
							<td>17.6</td>
						</tr>
						<tr>
							<td class="f">Viscosity Index</td>
							<td>164</td>
							<td>153</td>
							<td>145</td>
							<td>134</td>
							<td>134</td>
							<td>122</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>210</td>
							<td>>210</td>
							<td>>210</td>
							<td>>210</td>
							<td>>210</td>
							<td>>210</td>
						</tr>
						<tr>
							<td class="f">Pour Point, ℃</td>
							<td>-39</td>
							<td>-39</td>
							<td>-39</td>
							<td>-39</td>
							<td>-39</td>
							<td>-24</td>
						</tr>
						</table>
					</div>
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p>
					 -->
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
	$(".conBox-menu2 li").click(function(){
		var t = $(this).attr('t');
		$(".conBox-menu2 li").attr('class','');
		$(this).attr('class','on');

		$(".conBox-in").hide();
		$(".conBox-in-"+t).show();
	});
</script>
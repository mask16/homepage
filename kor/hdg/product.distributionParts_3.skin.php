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
				<h1>Automotive<br>Parts</h1>
				<a class="his" href="<?=$host_url?>/product/distribution">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" /> 윤활유 메인으로
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">자동차 용품</h1>
				<!-- <ul class="conBox-menu2">
					<li class="on" t="1">GV PAO</li>
					<li t="2">GV T.O.P</li>
					<li t="3">GV GOLD</li>
					<li t="4">GVS</li>
					<li t="5">GV</li>
					<li t="6">GVL</li>
				</ul> -->
				<hr class="both" />
				
				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<h2 class="conBox-sub-title3">GV Washer</h2>
					<p class="conBox-txt">
						GV Washer는  메탄올 대신, 에탄올과 생분해 성능이 높은 원료를 사용한 제품입니다.
					</p>
					<br>

					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionParts_3_img01.png" />
					</div>
					

					<h2 class="conBox-sub-title">Characteristic</h2>
					<p class="conBox-txt">
						1. 세정, 광택, 발수코팅<br>
						2. 선명한 시야 확보<br>
						3. 기름때, 얼룩, 실리콘 등의 오염물을 손쉽게 제거<br>
						4. 차량의 도장 면, 고무, 플라스틱 등에 영향을 끼치지 않음


					</p>
					<br>					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">사용 방법</h2>
						<p class="conBox-txt">
							1. 워셔액 몸통을 잡고 뚜껑을 누른 후 반시계 방향으로 돌려 열어주십시오.<br>
							2. 차량의 보닛을 열어 워셔액 주입구를 확인 후 워셔액을 주입하세요.


						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />
					<h2 class="conBox-sub-title3">GV AdBlue</h2>
					<p class="conBox-txt">
						GV AdBlue는 자동차 촉매제 제조기준 적합제품으로 대기 오염의 원인이 되는 질소산화물(NOx)을 제거하기 위한 친환경 제품으로<br>
						배출가스저감장치에 사용되는 제품으로, 배기가스의 질소산화물(NOx)를 탁월하고 저감시켜줍니다.


					</p>
					<br>

					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionParts_3_img02.png" />
					</div>
					

					<h2 class="conBox-sub-title">Characteristic</h2>
					<p class="conBox-txt">
						1. 초순수 장치를 이용하여, 고순도 제품입니다.<br>
						2. 탁월한 pH관리로, 안정적인 제품입니다.<br>
						3. 온도에 의한 탁도 및 일반 물성의 변화가 없습니다.<br>
						4. 유로6 규제 대응을 위한 SCR(Selective Catalyst Reduction) 시스템에  최적화된 제품입니다.


					</p>
					<br>					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">사용 방법 및 주의사항
						</h2>
						<p class="conBox-txt">
							1. 통상으로 5,000km~ 6,000km마다 정기적 보충이 필요합니다.<br>
							2. 미 보충시 SCR 장치 및 연비나 출력 부분에서도 문제가 발생될 수 있습니다. 
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />
					<h2 class="conBox-sub-title3">GV Wiper</h2>
					<p class="conBox-txt">
						GV Wiper는  얼룩 없이 깨끗하고 안전한 시야를 제공하며, 특수 코팅으로 소음 없이 부드러운 닦임으로 고속주행시 들뜸현상이 적고 뛰어난 밀착력으로 긴 수명을 제공 하는 제품입니다.
					</p>
					<br>

					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionParts_3_img03.png" />
					</div>
					

					<h2 class="conBox-sub-title">특징</h2>
					<p class="conBox-txt">
						1. 특수한 소재로 밀착력이 우수합니다.<br>
						2. 조용하고 부드러운 와이핑으로 발수 코팅 유리면에서도 뛰어난 성능을 보여줍니다.<br>
						3. 선명하고 안전한 시야를 확보하며, 사용자를 위한 간편한 장착이 가능합니다.<br>
						4. 넓은 사이즈 선택으로, 모든 차량에 적용이 가능합니다. 


					</p>
					
					<hr class="both" />
					<hr class="line" />


					<div class="tableBox">
						<table class="conBox-table" style="width:100%;">
						<tr>
							<th></th>
							<th>12인치</th>
							<th>14인치</th>
							<th>16인치</th>
							<th>18인치</th>
							<th>20인치</th>
							<th>22인치</th>
							<th>24인치</th>
							<th>30인치</th>

						</tr>
						<tr>
							<td class="f">사이즈선택</td>
							<td>300mm</td>
							<td>350mm</td>
							<td>400mm</td>
							<td>450mm</td>
							<td>500mm</td>
							<td>550mm</td>
							<td>600mm</td>
							<td>650mm</td>

						</tr>
						</table>
					</div>

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
						<span class="bold">GV T.O.P Series</span> is a PAO-based, finest 100% synthetic engine oil that meets API's highest performance rating and European Standard, making it suitable for all models that use Gasoline, Diesel (including RV), and LPG as fuel.  In particular, it exhibits optimized performance for extending the engine oil exchange cycle, strengthening engine protection, improving fuel efficiency, and reducing exhaust gas emissions.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt">
							• Gasoline, Diesel, LPG car.<br>
							• Diesel vehicles equipped with DPF/CPF/TWC<br>
							• GDi: Gasoline Direct Injection Engine
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• US Standard: API SP<br>
							• Europe Standard: C2/C3
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table" style="width:100%;">
						<tr>
							<th>SAE  VISCOSITY / Performance<br>API & ACEA</th>
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
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> -->
				</div>
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
						<span class="bold">GV GOLD Series</span> is a 100% synthetic engine oil that satisfies API's highest performance rating and European Standard, ensuring excellent lubrication even in long-term use with high oxidation stability and shear stability, and excellent acceleration performance. It is a product that performs excellent performance with smooth driving stability.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt">
							• Gasoline, Diesel, LPG car.<br>
							• Diesel vehicles equipped with DPF/CPF/TWC.<br>
							• GDi: Gasoline Direct Injection Engine
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• US  Standard: API SN<br>
							• European Standard : C2/C3
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table" style="width:100%;">
						<tr>
							<th>SAE  VISCOSITY / Performance<br>API & ACEA</th>
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
						<span class="bold">GVS Series</span> is 100% synthetic engine oil, maximizing its performance to improve fuel efficiency, reduce noise, and maximize engine power. It meets the latest Standard of the American Petroleum Association, protects T-GDI engines, improves fuel efficiency, and It is a product specialized in anti-wear performance. Even if used for a long time, oil consumption is low, There is little change in viscosity, so it is suitable for driving vehicles under severe conditions.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt">
							• All types of Gasoline cars, LPG cars,<br>
							• Direct injection engine (T-GDi: Turbo Gasoline Direct Injection Engine)<br>
							• It keeps the engine clean and maintains the driving power of the engine.<br>
							• Fuel economy is improved, viscosity changes and oil consumption are small even in long-term use. Extend the oil change cycle.
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• US Standard : API SP, ILSAC GF-6
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr class="rowspan">
							<th rowspan="2">SAE  VISCOSITY / Performance<br>API & ACEA</th>
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
						<span class="bold">GV Series</span> is a synthetic engine oil that maximizes its performance to improve fuel efficiency, reduce noise, and maximize engine power. It meets the latest Standard of the American Petroleum Association and is specialized in T-GDI engine protection, fuel efficiency improvement, and wear prevention performance. Even after long use, oil consumption is low and there is little change in viscosity, making it suitable for driving vehicles under severe conditions.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt">
							• All types of Gasoline cars, LPG cars,<br>
							• Direct injection engine (T-GDi: Turbo Gasoline Direct Injection Engine)<br>
							• It keeps the engine clean and maintains the driving power of the engine.<br>
							• Fuel economy is improved, viscosity changes and oil consumption are small even in long-term use. 
							• Extend the oil change cycle.
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• US Standard : API SP, ILSAC GF-6
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr class="rowspan">
							<th rowspan="2">SAE  VISCOSITY / Performance<br>API & ACEA</th>
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
						<span class="bold">GVL Series</span> uses VHVI (Very High Visibility Index) advanced oil to maximize its performance to improve fuel efficiency, reduce noise, and enable maximum engine output. It meets the latest Standard of the American Petroleum Association and is specialized in improving fuel efficiency and preventing wear. Even if used for a long time, oil consumption is low, There is little change in viscosity, so it is suitable for driving vehicles under severe conditions.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt">
							• All types of Gasoline cars, LPG cars,<br>
							• It keeps the engine clean and maintains the driving power of the engine.<br>
							• Fuel economy is improved, viscosity changes and oil consumption are small even in long-term use.<br>
							• Extend the oil change cycle.<br>
							• Engine oil for four seasons.
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• US Standard : API SP, ILSAC GF-6
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr>
							<th>SAE  VISCOSITY / Performance<br>API & ACEA</th>
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
					<!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> -->

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
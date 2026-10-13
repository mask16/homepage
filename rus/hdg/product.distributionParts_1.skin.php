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
				<h1>Автомобильные<br>части </h1>
				<a class="his" href="<?=$host_url?>/product/distribution">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" /> Распределение
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Добавлена добавка к топливу двигателя (GV ZERO серии)</h1>
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
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionParts_1_img01.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Описания</h2>
					<p class="conBox-txt">
						Серия GV ZERO представляет собой продукт на основе ПАО и ESTER, передовое 100% синтетическое масло, и имеет отличную стабильность окисления при высоких температурах, что приводит к низкой декомпозиции или волатильности, поэтому имеет отличную вязкость удержания. Он может использоваться в широком диапазоне температур и относительно больше, чем обычная нефть. Это помогает улучшить смазку, создавая гладкую поверхность смазки.Это ультратонное (наноразмерное) покрытие частиц, которое имеет отличное проникновение и отличную компрессируемость.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title"> Приложения</h2>
						<p class="conBox-txt">
							• Снижение шума в двигателе. <br>
							• Для повышения комфорта езды.  <br>
							• Улучшение производительности.  <br>
							• Предотвращение старения.  <br>
							• Улучшение энергоэффективности.

						</p>
					</div>
					<!-- <div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• US Standard: API SP, SN<br>
							• European Standard: C2, C3, C5
						</p>
					</div> -->
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Типичные характеристики
					<div class="tableBox">
						<table class="conBox-table">
						<tr>
							<th>Категорияy</th>
							<th>ZERO 0</th>
							<th>ZERO 1</th>
							<th>ZERO 2</th>
						</tr>
						<tr>
							<td class="f">Эффект</td>
							<td>Noise reduction in the engine.<br>Improvement of output.<br>To enhance the ride comfort.<br>Output improvement Prevention of aging.</td>
							<td>Noise reduction in the engine.<br>Improvement of output.<br>To enhance the ride comfort.<br>Output improvement.</td>
							<td>Anti-oxidation of engine oil.<br>Clean dispersion.Noise reduction.<br>To prevent engine wear.Protecting the engine.</td>
						</tr>
						<tr>
							<td class="f">Ингредиент</td>
							<td>Group IV Synthetic oil.Si additive.</td>
							<td>Group V Synthetic oil.Organic molybdenum</td>
							<td>Group V Synthetic oil.Organic molybdenum</td>
						</tr>
						<tr>
							<td class="f">Производительность</td>
							<td>250mL</td>
							<td>300mL</td>
							<td>350mL</td>
						</tr>
						<tr>
							<td class="f">Стандартное использование</td>
							<td>4-6L of engine oil<br>The Standard bottle is 200mL.</td>
							<td>4-6L of engine oil<br>The Standard bottle is 300mL.</td>
							<td>4-6L of engine oil<br>The Standard bottle is 200mL.</td>
						</tr>
						<tr>
							<td class="f">Цикл использования</td>
							<td>25,000Km</td>
							<td>12,000~15,000Km</td>
							<td>20,000~30,000Km</td>
						</tr>
						<tr>
							<td class="f">Тип прикладного транспортного средства
							</td>
							<td>For Diesel / Gasoline / lPG.</td>
							<td>For Diesel / Gasoline / lPG.</td>
							<td>For Diesel / Gasoline / lPG.</td>
						</tr>
						</table>
					</div>
					<!-- <!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> --> -->

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
					<!-- <!-- <p class="conBox-txt2">※ 대표 성상은 최근의 평균시험로  제품성능에 이상이 없는 범위 내에서 차이가 있을 수 있습니다.</p> --> -->
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
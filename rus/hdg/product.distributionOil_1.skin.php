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
		<h3>Направление бизнеса</h3>
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
				<h1>Масла двигателя</h1>
				<a class="his" href="<?=$host_url?>/product/distribution">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" /> Распределение
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">ГОЛ Бензин ЭНГИН</h1>
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

					<h2 class="conBox-sub-title">описание</h2>
					<p class="conBox-txt">
						<span class="bold">GV PAO Series</span>это высокотехнологичное 100% синтетическое масло двигателя, которое соответствует самым высоким показателям производительности API и европейскому стандарту, включая бензин, Diesel (с RV), это подходящий продукт для самых лучших моделей всех транспортных средств, которые используют LPG в качестве топлива. В частности, он обеспечивает наилучшую защиту двигателя и отличную стабильность при движении на высоких скоростях.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Приложения</h2>
						<p class="conBox-txt">
							• Бензин, дизель, LPG автомобиль.<br>
							• Дизельные автомобили, оснащенные DPF/CPF/TWC.<br>
							• GDi: Бензолиновый двигатель прямого инъекции
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Преимущества</h2>
						<p class="conBox-txt">
							• Стандарт США: API SP, SN<br>
							• Европейский стандарт: C2, C3, C5
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Типичные характеристики</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr>
							<th>SAE  VISCOSITY / Performance<br>API & ACEA</th>
							<th>0W16<br>SP, ILSAC GF-6B</th>
							<th>0W20<br>SP, ILSAC GF-6A</th>
							<th>0W20 SP/C5<br>(DPF)</th>
							<th>0W30 SP/C2<br>(DPF)</th>
							<th>0W40 SP/C3<br>(DPF)</th>
						</tr>
						<tr>
							<td class="f">Указанная гравитация (15/4°C)</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 40°C, cSt</td>
							<td>35.5</td>
							<td>43.0</td>
							<td>42.96</td>
							<td>62.9</td>
							<td>90.0</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 100°C, cSt</td>
							<td>6.95</td>
							<td>8.19</td>
							<td>8.22</td>
							<td>11.2</td>
							<td>14.00</td>
						</tr>
						<tr>
							<td class="f">Индекс вискости</td>
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
							<td class="f">Порошная точка, ℃</td>
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

					<h2 class="conBox-sub-title">описание</h2>
					<p class="conBox-txt">
						<span class="bold">GV T.O.P Series</span>это высококачественное 100% синтетическое масло двигателя на основе ПАО, которое соответствует высоким показателям производительности API и европейскому стандарту, что делает его подходящим для всех моделей, использующих бензин, дизель (включая RV) и LPG в качестве топлива.  В частности, она демонстрирует оптимизированную производительность для расширения цикла обмена маслами двигателя, укрепления защиты двигателя, повышения энергоэффективности и снижения выбросов выхлопных газов.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Приложения</h2>
						<p class="conBox-txt">
							• Бензин, дизель, LPG автомобиль.<br>
							• Дизельные автомобили, оснащенные DPF/CPF/TWC.<br>
							• GDi: Бензолиновый двигатель прямого инъекции
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Преимущества</h2>
						<p class="conBox-txt">
							• Стандарт США : API SP<br>
							• Европа стандарт : C2/C3
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Типичные характеристики</h2>
					<div class="tableBox">
						<table class="conBox-table" style="width:100%;">
						<tr>
							<th>SAE  VISCOSITY / Performance<br>API & ACEA</th>
							<th>5W30<br>SP, C2/C3</th>
							<th>5W40<br>SN, C3</th>
						</tr>
						<tr>
							<td class="f">Указанная гравитация (15/4°C)</td>
							<td>0.852</td>
							<td>0.853</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 40°C, cSt</td>
							<td>68.5</td>
							<td>90.1</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 100°C, cSt</td>
							<td>11.1</td>
							<td>14.2</td>
						</tr>
						<tr>
							<td class="f">Индекс вискости</td>
							<td>160</td>
							<td>163</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>200</td>
							<td>>210</td>
						</tr>
						<tr>
							<td class="f">Порошная точка, ℃</td>
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

					<h2 class="conBox-sub-title">описание</h2>
					<p class="conBox-txt">
						<span class="bold">GV GOLD Series</span>это 100% синтетическое масло двигателя, которое удовлетворяет самым высоким показателям производительности API и европейскому стандарту, обеспечивая отличную смазку даже в долгосрочном использовании с высокой стабильностью окисления и вышивной стабильностью, а также отличную производительность ускорения. Это продукт, который выполняет отличные показатели с гладкой устойчивостью вождения.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Приложения</h2>
						<p class="conBox-txt">
							• Бензин, дизель, LPG автомобиль.<br>
							• Дизельные автомобили, оснащенные DPF/CPF/TWC.<br>
							• GDi: Бензолиновый двигатель прямого инъекции
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Преимущества</h2>
						<p class="conBox-txt">
							• Стандарт США: API SN<br>
							• Европейский стандарт C2/C3
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Типичные характеристики</h2>
					<div class="tableBox">
						<table class="conBox-table" style="width:100%;">
						<tr>
							<th>SAE  VISCOSITY / Performance<br>API & ACEA</th>
							<th>5W30</th>
							<th>5W40</th>
						</tr>
						<tr>
							<td class="f">Указанная гравитация (15/4°C)</td>
							<td>0.853</td>
							<td>0.853</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 40°C, cSt</td>
							<td>68.0</td>
							<td>91.3</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 100°C, cSt</td>
							<td>10.9</td>
							<td>14.6</td>
						</tr>
						<tr>
							<td class="f">Индекс вискости</td>
							<td>151</td>
							<td>167</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>210</td>
							<td>>210</td>
						</tr>
						<tr>
							<td class="f">Порошная точка, ℃</td>
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

					<h2 class="conBox-sub-title">описание</h2>
					<p class="conBox-txt">
						Серия GVS представляет собой 100% синтетическое масло двигателя, максимально повышая свою производительность для повышения энергоэффективности, снижения шума и максимальной мощности двигателя. Он соответствует последнему стандарту Американской нефтяной ассоциации, защищает двигатели T-GDI, повышает экономию топлива, и это продукт, специализирующийся на производительности анти-износа. Даже если использовать в течение длительного времени, потребление нефти низкое, Есть мало изменений в вязкости, поэтому он подходит для вождения автомобилей в тяжелых условиях.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Приложения</h2>
						<p class="conBox-txt">
							• Все виды бензовых автомобилей, LPG автомобилей,<br>
							• Прямой двигатель для инъекции (T-GDi: Turbo Gasoline Direct Injection Engine)<br>
							• Она поддерживает чистоту двигателя и рабочую силу двигателя.<br>
							• Улучшается топливная экономия, изменения вязкости и потребление нефти незначительны даже в долгосрочном использовании. Расширение цикла изменения масла.
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Преимущества</h2>
						<p class="conBox-txt">
							Стандарт США : API SP, ILSAC GF-6

						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Типичные характеристики</h2>
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
							<td class="f">Указанная гравитация (15/4°C)</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.86</td>
							<td>0.86</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 40°C, cSt</td>
							<td>46.4</td>
							<td>48.9</td>
							<td>54.7</td>
							<td>60.1</td>
							<td>84.0</td>
							<td>114.7</td>
							<td>97.6</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 100°C, cSt</td>
							<td>8.8</td>
							<td>8.5</td>
							<td>10.2</td>
							<td>10.2</td>
							<td>14.0</td>
							<td>18.0</td>
							<td>15.1</td>
						</tr>
						<tr>
							<td class="f">Индекс вискости</td>
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
							<td class="f">Порошная точка, ℃</td>
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

					<h2 class="conBox-sub-title">описание</h2>
					<p class="conBox-txt">
						Серия GV представляет собой синтетическое масло двигателя, которое максимально повышает производительность для повышения энергоэффективности, снижения шума и максимальной мощности двигателя. Он отвечает последнему стандарту Американской нефтяной ассоциации и специализируется на защите двигателей T-GDI, повышении энергоэффективности и производительности по износу. Даже после длительного использования, потребление масла низкое и мало изменений в вязкости, что делает его подходящим для вождения автомобилей в тяжелых условиях.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Приложения</h2>
						<p class="conBox-txt">
							• Все виды бензовых автомобилей, LPG автомобилей,<br>
							• Прямой двигатель для инъекции (T-GDi: Turbo Gasoline Direct Injection Engine)<br>
							• Она поддерживает чистоту двигателя и рабочую силу двигателя.<br>
							• Улучшается топливная экономия, изменения вязкости и потребление нефти незначительны даже в долгосрочном использовании. <br>
							• Расширение цикла изменения нефти.

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Преимущества</h2>
						<p class="conBox-txt">
							• Стандарт США : API SP, ILSAC GF-6
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Типичные характеристики</h2>
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
							<td class="f">Указанная гравитация (15/4°C)</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.87</td>
							<td>0.87</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 40°C, cSt</td>
							<td>63.8</td>
							<td>84.5</td>
							<td>63.7</td>
							<td>102.7</td>
							<td>158.0</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 100°C, cSt</td>
							<td>10.7</td>
							<td>13.8</td>
							<td>10.1</td>
							<td>15.0</td>
							<td>17.6</td>
						</tr>
						<tr>
							<td class="f">Индекс вискости</td>
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
							<td class="f">Порошная точка, ℃</td>
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

					<h2 class="conBox-sub-title">описание</h2>
					<p class="conBox-txt">
						Серия GVL использует передовое масло VHVI (Very High Visibility Index), чтобы максимально повысить эффективность работы, повысить экономичность топлива, снизить шум и обеспечить максимальную производительность двигателя. Он соответствует последнему стандарту Американской нефтяной ассоциации и специализируется на повышении энергоэффективности и предотвращении износа. Даже если использовать в течение длительного времени, потребление нефти низкое, Есть мало изменений в вязкости, поэтому он подходит для вождения автомобилей в тяжелых условиях.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Приложения</h2>
						<p class="conBox-txt">
							• Все виды бензовых автомобилей, LPG автомобилей,<br>
							• Она поддерживает чистоту двигателя и рабочую силу двигателя.<br>
							• Улучшается топливная экономия, изменения вязкости и потребление нефти незначительны даже в долгосрочном использовании. Расширение цикла изменения масла. <br>
							• Масло двигателя на четыре сезона.<br>

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Преимущества</h2>
						<p class="conBox-txt">
							• Стандарт США : API SL, ILSAC GF-3
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Типичные характеристики</h2>
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
							<td class="f">Указанная гравитация (15/4°C)</td>
							<td>0.86</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.85</td>
							<td>0.87</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 40°C, cSt</td>
							<td>46.0</td>
							<td>60.0</td>
							<td>63.5</td>
							<td>112.0</td>
							<td>112.0</td>
							<td>158.0</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 100°C, cSt</td>
							<td>8.5</td>
							<td>10.0</td>
							<td>10.1</td>
							<td>14.6</td>
							<td>14.6</td>
							<td>17.6</td>
						</tr>
						<tr>
							<td class="f">Индекс вискости</td>
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
							<td class="f">Порошная точка, ℃</td>
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
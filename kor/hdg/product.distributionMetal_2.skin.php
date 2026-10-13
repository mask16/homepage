<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>
.distribution ul.conBox-menu2 li{ float:left; /* width:205px; */width:30%; height:55px; margin:0px 9px 10px 0px; background-color:#e5e5e5; line-height:55px; text-align:center; font-size:24px; font-weight:900; color:#999; cursor:pointer; }
@media(max-width:980px){
	
	.distribution ul.conBox-menu2 li{ width:100%; margin:0px 0% 10px 0px; }
	.distribution ul.conBox-menu2 li.f{ margin-left:0; }
	
	.distribution .conBox-in .view-img img{ width:100%; margin-right:0; margin-bottom:20px; }
	.distribution .conBox-in-left{ width:100%; margin-right:0; margin-bottom:40px; }
	.distribution .conBox-in .pc{ display:none; }
	.distribution .conBox-in .mo{ display:block; }
}

</style>
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
				<h1>금속가공유</h1>
				<a class="his" href="<?=$host_url?>/product/distribution">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" /> 윤활유 메인으로
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">방청유</h1>
					<hr class="line0" />

					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionMetal_2_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionMetal_2_img02.png" />
					</div>
					<hr class="line0" />
					<p class="conBox-txt">
						녹이란 보통 습기, 산소, 무기 염, 유기산, 황 산화물 등의 부식인자에 의하여 금속이 산화하는 것을 말하며, 방청유는 이러한 발청 인자를 차단하여, 금속을 보호하여 부식을 방지하는 역할을 하는 윤활유를 말합니다.<br>
						방청유의 종류는 용제 희석형, 윤활형(오일형), Petrolatum, 지문 제거형, 수용성 방청유, 방청 WAX로 구분됩니다.



					</p>
					<hr class="line0" />

					<h2 class="conBox-sub-title">방청유 사용 목적</h2>
					<p class="conBox-txt">
						• 내수 및 수출용에 따른 분류 / 방청유 도포 후, 후공정 확인 (세척 유무)
					</p>
					<hr class="line0" />
					<h2 class="conBox-sub-title">방청유 선정 방법</h2>
					<p class="conBox-txt">
						• 소재 : 강철, 주철, 아연, 구리, 알루미늄 외<br>
						•  녹 방지 기간 : 실내 및 실외 보관에 대한 녹 방지 기간<br>
						•  소재 세정 : 전체 공정에서, 윤활유 제품에 대한 정보 확인<br>
						•  방청유 도포 방법 : 침적법, 스프레이법, 붓칠법<br>
						•  포장 방법 : 접촉, 비 접촉 방법, 포장 재료<br>
						•  저장 : 실내, 야외 포장<br>
						•  공정 : 전공정의 윤활유 사용 (가공 및 세척)
					</p>

				<ul class="conBox-menu2">
					<li class="on" t="1">GV ANTIRUST</li>
					<li t="2">GV W-ANTIRUST</li>

				</ul>
				<hr class="both" />
				
				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<h2 class="conBox-sub-title">용제 희석형 방청유</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<thead>
						  <tr>
							<th rowspan="2">Product</th>
							<th rowspan="2">S.G(15/4°C)<br>(15/4℃)</th>
							<th>VISCOSITY</th>
							<th rowspan="2">F.PCOC<br>(℃)</th>
							<th>Saltspray</th>
							<th rowspan="2">Wet[hrs]</th>
							<th rowspan="2">Uses and Characteristics</th>
						  </tr>
						  <tr>
							<th>40℃,mm2/s</th>
							<th>[5%, hrs]</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td class="f">GVANTIRUST S-100</td>
							<td>0.81</td>
							<td>1.936</td>
							<td>R.T</td>
							<td>5</td>
							<td>120</td>
							<td>Anti-rusting for automobile parts</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST ZDF 101</td>
							<td>0.778</td>
							<td>1.882</td>
							<td>50</td>
							<td>3</td>
							<td>90</td>
							<td>Under-Coating for automobile<br>&amp; farmmachine, NP-1</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST ZDF 301</td>
							<td>0.807</td>
							<td>1.719</td>
							<td>50</td>
							<td>4</td>
							<td>120</td>
							<td>Good Water replace property,<br>Anti-rusting for machine<br>fine-parts,NP-3</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-430N</td>
							<td>0.778</td>
							<td>1.677</td>
							<td>48</td>
							<td>8</td>
							<td>240</td>
							<td>Automotive press panel,<br>general presspanel, NP-3</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST ZDF 201</td>
							<td>0.860</td>
							<td>1.250</td>
							<td>65</td>
							<td>6</td>
							<td>180</td>
							<td>Anti-rusting for automobile parts</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-12H</td>
							<td>0.808</td>
							<td>2.700</td>
							<td>74</td>
							<td>12</td>
							<td>360</td>
							<td>LevellingOil</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-15SVA</td>
							<td>0.760</td>
							<td>0.810</td>
							<td>R.T</td>
							<td>15</td>
							<td>540</td>
							<td>Anti-rusting for automobile parts</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-30TPML</td>
							<td>0.7900</td>
							<td>1.380</td>
							<td>37</td>
							<td>20</td>
							<td>720</td>
							<td rowspan="3">Sintering Anti-Rusting oil<br>(Sintering,Sizing, After barrel)</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-1000S</td>
							<td>0.802</td>
							<td>1.737</td>
							<td>33</td>
							<td>24</td>
							<td>720</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-30TPM</td>
							<td>0.7919</td>
							<td>1.423</td>
							<td>42</td>
							<td>24</td>
							<td>720</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-3625N</td>
							<td>0.793</td>
							<td>1.334</td>
							<td>44</td>
							<td>36</td>
							<td>360</td>
							<td>Anti-rusting for automobile parts<br>(indoor 3month)</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-480KSR</td>
							<td>0.82</td>
							<td>4.420</td>
							<td>122</td>
							<td>48</td>
							<td>720</td>
							<td>Anti-rusting for automobile parts<br>(indoor4month)</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-48N</td>
							<td>0.809</td>
							<td>2.446</td>
							<td>44</td>
							<td>48</td>
							<td>720</td>
							<td>Anti-rusting for automobile parts<br>(indoor 6month)</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-4825(N)</td>
							<td>0.827</td>
							<td>2.450</td>
							<td>44</td>
							<td>48</td>
							<td>720</td>
							<td>Anti-rusting oil after Forging</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST DW-40S</td>
							<td>0.799</td>
							<td>2.286</td>
							<td>37</td>
							<td>48</td>
							<td>480</td>
							<td>Anti-rusting for automobile parts<br>(indoor 3month)</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-1800S-2</td>
							<td>0.750</td>
							<td>1.363</td>
							<td>50</td>
							<td>48</td>
							<td>480</td>
							<td>Anti-rusting for automobile parts<br>(indoor 3month)</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-215YS</td>
							<td>0.81</td>
							<td>2.400</td>
							<td>42</td>
							<td>72</td>
							<td>720</td>
							<td>Anti-rusting for automobile parts<br>(indoor 6month)</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-302D</td>
							<td>0.852</td>
							<td>8.400</td>
							<td>45</td>
							<td>100</td>
							<td>1000</td>
							<td>Anti-rusting for automobile parts<br>(indoor 6-12month)</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-273D</td>
							<td>0.822</td>
							<td>2.63</td>
							<td>60</td>
							<td>126</td>
							<td>3,780</td>
							<td rowspan="3">Long period Anti-Rusting Oil,<br>for 12months indoor</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-365D</td>
							<td>0.802</td>
							<td>1.58</td>
							<td>60</td>
							<td>168</td>
							<td>5,040</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-3060S</td>
							<td>0.808</td>
							<td>2.20</td>
							<td>60</td>
							<td>168</td>
							<td>5,040</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-4050S</td>
							<td>0.808</td>
							<td>2.20</td>
							<td>60</td>
							<td>336</td>
							<td>10,080</td>
							<td>Long period Anti-Rusting Oil,<br>for 24months indoor</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-5060S</td>
							<td>0.808</td>
							<td>2.20</td>
							<td>60</td>
							<td>506</td>
							<td>15,180</td>
							<td>Long period Anti-Rusting Oil,<br>for 36months indoor</td>
						  </tr>
						  <tr>
							<td class="f">GVANTIRUST P-1095D</td>
							<td>0.808</td>
							<td>2.20</td>
							<td>60</td>
							<td>506</td>
							<td>15,180</td>
							<td>Long period Anti-Rusting Oil,<br>for 36months indoor</td>
						  </tr>
						</tbody>
						</table>

					</div>

					<hr class="both" />
					<hr class="line" />

				<h2 class="conBox-sub-title">오일형 방청유</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<thead>
						  <tr>
							<th rowspan="2">Product</th>
							<th rowspan="2">S.G(15/4°C)<br>(15/4℃)</th>
							<th>VISCOSITY</th>
							<th rowspan="2">F.P COC<br>(℃)</th>
							<th>Saltspray</th>
							<th rowspan="2">Wet[hrs]</th>
							<th rowspan="2">Uses and Characteristics</th>
						  </tr>
						  <tr>
							<th>40℃, mm2/s</th>
							<th>[5%  hrs]</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td class="f">GV ANTIRUST ZKF</td>
							<td>0.881</td>
							<td>12.92 </td>
							<td>158</td>
							<td>5</td>
							<td>150</td>
							<td>Non-stain,NP-7</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST ZKF-W</td>
							<td>0.784 </td>
							<td>1.29 </td>
							<td>51</td>
							<td>5</td>
							<td>150</td>
							<td>Anti-rustingfor automobile parts</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST ZDF 701</td>
							<td>0.905</td>
							<td>35.00 </td>
							<td>200</td>
							<td>4</td>
							<td>120</td>
							<td>Gearbox,Slideway,GoodNon-stain,NP-7</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST ZDF 801</td>
							<td>0.870</td>
							<td>35.62 </td>
							<td>222</td>
							<td>4</td>
							<td>120</td>
							<td>ForGeneral machine <br>
						&amp; Each process, NP-8</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST ZDF 901</td>
							<td>0.880</td>
							<td>35.00 </td>
							<td>160</td>
							<td>4</td>
							<td>120</td>
							<td>Formetal parts &amp; Round bar <br>&amp; Coating parts, NP-9</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST ZKF-8</td>
							<td>0.905</td>
							<td>12.00 </td>
							<td>200</td>
							<td>5</td>
							<td>150</td>
							<td>Non-stain,NP-8</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST ZKF-9</td>
							<td>0.905</td>
							<td>13.00 </td>
							<td>200</td>
							<td>5</td>
							<td>150</td>
							<td>Non-stain,NP-9</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST P-1270Z</td>
							<td>0.897</td>
							<td>12.77 </td>
							<td>146</td>
							<td>12</td>
							<td>200</td>
							<td rowspan="2"> Zn (indoor 12month) </td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST P-1290Z</td>
							<td>0.897</td>
							<td>13.00 </td>
							<td>146</td>
							<td>12</td>
							<td>200</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST P-1270CR</td>
							<td>0.897</td>
							<td>14.00 </td>
							<td>146</td>
							<td>12</td>
							<td>200</td>
							<td> CR(indoor 12month)</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST ZKF-200S</td>
							<td>0.905</td>
							<td>11.99 </td>
							<td>200</td>
							<td>24</td>
							<td>720</td>
							<td>Non-stain,NP-9</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST 130R</td>
							<td>0.87</td>
							<td>13.0</td>
							<td>150</td>
							<td>24</td>
							<td>500</td>
							<td rowspan="3">Anti-Rusting&amp; Lubricity, <br>
							  For machine parts &amp; steel plates</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST 150R</td>
							<td>0.88</td>
							<td>15.0</td>
							<td>130</td>
							<td>24</td>
							<td>720</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST 300R</td>
							<td>0.87</td>
							<td>30.0</td>
							<td>130</td>
							<td>24</td>
							<td>720</td>
						  </tr>
						  <tr>
							<td class="f">GV ANTIRUST P-7930A</td>
							<td>0.893 </td>
							<td>87.20 </td>
							<td>240</td>
							<td>36</td>
							<td>360</td>
							<td>Wire-drawnproducts and parts, etc. <br>
							  (metal parts and round bars, <br>
							  plated parts rustprevention, NP-9)</td>
						  </tr>
						</tbody>
						</table>
					</div>




				</div>
				<!--//conBox-in-1 -->
				
				<!-- conBox-in-2 -->
				<div class="conBox-in conBox-in-2" style="display:none;">
					<h2 class="conBox-sub-title">수용성 방청유</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<thead>
						  <tr>
							<th>Product</th>
							<th>Specific Gravity<br>
							  (15/4℃)</th>
							<th>pH (20%)</th>
							<th>Dilution</th>
							<th>Uses and Characteristics</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td class="f">GVANTI-RUST 1000WI</td>
							<td>1.03</td>
							<td>10.3</td>
							<td>20-30:1</td>
							<td rowspan="2">short-termrust prevention indoors <br>
							  for steel plate and steel pipe</td>
						  </tr>
						  <tr>
							<td class="f">GVANTI-RUST 200WI</td>
							<td>1.08</td>
							<td>9.8</td>
							<td>10-30:1</td>
						  </tr>
						  <tr>
							<td class="f">GVANTI-RUST 50WI</td>
							<td>1.15</td>
							<td>9.7</td>
							<td>20-30:1</td>
							<td>short-termrust prevention in baths of general steel,<br>
							  carbon steel, alloy steel andcopper</td>
						  </tr>
						  <tr>
							<td class="f">GVANTI-RUST WI-CU</td>
							<td>1.04</td>
							<td>8.1</td>
							<td>200-300:1</td>
							<td>Copperprocessing process, water-soluble rust inhibitor</td>
						  </tr>
						  <tr>
							<td class="f">GVANTI-RUST 12W</td>
							<td>1.053</td>
							<td>7.6</td>
							<td>10-30:1</td>
							<td rowspan="3">middle-termrust prevention in baths of general steel,<br>
							  carbon steel, alloy steel andcopper</td>
						  </tr>
						  <tr>
							<td class="f">GVANTI-RUST 15W</td>
							<td>1.049</td>
							<td>7.54</td>
							<td>10-30:1</td>
						  </tr>
						  <tr>
							<td class="f">GVANTI-RUST 24W</td>
							<td>1.116</td>
							<td>8.2</td>
							<td>10-30:1</td>
						  </tr>
						  <tr>
							<td class="f">GVANTI-RUST 48W</td>
							<td>1.117</td>
							<td>6.8</td>
							<td>10-30:1</td>
							<td>long-termrust prevention in baths of general steel,<br>
							  carbon steel, alloy steel andcopper</td>
						  </tr>
						</tbody>
						</table>
					</div>

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
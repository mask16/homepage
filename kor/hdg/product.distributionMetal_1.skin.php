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
				<h1 class="conBox-title">절삭유</h1>
					<hr class="line0" />

					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionMetal_1_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionMetal_1_img02.png" />
					</div>
					<hr class="line0" />
					<p class="conBox-txt">
						절삭유는 금속 가공유로  절삭가공 시 공구수명 향상, 정밀도 향상, 가공속도의 상승을 위해 공구와 소재 사이에 공급 하여 사용하는 윤활유입니다.<br><br>절삭유는 가공의 특성에 따른 다양한 제품이 제조 되고 있습니다. 절삭유에는 가공 조건 및 현장의 특성에 부합하도록 각종 첨가제를 포함하고 있으며이에 따라 절삭유의 종류와 특성이 결정 되게 됩니다.<br><br>절삭유는 크게 수용성 및 비 수용성 제품 으로 구분할 수 있습니다.  수용성 절삭유는 제품은 Emulsion type, Semi-synthetic type, Synthetic type으로 분류되고 있으며. 비수용성 절삭유는 극압 첨가제 함유 여부 및 사용 용도에 따라 구분할 수 있습니다.


					</p>

				<ul class="conBox-menu2">
					<li class="on" t="1">비수용성</li>
					<li t="2">수용성</li>

				</ul>
				<hr class="both" />
				
				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<h2 class="conBox-sub-title">유성계 절삭유 (비염소계)</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<thead>
						  <tr>
							<th>Product</th>
							<th>Specific gravity<br>(15/4℃)</th>
							<th>Kinematic viscosity<br>(40 ℃, cSt)</th>
							<th>Flash Point<br>(COC, ℃)</th>
							<th>Copper corrosion test<br>(100 ℃ /1hr)</th>
							<th>Material</th>
							<th>Usesand Characteristics</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td class="f">GV CUT 640L</td>
							<td>0.88</td>
							<td>7.50</td>
							<td>150</td>
							<td>1a</td>
							<td>Al, Cu</td>
							<td style="text-align:left">AluminumCutting</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 660L3</td>
							<td>0.870 </td>
							<td>12.00</td>
							<td>150</td>
							<td>1a</td>
							<td>Al, Cu</td>
							<td style="text-align:left">Copperand non-ferrous machining<br>(cutting, turning, milling, hole machining, cutting)</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 670CN</td>
							<td>0.870 </td>
							<td>12.50</td>
							<td>150</td>
							<td>1a</td>
							<td>Al, Cu</td>
							<td style="text-align:left">Aluminum &amp; Copper Cutting</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 510R</td>
							<td>0.850 </td>
							<td>18.50</td>
							<td>190</td>
							<td>1a</td>
							<td>Al, Cu</td>
							<td style="text-align:left">Aluminum &amp; Copper Cutting</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 508HO</td>
							<td>0.890 </td>
							<td>29.50</td>
							<td>190</td>
							<td>1a</td>
							<td>Al, Cu, Sn</td>
							<td style="text-align:left">Aluminum &amp; Copper % Tin Cutting</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 101</td>
							<td>0.820 </td>
							<td>7.20</td>
							<td>164</td>
							<td>1a</td>
							<td>Al, Cu, Steel</td>
							<td style="text-align:left">Excellent Extreme Pressure resistance&amp; Lubricity, </td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 604</td>
							<td>0.808 </td>
							<td>4.20</td>
							<td>94</td>
							<td>1a</td>
							<td>Al, Cu</td>
							<td style="text-align:left">Cutting of steel, cast iron andnon-ferrous metals,</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 609</td>
							<td>0.820 </td>
							<td>7.20</td>
							<td>164</td>
							<td>1a</td>
							<td>Al, Cu, Steel</td>
							<td style="text-align:left">Cutting of non-ferrous metals,colorless and odorless,<br>comfortable workability, excellent needle cleaningproperties<br>(use anti-rust oil according to the process after use)</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 615</td>
							<td>0.880 </td>
							<td>14.50</td>
							<td>182</td>
							<td>1a</td>
							<td>Al, Cu, Fe</td>
							<td style="text-align:left">Heavy cutting of non-ferrous metals,almost no skin trouble</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 615H</td>
							<td>0.852 </td>
							<td>16.00</td>
							<td>188</td>
							<td>1a</td>
							<td>Al, Cu,non-ferrous</td>
							<td style="text-align:left">Heavycutting of non-ferrous metals, almost no skin trouble</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 615HJ</td>
							<td>0.859 </td>
							<td>18.30</td>
							<td>180</td>
							<td>1a</td>
							<td>Al,Cu, non-ferrous</td>
							<td style="text-align:left">Heavy cutting of non-ferrous metals,almost no skin trouble</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 622</td>
							<td>0.900 </td>
							<td>22.50</td>
							<td>188</td>
							<td>1a</td>
							<td>Al, Cu</td>
							<td rowspan="2" style="text-align:left">High-speed cutting of all metals,excellent<br>workability without odor generation</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 622W</td>
							<td>0.832 </td>
							<td>13.60</td>
							<td>198</td>
							<td>1a</td>
							<td>Al,Cu, Steel</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 622H</td>
							<td>0.890 </td>
							<td>22.50</td>
							<td>195</td>
							<td>1a</td>
							<td>Al,Cu, Steel</td>
							<td style="text-align:left">Steel, non-ferrous CNC lathe work, goodoxidation stability</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 632</td>
							<td>0.890 </td>
							<td>32.50</td>
							<td>195</td>
							<td>1a</td>
							<td>Al,Cu, non-ferrous</td>
							<td style="text-align:left">Steel, non-ferrous CNC lathe work, goodoxidation stability</td>
						  </tr>
						</tbody>
						</table>
					</div>

					<hr class="both" />
					<hr class="line" />



					<h2 class="conBox-sub-title">염화계 절삭유</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<thead>
						  <tr>
							<th>Product</th>
							<th>Specific gravity<br>(15/4℃)</th>
							<th>Kinematic viscosity<br>(40 ℃, cSt)</th>
							<th>Flash Point<br>(COC, ℃)</th>
							<th>Copper corrosion test<br>(100 ℃ /1hr)</th>
							<th>Material</th>
							<th>Usesand Characteristics</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td class="f">GV CUT 750L</td>
							<td>0.908</td>
							<td>6.50</td>
							<td>130</td>
							<td>1</td>
							<td>Al, Cu,non-ferrous</td>
							<td style="text-align:left">Al, carbon steel engine parts</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 750J</td>
							<td>0.844</td>
							<td>15.73</td>
							<td>162</td>
							<td>1</td>
							<td>Al, Cu,non-ferrous</td>
							<td style="text-align:left">Al,carbon steel engine parts</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 745B</td>
							<td>0.87</td>
							<td>12.00</td>
							<td>150</td>
							<td>1</td>
							<td>Al, Cu,non-ferrous</td>
							<td rowspan="3" style="text-align:left"> Al, Steel Grinding</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 745ES</td>
							<td>0.870 </td>
							<td>12.00</td>
							<td>150</td>
							<td>1</td>
							<td>Al, Cu,non-ferrous</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 745S</td>
							<td>0.880 </td>
							<td>12.00</td>
							<td>150</td>
							<td>1</td>
							<td>Al, Cu,non-ferrous</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 770LC</td>
							<td>0.900 </td>
							<td>17.50</td>
							<td>160</td>
							<td>1</td>
							<td>Al, Cu,non-ferrous</td>
							<td style="text-align:left">Milling, Drilling, Boring</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 780SP</td>
							<td>0.896 </td>
							<td>18.90</td>
							<td>160</td>
							<td>1</td>
							<td>Al, Cu,non-ferrous</td>
							<td style="text-align:left">Milling,Drilling, Boring</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 790LC</td>
							<td>0.890 </td>
							<td>24.00</td>
							<td>158</td>
							<td>1a/4c</td>
							<td>Al, Steel</td>
							<td style="text-align:left">Milling,Drilling, Boring</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 795LC</td>
							<td>0.880 </td>
							<td>30.00</td>
							<td>210</td>
							<td>1</td>
							<td>Al, Cu,non-ferrous</td>
							<td style="text-align:left">Hobbing, Reamer</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 490L</td>
							<td>0.870 </td>
							<td>23.60</td>
							<td>208</td>
							<td>1a</td>
							<td>Al, Cu,non-ferrous</td>
							<td style="text-align:left">AlCNC Machining</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 704</td>
							<td>0.840 </td>
							<td>4.00</td>
							<td>105</td>
							<td>1a</td>
							<td>Al, Cu,non-ferrous</td>
							<td style="text-align:left">Milling,Drilling, Boring</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 710H</td>
							<td>0.890 </td>
							<td>9.50</td>
							<td>162</td>
							<td>1a</td>
							<td>Al, Cu,non-ferrous</td>
							<td rowspan="2" style="text-align:left">Milling,Drilling, Boring</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 715</td>
							<td>0.890 </td>
							<td>14.50</td>
							<td>162</td>
							<td>1a</td>
							<td>Al, Steel</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 715H</td>
							<td>0.854 </td>
							<td>12.92</td>
							<td>188</td>
							<td>1a</td>
							<td>Al, Steel</td>
							<td style="text-align:left">Drillingand milling of free-cutting steel, excellent lubricity</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 722</td>
							<td>0.910 </td>
							<td>22.50</td>
							<td>185</td>
							<td>1a</td>
							<td>Al, Cu, Steel, Sus</td>
							<td style="text-align:left">BROCHINGprocessing of heat-resistant steel, extending tool life</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 722W</td>
							<td>0.904 </td>
							<td>16.06</td>
							<td>154</td>
							<td>1a</td>
							<td>Al, Cu, Steel, Sus</td>
							<td style="text-align:left">BROCHINGprocessing of heat-resistant steel, extending tool life</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 722H</td>
							<td>0.900 </td>
							<td>22.50</td>
							<td>190</td>
							<td>1a</td>
							<td>Al, Cu, Steel, Sus</td>
							<td style="text-align:left">BROCHINGprocessing of heat-resistant steel, extending tool life</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 732</td>
							<td>0.900 </td>
							<td>32.50</td>
							<td>190</td>
							<td>1a</td>
							<td>Al, Cu, Steel, Sus</td>
							<td style="text-align:left">Steelgear hobbing,good lubricity</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 732H</td>
							<td>0.910 </td>
							<td>32.50</td>
							<td>195</td>
							<td>1a</td>
							<td>Al, Cu, Steel, Sus</td>
							<td style="text-align:left">Heavycutting of special steel, less oil mist</td>
						  </tr>
						</tbody>
						</table>
					</div>

					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">염화유화계(활성)</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<thead>
						  <tr>
							<th>Product</th>
							<th>Specific gravity<br>(15/4℃)</th>
							<th>Kinematic viscosity<br>(40 ℃, cSt)</th>
							<th>Flash Point<br>(COC, ℃)</th>
							<th>Copper corrosion test<br>(100 ℃ /1hr)</th>
							<th>Material</th>
							<th>Usesand Characteristics</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td class="f">GVCUT 740FSL</td>
							<td>0.906</td>
							<td>10.50</td>
							<td>147</td>
							<td>4</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">BTA for General &amp; Alloy Steels,Grinding &amp; Boring, Excellent Extreme pressure resistance &amp; Lubricity</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT 745FSL</td>
							<td>0.9078</td>
							<td>17.50</td>
							<td>150</td>
							<td>4</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">BTA for General &amp; Alloy Steels,Grinding &amp; Boring</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT 765FSL</td>
							<td>0.900</td>
							<td>24.00</td>
							<td>160</td>
							<td>4</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Excellent Extreme Pressure resistance&amp; Lubricity, Suitable for Broaching &amp; Tapping &amp; Reaming</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT 775FSL</td>
							<td>0.910</td>
							<td>16.50</td>
							<td>160</td>
							<td>4</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Chaser Processing</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT 785FSL</td>
							<td>0.890</td>
							<td>27.50</td>
							<td>190</td>
							<td>4</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">BTA for General &amp; Alloy Steels,Grinding &amp; Boring</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT 231LS</td>
							<td>0.928</td>
							<td>26.20</td>
							<td>205</td>
							<td>4b</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Excellent Extreme Pressure resistance&amp; Lubricity, Suitable for Broaching &amp; Tap- ping &amp; Reaming</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT 110FSL</td>
							<td>0.890</td>
							<td>44.50</td>
							<td>210</td>
							<td>4</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Forming Nut Oils</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT 905HM</td>
							<td>0.819</td>
							<td>5.40</td>
							<td>102</td>
							<td>4a</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Hobbing,Shaving, Milling, Fine Grinding</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT 915</td>
							<td>0.891</td>
							<td>17.67</td>
							<td>154</td>
							<td>4a</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Gun Drill, Tapping, Milling, Longlife-time of tools</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT HC-918DS</td>
							<td>0.907</td>
							<td>18.00</td>
							<td>160</td>
							<td>4a</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Gun Drill, Tapping, Milling, Longlife-time of tools</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT HC-920CNC(W)</td>
							<td>0.898</td>
							<td>18.00</td>
							<td>162</td>
							<td>4a</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Gun Drill, Tapping, Milling, Longlife-time of tools</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT 922</td>
							<td>0.908</td>
							<td>22.00</td>
							<td>190</td>
							<td>4a</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Tapping, Boring, Heavy Cutting forSpecial Steels &amp; Alloy steels</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT 932</td>
							<td>0.910</td>
							<td>32.00</td>
							<td>200</td>
							<td>4a</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Tapping, Boring, Heavy Cutting forSpecial Steels &amp; Alloy steels</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT 932H</td>
							<td>0.910</td>
							<td>32.00</td>
							<td>205</td>
							<td>4a</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Brochingfor Special Steels, Press, Suitable for High level Cutting</td>
						  </tr>
						  <tr>
							<td class="f">GVCUT 745SPH</td>
							<td>0.915</td>
							<td>16.70</td>
							<td>188</td>
							<td>1a</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Brochingfor Special Steels, Press, aSuitable for High level Cutting</td>
						  </tr>
						</tbody>
						</table>
					</div>


					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">황계</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<thead>
						  <tr>
							<th>Product</th>
							<th>Specific gravity<br>(15/4℃)</th>
							<th>Kinematic viscosity<br>(40 ℃, cSt)</th>
							<th>Flash Point<br>(COC, ℃)</th>
							<th>Copper corrosion test<br>(100 ℃ /1hr)</th>
							<th>Material</th>
							<th>Usesand Characteristics</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td class="f">GV CUT 170FSL</td>
							<td>0.925</td>
							<td>65.00</td>
							<td>210</td>
							<td>4</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">HeavyCutting for Steels, Good improving surface roughness</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 780SP</td>
							<td>0.896</td>
							<td>18.90</td>
							<td>158</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Cold rolled steel sheet, CNC,Tapping, Non-chlorine</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 850FSL</td>
							<td>0.920</td>
							<td>45.00</td>
							<td>170</td>
							<td>4</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Coldrolled steel sheet, Film, Tapping</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT 846CFL</td>
							<td>0.878</td>
							<td>46.10</td>
							<td>214</td>
							<td>4</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Outertie rod Processing(Steering&amp;SuspensionBall Joint)</td>
						  </tr>
						  <tr>
							<td class="f">GV CUT R710L</td>
							<td>0.829</td>
							<td>8.64</td>
							<td>158</td>
							<td>1a</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">FormingOil</td>
						  </tr>
						</tbody>
						</table>
					</div>


					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">호닝유</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<thead>
						  <tr>
							<th>Product</th>
							<th>Specific gravity<br>(15/4℃)</th>
							<th>Kinematic viscosity<br>(40 ℃, cSt)</th>
							<th>Flash Point<br>(COC, ℃)</th>
							<th>Copper corrosion test<br>(100 ℃ /1hr)</th>
							<th>Material</th>
							<th>Usesand Characteristics</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td class="f">GVHONING PW 770</td>
							<td>0.82</td>
							<td>4.30</td>
							<td>126</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Ball burnishing</td>
						  </tr>
						  <tr>
							<td class="f">GVHONING B-750</td>
							<td>0.82</td>
							<td>4.30</td>
							<td>126</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Grinding for glass &amp; Polished lens(Stable from scratch)</td>
						  </tr>
						  <tr>
							<td class="f">GVHONING B-760</td>
							<td>0.84</td>
							<td>3.10</td>
							<td>106</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Super Finishing</td>
						  </tr>
						  <tr>
							<td class="f">GVHONING B-770</td>
							<td>0.84</td>
							<td>4.50</td>
							<td>106</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Super Finishing &amp; Reammingfor injection mold parts Super finishing,</td>
						  </tr>
						  <tr>
							<td class="f">GVHONING B-100LC</td>
							<td>0.88</td>
							<td>18.30</td>
							<td>184</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Suitable for high speedBurnishing, Non dispersion</td>
						  </tr>
						  <tr>
							<td class="f">GVHONING ML-5P</td>
							<td>0.869</td>
							<td>5.99</td>
							<td>106</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td rowspan="2" style="text-align:left">Super Finishing &amp; Reammingfor injection mold parts,Ball grinding(4-12.00mm )</td>
						  </tr>
						  <tr>
							<td class="f">GVHONING ML-7P</td>
							<td>0.824</td>
							<td>6.89</td>
							<td>148</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
						  </tr>
						  <tr>
							<td class="f">GVHONING ML-8P</td>
							<td>0.829</td>
							<td>8.01</td>
							<td>160</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td rowspan="2" style="text-align:left">Super Finishing &amp; Reammingfor injection mold parts,Ball grinding(12-17.00mm ↓)</td>
						  </tr>
						  <tr>
							<td class="f">GVHONING ML-9P</td>
							<td>0.833</td>
							<td>9.26</td>
							<td>161</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
						  </tr>
						  <tr>
							<td class="f">GVHONING ML-10P</td>
							<td>0.836</td>
							<td>10.10</td>
							<td>162</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Suitable for high speed Burnishing, Non dispersion,Ball grinding.(15-25.00mm ↓)</td>
						  </tr>
						  <tr>
							<td class="f">GVHONING ML-25P</td>
							<td>0.836</td>
							<td>25.00</td>
							<td>228</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td style="text-align:left">Suitable for high speed Burnishing, Non dispersion,Ball grinding.(25-50.00mm ↓)</td>
						  </tr>
						  <tr>
							<td class="f">GVLAPPING ML-7P</td>
							<td>0.824</td>
							<td>7.00</td>
							<td>148</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
							<td rowspan="2" style="text-align:left">Super Finishing &amp; Reammingfor injection mold parts,Ball grinding(4-12.00mm ↓)</td>
						  </tr>
						  <tr>
							<td class="f">GVLAPPING ML-8P</td>
							<td>0.829</td>
							<td>8.00</td>
							<td>160</td>
							<td>1</td>
							<td>Steel,Cast iron, Cast steel, Sus</td>
						  </tr>
						</tbody>
						</table>
					</div>


				</div>
				<!--//conBox-in-1 -->
				
				<!-- conBox-in-2 -->
				<div class="conBox-in conBox-in-2" style="display:none;">
					<h2 class="conBox-sub-title">에멀전 타입</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<thead>
						  <tr>
							<th>Product</th>
							<th>COLOR(25℃)</th>
							<th>pH (10%)</th>
							<th>concentration used</th>
							<th>Material</th>
							<th>Usesand Characteristics</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td class="f">GV W-CUT BIO-101</td>
							<td>milkwhite</td>
							<td>9.90 </td>
							<td>10-30:1</td>
							<td>carbonsteel, alloy steel</td>
							<td rowspan="2" style="text-align:left">general-purposeiron machining</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-101N</td>
							<td>milkwhite</td>
							<td>9.70 </td>
							<td>10-30:1</td>
							<td>Carbon steel, Alloy steel</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-1125</td>
							<td>paleyellow/milky white</td>
							<td>8.62 </td>
							<td>3～10%</td>
							<td>Steel,  Al alloy</td>
							<td rowspan="3" style="text-align:left">GoodLubricity &amp; Anti-septicity</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-1125AL</td>
							<td>paleyellow/milky white</td>
							<td>9.05 </td>
							<td>3～10%</td>
							<td>Steel,  Al alloy</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT CE-1125S</td>
							<td>paleyellow/milky white</td>
							<td>9.70 </td>
							<td>3～10%</td>
							<td>Steel,  Al alloy</td>
						  </tr>
						  <tr>
							<td class="f">GVW-CUT CE-1250L</td>
							<td>milkwhite</td>
							<td>9.10 </td>
							<td>10-30:1</td>
							<td>Steel,  Al alloy</td>
							<td rowspan="4" style="text-align:left">LowpricesGoodLubricity &amp; Extreme Pressure Resistance &amp; Working  property, Long Life-time of tools &amp;Improving Surface Roughness  </td>
						  </tr>
						  <tr>
							<td class="f">GVW-CUT CE-1250M</td>
							<td>milkwhite</td>
							<td>9.20 </td>
							<td>10-30:1</td>
							<td>Steel,  Al alloy</td>
						  </tr>
						  <tr>
							<td class="f">GVW-CUT CE-1250M(S)</td>
							<td>paleyellow/milky white</td>
							<td>9.50 </td>
							<td>3～10%</td>
							<td>Steel,  Al alloy</td>
						  </tr>
						  <tr>
							<td class="f">GVW-CUT BIO-1250F</td>
							<td>paleyellow/milky white</td>
							<td>9.60 </td>
							<td>3～10%</td>
							<td>Steel,  Al alloy</td>
						  </tr>
						  <tr>
							<td class="f">GVW-CUT BIO-1270MI</td>
							<td>milkwhite</td>
							<td>9.10 </td>
							<td>10-30:1</td>
							<td>Steel,  Al alloy</td>
							<td rowspan="4" style="text-align:left">GoodLubricity &amp; Extreme Pressure Resistance &amp; Working Property, LongLife-time of tools &amp; Improving Surface Roughness / Non chlorine</td>
						  </tr>
						  <tr>
							<td class="f">GVW-CUT BIO-1250D</td>
							<td>milkwhite</td>
							<td>9.50 </td>
							<td>10-30:2</td>
							<td>Steel,  Al alloy</td>
						  </tr>
						  <tr>
							<td class="f">GVW-CUT BIO-1250MI</td>
							<td>milkwhite</td>
							<td>8.02 </td>
							<td>10-30:2</td>
							<td>Steel,  Al alloy</td>
						  </tr>
						  <tr>
							<td class="f">GVW-CUT BIO-1250ME</td>
							<td>milkwhite</td>
							<td>9.20 </td>
							<td>10-30:1</td>
							<td>Steel,  Al alloy</td>
						  </tr>
						  <tr>
							<td class="f">GVW-CUT BIO-1250F-2</td>
							<td>milkwhite</td>
							<td>9.30 </td>
							<td>10-30:1</td>
							<td> Carbon steel, Alloy steel</td>
							<td>Good Lubricity &amp; Extreme PressureResistance &amp; Working Property, Long Life-time of tools &amp; ImprovingSurface Roughness / Non chlorine (Premium)</td>
						  </tr>
						</tbody>
						</table>
					</div>

					<hr class="both" />
					<hr class="line" />
					<h2 class="conBox-sub-title">반합성 타입</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<thead>
						  <tr>
							<th>Product</th>
							<th>COLOR(25℃)</th>
							<th>pH (10%)</th>
							<th>concentration used</th>
							<th>Material</th>
							<th>Usesand Characteristics</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td class="f">GV W-CUT BIO-2520D</td>
							<td>milkywhite</td>
							<td>9.90 </td>
							<td>10-20:0</td>
							<td>Casting, Carbon steel, Alloysteel</td>
							<td style="text-align:left">WithAdvanced lubricant additives, Cutting for General &amp; Alloy Steels</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO 300F</td>
							<td>milkywhite</td>
							<td>9.10 </td>
							<td>10-20:1</td>
							<td>Carbonsteel, Alloy steel</td>
							<td style="text-align:left">Suitablefor Process of Iron &amp; Al</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-2271M</td>
							<td>milkywhite</td>
							<td>9.35 </td>
							<td>10-20:1</td>
							<td>Steel,Al</td>
							<td style="text-align:left">Suitablefor Process of Iron &amp; Al</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-2271MI</td>
							<td>milkywhite</td>
							<td>9.35 </td>
							<td>10-20:1</td>
							<td>Carbonsteel, Alloy steel</td>
							<td style="text-align:left">GoodLubricity &amp; Defoaming</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-2770EP</td>
							<td>milkywhite</td>
							<td>8.80 </td>
							<td>10-30:1</td>
							<td>Steel, Cast iron, Fe</td>
							<td style="text-align:left">Cutting&amp; Grinding,Containg Special Lubricant(Fe)</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-2004IJ</td>
							<td>milkywhite</td>
							<td>9.40 </td>
							<td>10-20:1</td>
							<td>Steel,Nonferrous metal</td>
							<td style="text-align:left">GoodLubricity &amp; Washing</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-2372MI</td>
							<td>milkywhite</td>
							<td>10.01 </td>
							<td>10-30:1</td>
							<td>Steel, Castiron</td>
							<td style="text-align:left">Transparent,Good Anti-septicity</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-2004IJ</td>
							<td>milkywhite</td>
							<td>9.40 </td>
							<td>10-20:1</td>
							<td>Steel, Nonferrous metal</td>
							<td style="text-align:left">Transparent,Good Anti-septicity</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-2100N</td>
							<td>milkywhite</td>
							<td>9.30 </td>
							<td>3～10%</td>
							<td>Carbon steel, Alloy steel</td>
							<td style="text-align:left">LongLife-time of tools</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT CS-320</td>
							<td>milkywhite</td>
							<td>8.52 </td>
							<td>3～10%</td>
							<td>Casting, Carbon steel, Alloysteel</td>
							<td style="text-align:left">WithAdvanced lubricant additives, Cutting for General &amp; Alloy Steels</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT CS-330</td>
							<td>milkywhite</td>
							<td>9.30 </td>
							<td>3～10%</td>
							<td>Carbonsteel, Alloy steel</td>
							<td style="text-align:left">Suitablefor Process of Iron &amp; Al</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT CS-340</td>
							<td>milkywhite</td>
							<td>9.00 </td>
							<td>3～10%</td>
							<td>Steel,Al</td>
							<td style="text-align:left">Suitablefor Process of Iron &amp; Al</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT CS-350</td>
							<td>milkywhite</td>
							<td>9.30 </td>
							<td>3～10%</td>
							<td>Carbonsteel, Alloy steel</td>
							<td style="text-align:left">GoodLubricity &amp; Defoaming</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-3050</td>
							<td>transparent</td>
							<td>9.5 </td>
							<td>10-20:1</td>
							<td>Steel, Cast iron, Fe</td>
							<td style="text-align:left">Cutting&amp; Grinding,Containg Special Lubricant(Fe)</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-3070</td>
							<td>transparent</td>
							<td>9.00 </td>
							<td>10-30:1</td>
							<td>Steel,Nonferrous metal</td>
							<td style="text-align:left">GoodLubricity &amp; Washing</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-3510N</td>
							<td>transparent</td>
							<td>9.22 </td>
							<td>3～10%</td>
							<td>Steel, Castiron</td>
							<td style="text-align:left">Transparent,Good Anti-septicity</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT CS- 520</td>
							<td>transparent</td>
							<td>9.40 </td>
							<td>3～10%</td>
							<td>Steel, Nonferrous metal</td>
							<td style="text-align:left">Transparent,Good Anti-septicity</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO- 3530</td>
							<td>transparent</td>
							<td>9.20 </td>
							<td>3～10%</td>
							<td>Carbon steel, Alloy steel</td>
							<td style="text-align:left">LongLife-time of tools</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT CS- 540</td>
							<td>transparent</td>
							<td>9.20 </td>
							<td>3～10%</td>
							<td>Casting, Carbon steel, Alloysteel</td>
							<td style="text-align:left">WithAdvanced lubricant additives, Cutting for General &amp; Alloy Steels</td>
						  </tr>
						</tbody>
						</table>
					</div>

					<hr class="both" />
					<hr class="line" />
					<h2 class="conBox-sub-title">합성 타입</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<thead>
						  <tr>
							<th>Product</th>
							<th>COLOR(25℃)</th>
							<th>pH (10%)</th>
							<th>concentration used</th>
							<th>Material</th>
							<th>Usesand Characteristics</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td class="f">GV W-CUT BIO-3015</td>
							<td>transparent</td>
							<td>9.8</td>
							<td>10-20:1</td>
							<td>Castiron, FC</td>
							<td style="text-align:left">Gindingfor Cast Iron &amp; Carbon steels &amp; Alloy steels</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-3020</td>
							<td>transparent</td>
							<td>9.8</td>
							<td>10-20:1</td>
							<td>Castiron, Steel</td>
							<td style="text-align:left">Gindingfor Cast Iron &amp; Carbon steels &amp; Alloy steels</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-3030G</td>
							<td>transparent</td>
							<td>9.5</td>
							<td>10-20:1</td>
							<td>Castiron, Steel</td>
							<td style="text-align:left">Ginding&amp; Cutting for Cast Iron &amp; Carbon steels &amp; Alloy steels</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO-3350L</td>
							<td>transparent</td>
							<td>10.00</td>
							<td>10-20:1</td>
							<td>Carbon steel,Alloy steel</td>
							<td style="text-align:left">Cuttingfor General steels</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT BIO- 3271M</td>
							<td>transparent</td>
							<td>8.95</td>
							<td>10-20:1</td>
							<td>Carbon steel,Alloy steel</td>
							<td style="text-align:left">Cuttingfor General steels</td>
						  </tr>
						  <tr>
							<td class="f">GV W-CUT CS- 550</td>
							<td>transparent</td>
							<td>9.20</td>
							<td>3～10%</td>
							<td>Carbon steel,Alloy steel</td>
							<td style="text-align:left">Cuttingfor General steels &amp; Alloy steels</td>
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
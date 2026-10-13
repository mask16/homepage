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
				<h1>Industrial Lubricant</h1>
				<a class="his" href="<?=$host_url?>/product/distribution">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" /> Distribution Oil Main
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Spindle Oil(GV SPINDLE)</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionLubricant_4_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionLubricant_4_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV SPINDLE Series</span> is a low-viscosity lubricant for high-speed spindles and is made of highly purified clear and transparent paraffin oil to ensure high performance quality and is an excellent product used for multipurpose purposes.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt">
							• Manufactured from a highly purified base, the viscosity index is very high, oxidation stability is excellent, anti-emulsification is excellent, and low temperature fluidity is excellent.<br>
							• Excellent water separation and anti-emulsification.<br>
							• Excellent oxidation stability and wear resistance to extend the life of the machine.<br>
							• Suppressing the oxidation of oil due to temperature rise by suppressing the generation of air bubbles.
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• For lubrication that rotates light load and high speed, such as precision machines, spinning machines, machine tools, and special sewing machines.<br>
							• Oil based on rust preventive oil, cutting oil, rust preventive oil, and heat treatment (smaller) oil.
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr>
							<th>Category</th>
							<th>Specific gravity<br>(15/4℃)</th>
							<th>Kinematic viscosity<br>(40 ℃, cSt)</th>
							<th>Flash Point<br>(COC, ℃)</th>
							<th>P.P<br>(℃)</th>
							<th>통판부식<br>(100℃,1hrs)</th>
						</tr>
						<tr>
							<td class="f">BV SPINDLE 8</td>
							<td>0.872</td>
							<td>8.161</td>
							<td>158</td>
							<td>-40.0</td>
							<td>1a</td>
						</tr>
						<tr>
							<td class="f">BV SPINDLE 10</td>
							<td>0.827</td>
							<td>10.0</td>
							<td>159</td>
							<td>-35.0</td>
							<td>1a</td>
						</tr>
						<tr>
							<td class="f">BV SPINDLE 15</td>
							<td>0.831</td>
							<td>15.0</td>
							<td>159</td>
							<td>-35.0</td>
							<td>1a</td>
						</tr>
						<tr>
							<td class="f">BV SPINDLE 22</td>
							<td>0.87</td>
							<td>22.0</td>
							<td>180</td>
							<td>-20.0</td>
							<td>1a</td>
						</tr>
						<tr>
							<td class="f">BV SPINDLE 32</td>
							<td>0.87</td>
							<td>31.3</td>
							<td>212</td>
							<td>-20.0</td>
							<td>1a</td>
						</tr>
						<tr>
							<td class="f">BV SPINDLE 46</td>
							<td>0.87</td>
							<td>45.6</td>
							<td>212</td>
							<td>-15.0</td>
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
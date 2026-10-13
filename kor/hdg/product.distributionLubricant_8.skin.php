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
				<h1 class="conBox-title">그리스 (GV Grease)</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionLubricant_8_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionLubricant_8_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV Grease</span>는 구름베어링용 그리스 3종 2호/3호 규격의 고성능 자동차 및 산업용 그리스입니다. 자동차 부품 및 산업용 장비에 추천하며, 점착성능과 내수성, 산화안정성에 최적화된 성능을 발휘합니다.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>건설 장비, 광산에서 사용되는 중장비<br>
							<span style="margin:0 3px 0 -18px;">•  </span>전동기 베어링, 팬 베어링, 펌프 베어링과 기타 미끄럼 베어링 및 구름 베어링<br>
							<span style="margin:0 3px 0 -18px;">•  </span>다목적 그리스가 요구되는 산업용 기기 전반과 자동차용 샤시<br>
							<span style="margin:0 3px 0 -18px;">•  </span>휠 베어링, 볼 조인트, 유니 버셜 조인트, 연결 부위 자동차 부품

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<span style="margin:0 3px 0 -18px;">•  </span>KS M2130 구름베어링용 그리스 3종 2호 (NLGI 2)<br>
						<span style="margin:0 3px 0 -18px;">•  </span>KS M2130 구름베어링용 그리스 3종 3호 (NLGI 3)

						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table" style="width:100%;">
						<tr>
							<th>NLGI 등급</th>
							<th>2</th>
							<th>3</th>
						</tr>
						<tr>
							<td class="f">Unworked Pentration (25℃)</td>
							<td>270</td>
							<td>235</td>
						</tr>
						<tr>
							<td class="f">Dropping Point (℃)</td>
							<td>235</td>
							<td>230</td>
						</tr>
						<tr>
							<td class="f">Corrosion Copper(@100℃,24hr)</td>
							<td>Black/Green No change (1a)</td>
							<td>Black/Green No change (1a)</td>
						</tr>
						<tr>
							<td class="f">Evaporation (99℃,22hr)(%)</td>
							<td>0.1</td>
							<td>0.1</td>
						</tr>
						<tr>
							<td class="f">Stability Oxidation (99℃,100hr)(kgf/cm2)</td>
							<td>0.25</td>
							<td>0.25</td>
						</tr>
						<tr>
							<td class="f">Moisture(wt%)</td>
							<td>None</td>
							<td>None</td>
						</tr>
						<tr>
							<td class="f">Water Washout 38℃, wt%</td>
							<td>0.75</td>
							<td>0.75</td>
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
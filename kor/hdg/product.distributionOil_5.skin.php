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
				<h1 class="conBox-title">브레이크 오일 (GV DOT Series)</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_5_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_5_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						강력하고 안정된 브레이크 성능을 발휘합니다.<br>
						가혹한 기후에서도 사용 가능한 제품입니다.<br>
						높은 끓는점, 낮은 증발특성으로 사용중 높은 안정성을 유지합니다.<br>
						금속 및 고무계통을 보호할수 있는 금속부식방지제, 산화방지제, 방청첨가제 등의 최고급 첨가제를 함유하는 제품입니다.<br>
						국제규격 제품으로서 국내 및 수입차량에도 사용이 적합합니다.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt">
							• 승용차, 버스, 트럭, 트레일러 외 모든 종류의 차량 브레이크
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<span style="margin:0 3px 0 -18px;">•  </span>성능 규격 : SAE J1703, SAE J1704, FMVSS No.116 (DOT3, DOT4), KS M 2141 (3종, 4종)
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table" style="width:100%;">
						<tr>
							<th>항목</th>
							<th>DOT-3</th>
							<th>DOT-4</th>
						</tr>
						<tr>
							<td class="f">VISCOSITY, cSt, 40°C</td>
							<td>1,332</td>
							<td>1,148</td>
						</tr>
						<tr>
							<td class="f">VISCOSITY, cSt, 100°C</td>
							<td>1.97</td>
							<td>2.06</td>
						</tr>
						<tr>
							<td class="f">Dry boiling point °C</td>
							<td>229</td>
							<td>261</td>
						</tr>
						<tr>
							<td class="f">Wet boiling point °C</td>
							<td>147</td>
							<td>162</td>
						</tr>
						<tr>
							<td class="f">Pour point, °C</td>
							<td>>9.18</td>
							<td>>8.81</td>
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
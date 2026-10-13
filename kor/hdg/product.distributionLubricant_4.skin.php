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
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" /> 유통 메인으로
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">스핀들유 (GV SPINDLE)</h1>
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
						<span class="bold">GV SPINDLE</span>는 고속 스핀들용의 저점도 윤활유로서 고도로 정제된 맑고 투명한 파라핀계 기유로 제조하여 항상 고성능의 품질을 보증하며 다목적용으로 사용되는 우수한 제품입니다.
					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt">
							• 고도로 정제된 베이스로 제조하여 점도지수가 매우 높고, 산화안정성이 우수하며, 항유화성이 탁월하며, 저온 유동성이 우수.<br>
							• 유수분리성과 항유화성이 매우 우수.<br>
							• 산화안정성 및 내마모성이 우수하여 기계의 수명을 연장시킴.<br>
							• 기포 발생을 억제하여 온도상승에 의한 오일의 산화를 억제.

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							• 정밀기계, 방적기계, 공작기계 및 특수미싱 등의 경 하중 고속 회전하는 윤활용.<br>
							• 방모유, 절삭유, 방청유 및 열처리(소입)유의 기유.

						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr>
							<th>품명</th>
							<th>비중(15/4°C)<br>(15/4℃)</th>
							<th>동점도(cSt)<br>(40℃)</th>
							<th>인화점<br>(℃)</th>
							<th>유동점<br>(℃)</th>
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
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
				<h1 class="conBox-title">압축기유 (GV COMP)</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionLubricant_5_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionLubricant_5_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Distribution</h2>
					<p class="conBox-txt">
						<span class="bold">GV COMP</span>는 실린더형과,  회전형 압축기 모두를 위해 개발 되어진  제품으로 산화 안정성능과 부식 방지성능, 물 분리성에 최적화된 성능을 발휘 합니다. 고품질의 기유 및  특수 첨가제를 적용하여, 압축기의 모든 요구 조건을 만족합니다.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Applications</h2>
						<p class="conBox-txt" style="padding:0 18px;">
							<b style="margin:0 3px 0 -18px;">GV COMP P :</b> <br>
							<span style="margin:0 3px 0 -18px;">•  </span>1000bar 이상 고압, 고온 운전되는 왕복동형 공기압축기 ,원심 압축기용<br>
							<span style="margin:0 3px 0 -18px;">•  </span>공기 혹은 비활성 가스 왕복 압축기 <br>
							<span style="margin:0 3px 0 -18px;">•  </span>고정 및 세미 포터블, 포터블 압축기<br><br>
							<b style="margin:0 3px 0 -18px;">GV COMP S :</b> <br>
							<span style="margin:0 3px 0 -18px;">•  </span>오일 급유식 로터리 베인형 공기압축기<br>
							<span style="margin:0 3px 0 -18px;">•  </span>오일 급유식 로터리 스크류형 공기압축기<br>

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Advantages</h2>
						<p class="conBox-txt">
							<b>GV COMP P :</b> <br>
							우수한 산화안정성과 탄화물질 생성 억제를 통해 밸브와 피스톤 부위 슬러지 퇴적물이 쌓이는 것을 막아 주며, 가혹한 조건에서도 압축기 성능을 유지<br><br>
							<b>GV COMP S :</b> <br>
							* 합성기유 및 최고급 첨가제를 사용해, 바니쉬와 슬러지 발생을 최소화 하고 금속 산화물 생성을 억제해 고온하에서도 장시간 사용 가능
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Typical Characteristics</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr>
							<th>품명</th>
							<th>ISO점도 등급</th>
							<th>비중<br>(15/4℃)</th>
							<th>동점도(cSt)<br>(cSt)<br>40℃</th>
							<th>동점도(cSt)<br>(cSt)<br>100℃</th>
							<th>점도 지수</th>
							<th>인화점<br>(℃)</th>
							<th>유동점<br>(℃)</th>
							<th>통판부식<br>(100℃,3hrs)</th>
						</tr>
						<tr>
							<td class="f" rowspan="3">GV COMP P</td>
							<td>VG 32</td>
							<td>0.86</td>
							<td>32.0</td>
							<td>5.5</td>
							<td>108</td>
							<td>230</td>
							<td>-30</td>
							<td>1a</td>
						</tr>
						<tr>
							<td>VG 46</td>
							<td>0.87</td>
							<td>46.0</td>
							<td>7.0</td>
							<td>109</td>
							<td>234</td>
							<td>-30</td>
							<td>1a</td>
						</tr>
						<tr class="sborder">
							<td>VG 68</td>
							<td>0.87</td>
							<td>68.0</td>
							<td>9.0</td>
							<td>107</td>
							<td>236</td>
							<td>-27</td>
							<td>1a</td>
						</tr>
						<tr>
							<td class="f" rowspan="3">GV COMP S</td>
							<td>VG 32</td>
							<td>0.86</td>
							<td>32.0</td>
							<td>5.5</td>
							<td>108</td>
							<td>230</td>
							<td>-30</td>
							<td>1a</td>
						</tr>
						<tr>
							<td>VG 46</td>
							<td>0.87</td>
							<td>46.0</td>
							<td>7.0</td>
							<td>109</td>
							<td>234</td>
							<td>-30</td>
							<td>1a</td>
						</tr>
						<tr class="sborder">
							<td>VG 68</td>
							<td>0.87</td>
							<td>68.0</td>
							<td>9.0</td>
							<td>107</td>
							<td>236</td>
							<td>-27</td>
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
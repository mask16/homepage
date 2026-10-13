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
				<h1>Промышленные смазки</h1>
				<a class="his" href="<?=$host_url?>/product/distribution">
					<img src="<?=$skin_url?>/img/content/distribution_conBox_ico_arrow_left.png" /> Распределение
				</a>
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Грез</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionLubricant_8_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionLubricant_8_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Описания</h2>
					<p class="conBox-txt">
						GV Grease Series - это высокопроизводительный автомобильный и промышленный стандарт смазки для облачных подшипников, № 2/3 .Рекомендуется для автомобильных деталей и промышленного оборудования и обладает оптимизированной производительностью для адгезии, водостойкости и стабильности окисления.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Приложения</h2>
						<p class="conBox-txt">
							• Строительное оборудование. Тяжелое оборудование, используемое в шахтах. <br>
							• Подшипники для двигателей, вентиляторы, насосные подшипники и другие подшипники для скольжения и качения. <br>
							• Промышленное оборудование, которое требует многоцелевого жира и шасси для автомобилей. <br>
							• Подшипники колес, шаровые соединения, универсальные соединения, соединения, автомобильные части<br>

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title"> Преимущества</h2>
						<p class="conBox-txt">
							• КСМ2130 Серый тип 3 для облачного подшипника № 2 (NLGI2) <br>
							• КСМ2130 Серый тип 3 для облачного подшипника № 3 (NLGI3)
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Типичные характеристики</h2>
					<div class="tableBox">
						<table class="conBox-table" style="width:100%;">
						<tr>
							<th>NLGI CLASS</th>
							<th>2</th>
							<th>3</th>
						</tr>
						<tr>
							<td class="f">Неработанная Пентация (25℃)</td>
							<td>270</td>
							<td>235</td>
						</tr>
						<tr>
							<td class="f">Точка дропинга (℃)</td>
							<td>235</td>
							<td>230</td>
						</tr>
						<tr>
							<td class="f">Корозионный медь(@100℃,24hr)</td>
							<td>Black/Green No change (1a)</td>
							<td>Black/Green No change (1a)</td>
						</tr>
						<tr>
							<td class="f">Эвапорация (99℃,22hr)(%)</td>
							<td>0.1</td>
							<td>0.1</td>
						</tr>
						<tr>
							<td class="f">Окисление стабильности (99℃,100hr)(kgf/cm2)</td>
							<td>0.25</td>
							<td>0.25</td>
						</tr>
						<tr>
							<td class="f">Влажность(wt%)</td>
							<td>None</td>
							<td>None</td>
						</tr>
						<tr>
							<td class="f">Водоочистка 38℃, wt%</td>
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
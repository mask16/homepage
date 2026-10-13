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
				<h1 class="conBox-title">Турбинные масла</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionLubricant_4_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionLubricant_4_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Описания</h2>
					<p class="conBox-txt">
						Серия GV SPINDLE представляет собой смазку с низкой видимостью для быстрого шпинделя, изготовленную из высоко очищенного прозрачного парафинового масла, обеспечивающего высокое качество работы и является отличным продуктом, используемым для многоцелевых целей.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Приложения</h2>
						<p class="conBox-txt">
							• Изготовленный из высоко очищенной базы, индекс вязкости очень высок, стабильность окисления отлична, анти-эмульсификация отлична, и низкая температура жидкость отлична. 
							• Отличное разделение воды и анти-эмульгификация. 
							• Отличная стабильность окисления и износостойкость для продления срока службы машины. 
							• подавление окисления масла из-за повышения температуры путем подавления производства пузырей воздуха.
						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title"> Преимущества</h2>
						<p class="conBox-txt">
							• Для смазки, которая вращает легкую нагрузку и высокую скорость, такие как точные машины, шпиннирующие машины, станки и специальные швейные машины. 
							• масло, основанное на ржавчистой нефти, масле резки, противовоспалительной масле и теплообработке (маленькой) маслою.

						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Типичные характеристики</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr>
							<th>Название продукта</th>
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
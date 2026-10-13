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
				<h1 class="conBox-title">Мотоцикл2 & 4 СТРОК</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionOil_3_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionOil_3_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Описания</h2>
					<p class="conBox-txt">
						GV 2T & 4T Oil - это продукт, соответствующий стандарту качества двигателя в Японии JASOFB. В качестве продукта, передовые чистые диспергирующие средства могут быть использованы для предотвращения прессования поршневого кольца и обеспечивают отличную защиту двигателя и сдвиг производительности даже в экстремальных условиях эксплуатации на высокой скорости.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Приложения</h2>
						<p class="conBox-txt">
							• Применяется для внутренних и зарубежных администраций 2 , мотоциклов и скутеров (2T) <br>
							• Применяется к 4 государственным и иностранным администрациям (4T)

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Преимущества</h2>
						<p class="conBox-txt">
							• Стандарт США. : API SL<br>
							• Японский стандарт : JASO FB, MA2
						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Типичные характеристики</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr class="rowspan">
							<th rowspan="2">SAE  VISCOSITY / Performance</th>
							<th>10W40</th>
							<th>15W40</th>
							<th>10W30</th>
							<th>10W40</th>
							<th rowspan="2">&nbsp;</th>
						</tr>
						<tr class="rowspan">
							<th>CK-4</th>
							<th>CK-4</th>
							<th>CI-4</th>
							<th>CI-4/SL</th>
						</tr>
						<tr>
							<td class="f">Указанная гравитация (15/4°C)</td>
							<td>0.87</td>
							<td>0.86</td>
							<td>0.86</td>
							<td>0.86</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 40°C, cSt</td>
							<td>47.5</td>
							<td>97.6</td>
							<td>97.6</td>
							<td>154</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 100°C, cSt</td>
							<td>7.5</td>
							<td>15.1</td>
							<td>15.1</td>
							<td>18.7</td>
						</tr>
						<tr>
							<td class="f">Индекс вискости</td>
							<td>122</td>
							<td>163</td>
							<td>163</td>
							<td>137</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>>70</td>
							<td>>210</td>
							<td>>220</td>
							<td>>220</td>
						</tr>
						<tr>
							<td class="f">Порошная точка, ℃</td>
							<td>-33</td>
							<td>-33</td>
							<td>-33</td>
							<td>-30</td>
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
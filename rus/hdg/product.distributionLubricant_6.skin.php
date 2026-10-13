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
				<h1 class="conBox-title">Машинные масла</h1>
				<hr class="both" />

				<!-- conBox-in-1 -->
				<div class="conBox-in conBox-in-1">
					<div class="view-img">
						<img src="<?=$skin_url?>/img/content/distributionLubricant_6_img01.png" />
						<img src="<?=$skin_url?>/img/content/distributionLubricant_6_img02.png" />
					</div>
					
					<hr class="line0" />

					<h2 class="conBox-sub-title">Описания</h2>
					<p class="conBox-txt">
						Серия GV MACHINE является высоко очищенным парафиническим маслом с отличной теплостойкостью, окислением, ржавчистой и vesicul свойствами, и является продуктом для различных отраслей промышленности. Используется в качестве механического масла/очистительного масла и литья êmbolo масла и оптимизирован для производства ила и низкой температуры эксплуатации.

					</p>

					<hr class="line" />
					
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Приложения</h2>
						<p class="conBox-txt">
							• Очистка масла для удаления загрязняющих веществ из системы промышленного циркуляции.<br>
							• Различные промышленные масла и масла (разнообразие гидравлических систем, не требующих сопротивления истиранию)<br>
							• Высокая вязкость Плунгер масло.

						</p>
					</div>
					<div class="conBox-in-left">
						<h2 class="conBox-sub-title">Преимущества</h2>
						<p class="conBox-txt">
							• Его можно использовать на длительное время благодаря своей превосходной теплостойкости и окислению. <br>
							• Это водоотталкивающее и анти-эмульгирующее средство. <br>
							• Минимизировать ржавчину и коррозию.

						</p>
					</div>
					
					<hr class="both" />
					<hr class="line" />

					<h2 class="conBox-sub-title">Типичные характеристики</h2>
					<div class="tableBox">
						<table class="conBox-table">
						<tr>
							<th>ISO VISCOSITY / Performance Spec</th>
							<th>32</th>
							<th>46</th>
							<th>68</th>
							<th>100</th>
						</tr>
						<tr>
							<td class="f">Указанная гравитация (15/4°C)</td>
							<td>0.86</td>
							<td>0.87</td>
							<td>0.87</td>
							<td>0.88</td>
						</tr>
						<tr>
							<td class="f">Flash Point, ℃</td>
							<td>235</td>
							<td>240</td>
							<td>255</td>
							<td>260</td>
						</tr>
						<tr>
							<td class="f">Порошная точка, ℃</td>
							<td>-38</td>
							<td>-35</td>
							<td>-35</td>
							<td>-33</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 40°C, cSt</td>
							<td>32.0</td>
							<td>46.0</td>
							<td>68.0</td>
							<td>100.0</td>
						</tr>
						<tr>
							<td class="f">Кинематическая вискость при 100°C, cSt</td>
							<td>5.36</td>
							<td>6.97</td>
							<td>9.05</td>
							<td>11.7</td>
						</tr>
						<tr>
							<td class="f">Индекс вискости</td>
							<td>110</td>
							<td>108</td>
							<td>107</td>
							<td>105</td>
						</tr>
						<tr>
							<td class="f">Corrosion Copper 3Hr @100°C</td>
							<td>1a</td>
							<td>1a</td>
							<td>1a</td>
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
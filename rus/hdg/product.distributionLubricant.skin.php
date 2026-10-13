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
		<h1 class="title">Распределение</h1>
			<!-- conBox -->
			<div class="conBox">
			<!-- conBox-left -->
			<div class="conBox-left">
				<img class="img pc" src="<?=$skin_url?>/img/content/distributionLubricant_img01.png" />
				<img class="img mo" src="<?=$skin_url?>/img/content/distributionLubricant_img01_m.png" />
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Промышленные смазки</h1>
				<hr class="line" />
				<p class="conBox-txt">Гидравлическое масло, механическое масло, масло передач, влажное хлопковое масло, компрессорное масло, турбинное масло и т.д. по  Это продукт, изготовленный с использованием высокообогащенного очень высокого уровня нефти и сырья с высоким уровнем технологии, и это смазка, которая способствовала мысли о окружающей среде и людей и стабилизирующего оборудования.
</p>
				<ul class="conBox-menu">
					<a href="<?=$ThisUrl?>?sub=1">
						<li>
							<p>Гидравлические масла</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=2">
						<li>
							<p>Масла для заряда</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=3">
						<li>
							<p>Масла для слайда-вея</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=4">
						<li>
							<p>Турбинные масла</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=5">
						<li>
							<p>Сжатие масел</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=6">
						<li>
							<p>Машинные масла</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=7">
						<li>
							<p>Турбинные масла</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=8">
						<li>
							<p>Грез</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
				</ul>
			</div>
			<!--//conBox-right -->
		</div>
		<!--//conBox -->
		<hr class="both" />
	</section>
    
</div>
<!-- subWrap// -->
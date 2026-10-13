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
		<h1 class="title">Масла двигателя</h1>
			<!-- conBox -->
			<div class="conBox">
			<!-- conBox-left -->
			<div class="conBox-left">
				<img class="img pc" src="<?=$skin_url?>/img/content/distributionOil_img01.png" />
				<img class="img mo" src="<?=$skin_url?>/img/content/distributionOil_img01_m.png" />
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Масла двигателя</h1>
				<hr class="line" />
				<p class="conBox-txt">Моторное масло Hyundai Gloville использует высокообогащенное базовое масло VHVI и отличные смазочные материалы для удовлетворения свойств двигателя, который развивается день за днем, обеспечивая отличную смазку и отличную стабильность окисления, продляя срок службы двигателя.</p>
				<ul class="conBox-menu">
					<a href="<?=$ThisUrl?>?sub=1">
						<li>
							<p>ГОЛ Бензин ЭНГИН</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=2">
						<li>
							<p>Дизельное топливо двигателя</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=3">
						<li>
							<p>Мотоцикл 2 & 4 СТРОК</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=4">
						<li>
							<p>Автоматический флюйд трансмиссии</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=5">
						<li>
							<p>МАУНАЛЬНЫЙ ФЛУЙД ТРАНСМИ</p>
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
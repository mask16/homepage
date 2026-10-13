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
		<h3>BUSINESS</h3>
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
		<h1 class="title">Lubricants</h1>
			<!-- conBox -->
			<div class="conBox">
			<!-- conBox-left -->
			<div class="conBox-left">
				<img class="img pc" src="<?=$skin_url?>/img/content/distributionMetal_img01.png" />
				<img class="img mo" src="<?=$skin_url?>/img/content/distributionMetal_img01_m.png" />
			</div>
			<!--//conBox-left -->

			<!-- conBox-right -->
			<div class="conBox-right">
				<h1 class="conBox-title">Metalworking Fluid</h1>
				<hr class="line" />
				<!-- <p class="conBox-txt">Metal Cutting Oil is a type of metal working fluids and is applied between equipments and materials in order to improve equipment life span, precision and to increase machining speed.<br><br>Metal Cutting Fluids are manufactured, depending on specific processing properties. To accord with processing conditions and properties, various additives are used and this decides Metal Cutting Fluids’ types and properties.<br><br>Fluids can be found in water soluble and neat types. Water Soluble types are divided into Emulsion, Semi-Synthetic and Synthetic types, whereas neat types can be classed whether products contain extreme pressure additives and use purpose.
				</p> -->
				<ul class="conBox-menu">
					<a href="<?=$ThisUrl?>?sub=1">
						<li>
							<p>Cutting Fluid</p>
							<img class="ico" src="<?=$skin_url?>/img/content/distribution_conBox_menu_arrow_right.png" />
						</li>
					</a>
					<a href="<?=$ThisUrl?>?sub=2">
						<li>
							<p>Rust Preventives</p>
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
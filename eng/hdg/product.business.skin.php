<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.history.skin.php
+ Description	: about.history
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
	<div class="visualText">
		<p>HYUNDAI GLOVILLE</p>
		<h3>Business Introduction</h3>
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

	<div class="subContent">
		<section class="businessGloville innerWrap">
			<div class="conPd">
				<h5 class="titStyle5">
					<b>
						Hyundai Gloville specializes in import and export freight, as well as inland transportation service. 
						In addition to these services, we also provide logistics-related services such as freight storage, 
						export packing, airport duties, special cargo, and more.
					</b>
				</h5>

				<div class="businessGlovilleWrap brdr-b">
					<div>
						<h6 class="titStyle3">
							<b>
								Import and Export Freight and Inland Transportation Service
							</b>
						</h6>
						<p class="text-blit">
							AIR, OCEAN import and export LCL / FCL freight transportation
						</p>
						<p class="text-blit">
							Domestic freight transportation (enterprise logistics)
						</p>
						<p class="text-blit">
							Special cargo transportation: Big manufacturing plants, cold storage, articles of exhibition
						</p>
						<p class="text-blit">
							Project cargo
						</p>
					</div>
					<div>
						<div><img src="<?=$skin_url?>/img/content/business_Gloville01.png" alt="" /></div>
					</div>
				</div>

				<div class="businessGlovilleWrap">
					<div>
						<h6 class="titStyle3">
							<b>
								3PL/Warehouse Storage
							</b>
						</h6>
						<p class="text-blit">
							Inventory management, storage management, transportation, inspection, packaging, etc
						</p>
						<p class="text-blit">
							Warehouse storage services for nationwide main distribution centers
						</p>
					</div>
					<div>
						<div>
							<img src="<?=$skin_url?>/img/content/business_Gloville02.png" alt="" />
						</div>
					</div>
				</div>

				<div class="businessGlovilleWrap">
					<div>
						<h6 class="titStyle3">
							<b>
								Airport/port Industry
							</b>
						</h6>
						<p class="text-blit">
							Airport shuttle transportation/ULD transportation
						</p>
						<p class="text-blit">
							Warehouse storage, receiving and forwarding management
						</p>
					</div>
					<div>
						<div>
							<img src="<?=$skin_url?>/img/content/business_Gloville03.png" alt="" />
						</div>
					</div>
				</div>

				<div class="businessGlovilleWrap">
					<div>
						<h6 class="titStyle3">
							<b>
								Export Freight Packaging
							</b>
						</h6>
						<p class="text-blit">
							Up-to-date packaging equipment and work environment (Airtight packaging, SKID, vacuum packaging, etc)
						</p>
						<p class="text-blit">
							Reducing customers' logistics costs with system integration packing to transportation
						</p>
					</div>
					<div>
						<div>
							<img src="<?=$skin_url?>/img/content/business_Gloville04.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<!-- subWrap// -->
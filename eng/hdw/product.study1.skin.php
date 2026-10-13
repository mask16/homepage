<?php
if( !defined('_GNUBOARD_') ) EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI WELDING</p>
			<h3>Business Introduction</h3>
		</div>
	</div>
</section>

<div class="subWrap">
	<section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
		<!-- subNav -->
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
		<!--//subNav -->
	</section>

	<div class="subContent">

		<!-- [1] study1 -->
		<section class="productStudy1">
			<div class="conPd">
				<h5 class="titStyle5"><b>Hyundai Welding's Pohang R&D Center is focused on developing welding solutions that can immediately meet all of our customers' needs.</b></h5>
			</div>
			<div class="productStudyImg"></div>
			<div class="productStudy1Con">
				<div class="conPd">
					Since its inception in 1977, Hyundai Welding has contributed to the industrial development of South Korea by researching and developing electrode arc welding materials, submerged arc welding materials (SAW), solid wires (GMAW), flux cored wires (FCW), TIG wires, nickel alloy steel and other welding materials. We develop our technology by securing databases of major end-users via our foreign branches.<br /><br />
					Furthermore, we continue to develop new welding materials and secure product reliability through systemic cooperation with state-run research institutes. Based on our accumulated know-how, we have developed welding materials that are high-functioning, eco-friendly, and highly efficient. We strive to become a company that moves closer to our customers with our customer-tailored services - AS/BS and technical support. Our research institute is committed to improving productivity and product quality, developing new products that meet the customer's needs, and develop welding materials that can effectively adapt to global market changes.
				</div>
			</div>
		</section>

		<div style="height:60px;"></div>

		<!-- [2] study2 -->
		<section class="productStudy2">
			<div class="conPd">
				<h5 class="titStyle5"><b>It is a field that is consistently researched and developed by Hyundai Welding.</b></h5>
			</div>
			<div class="productStudy2Img"></div>
			<div class="productStudy2Con conPd">
				<h6 class="titStyle3"><b>Development of Welding Materials</b></h6>
				<div>
					<p class="text-blit">Development of optimized products for Low-Temperature Service Steel, High Tensile Steel, and Heat-Resistant Steel</p>
					<p class="text-blit">Development of special functioning products for Shipbuilding, Offshore, Construction, Nuclear Energy, and Power Plants</p>
					<p class="text-blit">Development of innovative and functionalized products for general-purpose such as, Shipbuilding, Structural Steel, Construction, Heavy Equipment, and Automotive</p>
					<p class="text-blit">Joint R&D for the application of new steel grades, welding materials and new welding techniques, in order to provide a total solution technology</p>
					<p class="text-blit">Increases in welding speed and efficiency, high toughness, crack resistance, and eco-friendliness</p>
				</div>

				<h6 class="titStyle3"><b>Research of Welding Technology</b></h6>
				<div>
					<p class="text-blit">Evaluation of welding wire feeding characteristics through Arc Monitoring</p>
					<p class="text-blit">Research for performance improvement techniques through the evaluation and analysis of mechanical properties of welding materials</p>
					<p class="text-blit">Study of the characteristics of welding parts, according to welding parameters</p>
				</div>
			</div>
		</section>

		<div style="height:100px;"></div>

		<!-- [3] study3 -->
		<section class="productStudy3">
			<div class="conPd">
				<h5 class="titStyle5"><b>Development direction and status at Hyundai Welding Research Institute.</b></h5>
				<h6 class="titStyle1 c-gray"><p>Direction of Development</p></h6>

				<div class="productStudy3Wrap brdr-b">
					<div>
						<h6 class="titStyle3"><b>Environmentally-Friendly</b></h6>
					</div>
					<div>
						<div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
						<p class="text-blit">Welding Consumables with Low-Fumes</p>
						<p class="text-blit">Welding Consumables for Low-Mn</p>
						<p class="text-blit">Welding Consumables for Low-Spatter</p>
						<p class="text-blit">Self-Shielded Flux Cored Wires</p>
					</div>
				</div>

				<div class="productStudy3Wrap">
					<div>
						<h6 class="titStyle3"><b>Highly-Functional</b></h6>
					</div>
					<div>
						<div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
						<p class="text-blit">Extraordinary CTOD performance under cryogenic conditions</p>
						<p class="text-blit">Ultra High-Intensity/High-Tensile welding consumables for Offshore Industries</p>
						<p class="text-blit">Anti-Moisture Absorption welding consumables, with extremely low-Hydrogen levels</p>
					</div>
				</div>

				<div class="productStudy3Wrap">
					<div>
						<h6 class="titStyle3"><b>High-Efficiency</b></h6>
					</div>
					<div>
						<div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
						<p class="text-blit">Electro-Gas welding consumables</p>
						<p class="text-blit">Metal Cored wires for High Speed welding</p>
					</div>
				</div>

				<div class="productStudy3Wrap">
					<div>
						<h6 class="titStyle3"><b>Suitable for New Steel Grades</b></h6>
					</div>
					<div>
						<div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
						<p class="text-blit">Developed Self-Shielded EGW for Plant Storage Tanks</p>
						<p class="text-blit">Developed High-Strength FCW</p>
						<p class="text-blit">Developed Welding Consumables for Offshore Structure Steel Grades S500/S550/S690</p>
						<p class="text-blit">Developed Welding Consumables suitable for new welding processes, such as, Automation/High-Efficiency/High-Speed/Light-Weight</p>
					</div>
				</div>

			</div>
		</section>

	</div>
</div>
<!-- subWrap// -->

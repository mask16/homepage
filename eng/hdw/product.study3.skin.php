<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study3.skin.php
+ Description	: product.study3
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
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
              <p class="text-blit">Developed Welding Consumables suitable for new welding processs, such as, Automation/High-Efficiency/High-Speed/Light-Weight</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
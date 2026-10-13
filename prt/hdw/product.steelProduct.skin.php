<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.steelProduct.skin.php
+ Description	: product.steelProduct
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI WELDING</p>
			<h3>Introdução de Negócios</h3>
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
      <section class="steelProduct steelProductList">

        <div class="innerWrap">
          <div class="tabSliderWrap p0">
            <div class="swiper-container tabSlider swiper-container-initialized swiper-container-horizontal">
              <div class="swiper-wrapper">
                <div class="swiper-slide on"><a href="javascript:void(0);">Steel Plate Type</a></div>
                <div class="swiper-slide"><a href="javascript:void(0);">Steel Pipe Type</a></div>
                <div class="swiper-slide"><a href="javascript:void(0);">Section Steel Bar Type</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="steelProductWrap">
          <div class="steelProductList steelProductList01">
              <ul>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct01.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>Steel Plate</h5>
                    <p class="text-style1">Hot-Rolled Steel sheets, with a thickness of 6 mm or more, are generally referred to as Thick Plates. Steel Plate products are mainly carbon steel but, there are also High-Strength Steel, Alloy Steel and Stainless Steel. It is primarily used for large structures such as, Shipbuilding, Boilers, Pressure Vessels, and Bridges.</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct02.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>Hot Rolled Steel</h5>
                    <p class="text-style1">Hot rolling is the process of heating the steel slab to make thin coils and, the intermediate material (semi-finished products) are produced through this process which is called Hot-Rolled Coils. It is the main material used in industries such as, Automotive, Construction, Shipbuilding, Pipes, and Industrial Machinery.</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct03.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>Cold Rolled Steel</h5>
                    <p class="text-style1">Cold-Rolled Steel are made from Hot-Rolled Steel in order to be thinner and to have a more smoother surface. It is mainly used  in Automobile Frames, Home Appliances, and Drum Fields.</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct04.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>Stainless Steel</h5>
                    <p class="text-style1">Stainless Steel is a Low-Carbon Steel that has a large amount of Chromium or, a mixture of Chromium and Nicke, which, has very good corrosion resistance, along with, a beautiful silvery white color, when polished. It is mainly used in various industrial fields such as, Interior and Exterior materials for Buildings, Elevators, Kitchen Appliances and Automotive Parts.</p>
                  </div>
                </li>
              </ul>
          </div>
          <!-- tab01 -->
          <div class="steelProductList steelProductList02">
              <ul>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct05.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>Steel Pipe</h5>
                    <p class="text-style1">Steel pipes are produced in various specifications through electric resistance welding and arc welding, after forming hot-rolled steel sheets into circular tubes. It is mainly used for Oil Field Development, Oil Pipelines, General Piping, Structural Steel, Heat Exchangers, Agricultural Equipment, Conduits, etc.</p>
                  </div>
                </li>
              </ul>
          </div>
          <!-- tab02 -->
          <div class="steelProductList steelProductList03">
              <ul>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct07.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>H-Section</h5>
                    <p class="text-style1">Section Steel is a generic term for Long Steel pre-formed into certain cross-sectional shapes, such as H-Type and L-Type. If the cross-section is circular or square-shaped, it is called a Steel Pipe. These are mainly used for Civil Engineering, Building Pillars or Beams, Foundation Piles, Mechanical products, etc.</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct09.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>Reinforcing Bar</h5>
                    <p class="text-style1">Reinforcing bars are construction materials that are shaped like steel rods and are primarily responsible for tensile strength. They play an important role in Civil and Architectural Engineering. Reinforcing bars are mostly made of carbon steel and by combining with concrete, under compressive force, they are formed into reinforced concrete structures.</p>
                  </div>
                </li>
              </ul>
          </div>
          <!-- tab03 -->
        </div>

      </section>


    </div>
  </div>
  <!-- subWrap// -->

  <script>
    var swiper = new Swiper('.tabSlider', {
      slidesPerView: 'auto',
      spaceBetween: 0
    });


    $('.tabSlider .swiper-slide').click(function() {
      $(this).addClass('on');
      $(this).siblings('.swiper-slide').removeClass('on');

      var tabIndex = $(this).index();

      $('.steelProductList').eq(tabIndex + 1).show();
      $('.steelProductList').eq(tabIndex + 1).siblings().hide();


    });
  </script>
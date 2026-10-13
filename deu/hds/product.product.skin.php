<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hds/product.product.skin.php
+ Description	: product.product
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI SUPERTECK</p>
		<h3>Geschäftseinführung</h3>
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
      <section class="steelProduct steelProductList">

        <div class="innerWrap">
          <div class="tabSliderWrap p0">
            <div class="swiper-container tabSlider swiper-container-initialized swiper-container-horizontal">
              <div class="swiper-wrapper">
                <div class="swiper-slide <?=($clCode=='')?'on':''?>"><a href="javascript:void(0);">Spezielle Schweißmaterialien</a></div>
                <div class="swiper-slide <?=($clCode=='2')?'on':''?>"><a href="javascript:void(0);">Nichteisenmetall (SZW)</a></div>
                <div class="swiper-slide <?=($clCode=='3')?'on':''?>"><a href="javascript:void(0);">Andere schweißbezogene Materialien</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="steelProductWrap innerWrap">
          <div class="steelProductList steelProductList01">
              <ul>
                <li>
                  <div class="steelProductText">
                    <h5>Niedriglegierte Schweißmaterialien</h5>
                    <p class="text-style1">Hochfeste Stähle, Hitzebeständige Stähle, Niedertemperatur-Zähigkeitsstähle</p>
                    <p class="text-blit text-style1">ER80S-Ni1, 80S-D2, 80S-B2, 90S-BS, 100S-G, 110S-G, 90S-B9, 90S-G </p>
                    <p class="text-style1">&nbsp; &nbsp / EB2-B2, EB2R, 3B3, EA2, EA2TIB, EF3</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct01.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Schweißmaterialien aus rostfreien Legierungen</h5>
                    <p class="text-style1">Ni-Cr-Mo. STS (Duplex, Super Duplex)</p>
                    <p class="text-blit text-style1">ER309MOL, 310, 312, 347, 307Si, 410, 430NLB, 2209, 2594, 385</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct02.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Schweißmaterialien aus Nickellegierungen</h5>
                    <p class="text-style1">Inconel, Hastelloy</p>
                    <p class="text-blit text-style1">ERNi, NiCrFe-5, NiFeCr-1, NiFeCr-2, NiCrMo-3, NiCrMo-4, NiCrMo-10,
                      NiCrMo-14, NiCrCoMo-1, NiCr-3, NiMo-8, CuNi, Ni-1, NiCu-7</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct03.jpg" alt="" /></div>
                </li>
              </ul>
          </div>
          <!-- tab01 -->
          <div class="steelProductList steelProductList02" style="display:none;">
              <ul>
                <li>
                  <div class="steelProductText">
                    <h5>Schweißmaterialien aus Aluminiumlegierung</h5>
                    <p class="text-style1">Aluminiumlegierung</p>
                    <p class="text-blit text-style1">ER1070, 1080, 4043, 4047, 5087, 5183, 5356, 5554, 5556, 5754</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct04_1.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Schweißmaterialien aus Kupferlegierungen</h5>
                    <p class="text-style1">Kupferlegierung</p>
                    <p class="text-blit text-style1">MIG & TIG :  ERCu, CuSi-A, CuSn-A, CuSn-C, CuAl-A1&A2&A3, CuNiAl, CuMnNiAl, CuNi </p>
                    <p class="text-blit text-style1">피복봉 : ECuSn-C, Cu, CuAl-A2, CuSi, CuNi</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct05.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Schweißmaterialien aus Titanlegierung</h5>
                    <p class="text-style1">Titanlegierung</p>
                    <p class="text-blit text-style1">ERTi-1, Ti-2, Ti-5, Ti-7, Ti-12</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct06.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Löttechnik</h5>
                    <p class="text-style1">Hart- und Weichlot</p>
                    <p class="text-blit text-style1">Aluminium, Kupfer, Silberlot & Flußmittel</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct07.jpg" alt="" /></div>
                </li>
              </ul>
          </div>
          <!-- tab02 -->
          <div class="steelProductList steelProductList03" style="display:none;">
              <ul>
                <li>
                  <div class="steelProductText">
                    <h5>Kohleelektroden</h5>
                    <p class="text-style1">Kohleelektroden</p>
                    <p class="text-blit text-style1">DC Copper Coated Pointed / Jointed / Flat / Hollow Core Gouging Rods</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct08.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Wolframelektroden</h5>
                    <p class="text-style1">Wolframelektroden</p>
                    <p class="text-blit text-style1">Thorium-Wolfram / Lanthan-Wolfram / Cer-Wolfram / Zirkon-Wolfram / Yttrium-Wolfram / Reines Wolfram / Verbund-Wolfram-Elektrode</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct09.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Zinkdraht</h5>
                    <p class="text-style1">Zinkdraht</p>
                    <p class="text-blit text-style1">ZINC WIRE, ZINC AL WIRE, GALVALUM WIRE</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct10.jpg" alt="" /></div>
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
      slidesPerView: 'auto'
    });


    $('.tabSlider .swiper-slide').click(function() {
      $(this).addClass('on');
      $(this).siblings('.swiper-slide').removeClass('on');

      var tabIndex = $(this).index();

      $('.steelProductList').eq(tabIndex + 1).show();
      $('.steelProductList').eq(tabIndex + 1).siblings().hide();


    });
  </script>
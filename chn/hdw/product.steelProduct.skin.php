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
		<h3>事业介绍</h3>
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
                <div class="swiper-slide on"><a href="javascript:void(0);">板材类</a></div>
                <div class="swiper-slide"><a href="javascript:void(0);">钢管类</a></div>
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
                    <h5>厚板</h5>
                    <p class="text-style1">
						热轧钢板的厚度在6毫米以上的称为厚板。厚板产品的主体是碳素钢，除此之外还有高强钢、合金钢、不锈钢等。 用于船舶、锅炉、压力容器、桥梁等大型构件。
					</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct02.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>热轧</h5>
                    <p class="text-style1">
						将平板加热后制作成厚度较薄的线圈的过程是热轧，通过这种方法生产出来的就是中间材料（半成品）热轧线圈（热轧）。 主要用于汽车、建设、造船、管道、产业机械等整个产业领域的素材。
					</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct03.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>冷轧</h5>
                    <p class="text-style1">
						冷轧是使热轧线圈更薄，表面更加光滑的。 主要用于汽车框架、家电、桶领域的素材。
					</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct04.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>不锈钢钢板</h5>
                    <p class="text-style1">
						在低碳钢中加了大量的铬或铬和镍，耐腐蚀性好，擦洗后呈漂亮的银白色。 主要用于建筑内外装料、电梯、厨房设备及汽车配件等多个产业领域。
					</p>
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
                    <h5>钢管</h5>
                    <p class="text-style1">
						钢管用热轧钢板以圆形管形态整形后，通过电阻焊接方式和电弧焊接方式以多种规格生产。主要用于油田开发、输油管用、普通管道用、结构用、换热器用、农业用、电线管用等广泛使用。
					</p>
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
                    <h5>棒型钢</h5>
                    <p class="text-style1">
						型钢是指H型、L型等以一定单面形状事先成型的长钢的总称。 断面为圆形或角形的称为钢管。主要用于土木、建筑用柱子或梁柱、基础桩和机械产品等。
					</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct09.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>철근 Reinforcing Bar</h5>
                    <p class="text-style1">철근이란 철로 막대 모양으로 만들어져 주로 인장력을 맡는 건설 재료로, 토목 공학, 건축 공학 등에서 매우 중요하게 다루는 역학 구조체 중 하나이다. 보통 재료는 탄소강이며, 따로 쓰기 보다는 압축력을 받는 콘크리트와 합쳐 철근 콘크리트 구조물로 만들어진다.</p>
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
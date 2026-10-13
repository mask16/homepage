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
		<h3>事業紹介</h3>
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
                <div class="swiper-slide on"><a href="javascript:void(0);">板材タイプ</a></div>
                <div class="swiper-slide"><a href="javascript:void(0);">鋼管タイプ</a></div>
                <div class="swiper-slide"><a href="javascript:void(0);">棒型鋼タイプ</a></div>
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
                    <h5>厚板 Steel Plate</h5>
                    <p class="text-style1">
						一般的に熱間圧延鋼板の厚み6㎜以上のものを厚板といいます厚板の製品は炭素鋼が主ですが、それ以外にも高張力鋼、合金鋼、ステンレス鋼などがあります船舶、ボイラー、圧力容器、橋梁などの大型構造物に使用されます
					</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct02.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>熱延 Hot Rolled Steel</h5>
                    <p class="text-style1">
						スラブを過熱して厚さが薄いコイル状に作る過程が熱間圧延であり、これを通して生産されるのが中間素材(半製品)であるホットコイル(熱延)です主に自動車、建設、造船、パイプ、産業機械など産業分野全般に使用される素材として使われます
					</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct03.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>冷延 Cold Rolled Steel</h5>
                    <p class="text-style1">
						熱延コイルをより薄く作り表面を滑らかに処理たものが冷延です主に自動車のフレーム、家電、ドラム分野に使用される素材として使われます
					</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct04.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>ステンレス鋼板 Stainless Steel</h5>
                    <p class="text-style1">
						低炭素鋼に大量のクロムまたはクロムとニッケルを添加したものであり、耐腐食性が良く、磨いたら美しい銀白色を帯びます主に建築内外材、エレベーター、厨房器材及び自動車部品など様々な分野で使用されます
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
                    <h5>鋼管 Steel Pipe</h5>
                    <p class="text-style1">
						鋼管は熱延鋼板を円形管に成型後、電気抵抗溶接方式とアーク溶接方式を通して様々な規格で生産されています主に油田開発用、送油菅用、一般配管用、構造用、熱交換機用、農業用、電線菅用など広範囲において使われています
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
                    <h5>形鋼 H-Section</h5>
                    <p class="text-style1">
						形鋼とは、H形、L形など一定な断面の形で事前に成型された長い鋼鉄の総称であります断面が円形、または正方形の空断面であるのを鋼管といいます主に土木、建築用柱や梁、基礎用の杭や機械製品などに使用されます
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
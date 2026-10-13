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
        <p>Business</p>
        <h3>사업소개</h3>
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
                <div class="swiper-slide on"><a href="javascript:void(0);">판재류</a></div>
                <div class="swiper-slide"><a href="javascript:void(0);">강관류</a></div>
                <div class="swiper-slide"><a href="javascript:void(0);">봉형강류</a></div>
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
                    <h5>후판 Steel Plate</h5>
                    <p class="text-style1">열간압연 강판의 두께 6㎜ 이상의 것을 일반적으로 후판이라고 한다. 후판 제품은 탄소강이 주체이나, 그 외에도 고장력강, 합금강 스테인리스강 등도 있다. 선박, 보일러, 압력용기, 교량 등의 대형 구조물에 사용된다.</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct02.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>열연 Hot Rolled Steel</h5>
                    <p class="text-style1">슬래브를 가열해 두께가 얇은 코일로 만드는 과정이 열간압연이며, 이를 통해 생산된 것이 중간소재(반제품)인 핫코일(열연)이다. 주로 자동차, 건설, 조선, 파이프, 산업기계 등 산업 전 분야에 사용되는 소재로 쓰인다.</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct03.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>냉연 Cold Rolled Steel</h5>
                    <p class="text-style1">열연코일을 더 얇게 만들고 표면을 매끄럽게 처리한 것이 냉연이다. 주로 자동차프레임, 가전, 드럼분야에 사용되는 소재로 쓰인다.</p>
                  </div>
                </li>
                <li>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct04.jpg" alt="" /></div>
                  <div class="steelProductText">
                    <h5>스텐레스 강판 Stainless Steel</h5>
                    <p class="text-style1">저탄소강에 대량의 크롬 또는 크롬과 니켈을 가한 것으로, 내식성이 좋고 닦으면 아름다운 은백색을 띤다. 주로 건축 내외장재, 엘리베이터, 주방기기 및 자동차 부품 등 여러 산업분야에 사용된다.</p>
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
                    <h5>강관 Steel Pipe</h5>
                    <p class="text-style1">강관은 열연강판을 원형관의 형태로 성형 후 전기저항용접 방식과 아크용접방식을 통해 다양한 규격으로 생산된다.  주로 유전개발용, 송유관용, 일반배관용, 구조용, 열교환기용, 농업용, 전선관용 등 광범위하게 사용된다.</p>
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
                    <h5>형강 H-Section</h5>
                    <p class="text-style1">형강(形鋼)이란 H형, L형 등 일정한 단면 모양으로 미리 성형된 긴 강철의 총칭이다. 단면이 원형 또는 각형의 공단면인 것을 강관이라고 한다. 주로, 토목, 건축용 기둥이나 들보, 기초 말뚝과 기계 제품 등에 사용된다.</p>
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
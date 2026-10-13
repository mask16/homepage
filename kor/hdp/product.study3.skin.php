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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>현대 PNS의 연구소에서 용접기를<br />개발하고 있는 방향입니다.</b></h5>
          <h6 class="titStyle1 c-gray"><p>개발방향</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>제품 안정성</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">고온, 다습, 먼지 등 외부환경 변화에 구애 받지 않는 시스템 개발</p>
              <p class="text-blit">우수한 내구성 및 보존성</p>
              <p class="text-blit">다중 보호회로 기능 채택</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>고기능성</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">SAC, SPC 등 다양한 펄스제어 기법으로 비철계라인 용접기술 개발</p>
              <p class="text-blit">대전류 Inverter SAW 용접시스템 개발 및 안정화</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>고효율</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">고속스위칭 &amp; 소프트스위칭 Full Bridge 제어의 인버터 시스템으로 90%이상의 효율 구현</p>
              <p class="text-blit">대기전력을 최소화하여 전기효율 최적화</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>고객 맞춤형</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">9% Ni, High Mn 등 LNG 선박 용접을 위한 시너직 개발</p>
              <p class="text-blit">2.4mm 와이어를 안정되게 송급하기 위한 캐리지 개발</p>
              <p class="text-blit">5Pole이상의 Multi-Pole 용접시스템 개발</p>
              <p class="text-blit">로봇, 겐트리, PLC 등 다양한 자동화 장비와의 완벽한 호환성</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
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
      <section class="businessGloville innerWrap">
        <div class="conPd">
          <h5 class="titStyle5"><b>주요 사업영역부분은 수출/입 화물과 내륙운송 서비스이며, 이밖에 화물보관, 수출포장, 공항업무대행, 특수화물 운송 등의 물류서비스를 제공하고 있습니다</b></h5>

          <div class="businessGlovilleWrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>수출입/내수 화물운송</b></h6>
              <p class="text-blit">AIR/OCEAN 수출입 LCL  FCL 화물운송</p>
              <p class="text-blit">국내 내수 화물운송(기업물류)</p>
              <p class="text-blit">특수화물운송 : 대형플랜트, 냉장, 전시물</p>
              <p class="text-blit">프로젝트화물</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville01.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>3PL/창고보관</b></h6>
              <p class="text-blit">재고관리, 창고관리, 수 배송, 검수, 포장 등</p>
              <p class="text-blit">전국 주요 물류센터 내 창고보관 서비스</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville02.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>공항/ 항만업</b></h6>
              <p class="text-blit">공항 셔틀운송, ULD운송</p>
              <p class="text-blit">창고보관,입출고관리,기타업무대행</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville03.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>수출화물 포장</b></h6>
              <p class="text-blit">최신포장 설비와 최상의 작업환경(밀폐포장,SKID, 진공포장 등)</p>
              <p class="text-blit">포장 > 운송 연계를 통한 고객 물류 비 절감</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville04.png" alt="" /></div>

            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
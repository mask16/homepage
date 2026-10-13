<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndField.skin.php
+ Description	: product.bwtsRndField
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
      <section class="RnDField">
        <div class="conPd">
          <h5 class="titStyle5"><b>현대종합금속 기계사업부에서 꾸준히 연구하며,<br/> 발전시키고 있는 분야입니다.</b></h5>
        </div>
        <div class="RnDFieldImg"></div>
        <div class="RnDFieldCon">
          <div class="conPd">
            <div class="">
              <h6 class="titStyle3"><b>BWTS 연구개발</b></h6>

              <p class="text-blit">BWTS의 운전 신뢰도 및 가용도 향상을 위한 해수 전기분해 장치 개발</p>
              <p class="text-blit">수질 및 대기오염 방지를 위한 친환경 프로세스 및 관련제품 개발</p>
              <p class="text-blit">BWTS 소재 분석 평가 및 전기화학 분야의 기초 연구</p>
              <p class="text-blit">유동해석 기반의 시스템 성능 향상 및 설계 최적화 연구</p>
              <p class="text-blit">친환경 선박용 기자재(Hi-CON, Hi-Power V) 품질 향상 연구</p>
            </div>
            <div class="">
              <ul class="RnDFieldList">
                <li>
                  <p><b>전극 소재 개발</b></p>
                  <div class="right">
                    <img src="<?=$skin_url?>/img/content/bwtsRnD_img01.jpg" />
                  </div>
                </li>
                <li>
                  <p><b>고효율 전해조 개발</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img02.jpg" />
                </div>
                </li>
                <li>
                  <p><b>유체 및 열 유동 해석</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img03.jpg" />
                  </div>

                </li>
                <li>
                  <p><b>3D Modeling</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img04.jpg" />
                  </div>

                </li>
              </ul>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
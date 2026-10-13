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
          <h5 class="titStyle5"><b>현대종합금속의 연구소에서 용접재료를<br />개발하고 있는 방향입니다.</b></h5>
          <h6 class="titStyle1 c-gray"><p>개발방향</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>환경 친화형</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Low 흄 용접재료 개발</p>
              <p class="text-blit">Low Mn 용접재료 개발</p>
              <p class="text-blit">Low 스패터 용접재료 개발</p>
              <p class="text-blit">Self-Shielded 플럭스 코어드 와이어 개발</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>고기능성</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">극저온 CTOD 특성이 우수한 용접재료 개발</p>
              <p class="text-blit">Offshore용 초고강도/고인성 용접재료 개발</p>
              <p class="text-blit">내흡습 극저수소계 용접재료 개발</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>고능률</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">일렉트로 가스 용접재료 개발</p>
              <p class="text-blit">고속 용접용 메탈코어드 와이어 개발</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>신강종 연계형</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">플랜트 저장 Tank용 Self Shield EGW 개발</p>
              <p class="text-blit">고강도 FCW 개발</p>
              <p class="text-blit">해양구조물 S500, S550, S690강용 용접재료 개발</p>
              <p class="text-blit">자동화, 고효율화, 고속화, 경량화 등 新용접공정 용접재료 개발</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
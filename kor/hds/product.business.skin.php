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
      <section class="productStudy1">
        <div class="innerWrap conPd">
          <h5 class="titStyle5"><b>현대슈퍼텍은 고객에게 최적의 용접 솔루션을 제공하는 특수용접 전문 기업입니다.</b></h5>
        </div>
        <div class="productStudyImg"></div>
        <div class="innerWrap productStudy1Con">
          <div class="conPd">
            현대슈퍼텍은 고객의 특별한 용접 환경에 적합한 높은 품질의 특수용접재료와 비철합금 용접재료,
            기타 용접 관련 부자재의 공급을 통해, 고객에게 최적의 용접 솔루션을 제공하는 특수용접 전문 기업입니다.

          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
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
			<p>HYUNDAI SUPERTECK</p>
        <h3>Направление бизнеса</h3>
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
          <h5 class="titStyle5"><b>Hyundai Superteck - профессиональная компания, специализирующаяся на специальных сварочных материалах, чтобы предоставить клиентам лучшие сварочные решения.</b></h5>
        </div>
        <div class="productStudyImg"></div>
        <div class="innerWrap productStudy1Con">
          <div class="conPd">
            Hyundai Superteck - это специальная сварочная компания, которая предлагает клиентам лучшие сварочные решения, поставляя высококачественные специальные сварочные материалы, материалы для сварки цветных металлов и другие сварочные материалы, подходящие для их особых условий сварки.

          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
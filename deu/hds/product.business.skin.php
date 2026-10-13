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
      <section class="productStudy1">
        <div class="innerWrap conPd">
          <h5 class="titStyle5"><b>Hyundai Superteck ist ein professionelles Unternehmen, das auf spezielle Schweißmaterialien spezialisiert ist, um den Kunden die besten Schweißlösungen zu bieten.</b></h5>
        </div>
        <div class="productStudyImg"></div>
        <div class="innerWrap productStudy1Con">
          <div class="conPd">
            Hyundai Superteck ist ein Unternehmen, welches seinen Kunden die beste Schweißlösung bietet möchte, indem es hochwertige Spezialschweißmaterialien und andere schweißbezogene Materialien liefert, die für ihre spezielle Schweißumgebung geeignet sind.
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
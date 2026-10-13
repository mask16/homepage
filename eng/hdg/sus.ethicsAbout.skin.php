<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsAbout.skin.php
+ Description	: sus.ethicsAbout
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI GLOVILLE</p>
        <h3>Sustainable Management</h3>
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

    <div class="subContent conPd">
      <section class="susWrap susAbout">

        <div class="subTitleArea">
          <p class="titStyle7 pb10"><b>We pursue honesty, fairness, and integrity.</b></p>
          <h3 class="titStyle5"><b>Purpose and Necessity of Ethics Management</b></h3>
        </div>

        <div class="text-style1">
          In line with the new era, Hyundai Welding will introduce "ethics management" that seeks transparent, fair and reasonable employee performance.
		  Ethics management is based on the notion that short-term profits cannot lead to sustainable growth.
		  It also corrects irrational practices in the company, establishes employee values in performing their duties, and fulfills corporate social responsibilities.
		  Currently, international organizations such as WTO, OECD and ICC are pushing for corruption prevention.
		  UNEF and ISO are also pushing for the standardization of ethical management in order to apply fair and transparent competition regulations to international commerce.
		  Through this new strategy, we will strive to achieve continuous development by satisfying the ethical ideology of all stakeholders and establishing a new corporate culture.
		  Hyundai Welding will ultimately lay the foundation for grow into a top-notch 21st century global company through ethical management.
        </div>

        <div class="susAboutContent">
            <div class="left">
              <div class="circieBlue circieBlue1">Transparent<br />values</div>
              <div class="circieBlue circieBlue2">Fair<br />performance</div>
            </div>
            <div class="bar"></div>
            <div class="right">
              <div class="circleBlueLine">Social trust in<br />corporate ethics</div>
            </div>
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
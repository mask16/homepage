<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.ceo.skin.php
+ Description	: about.ceo
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualAbout">
	<div class="innerWrap">
		<div class="visualText">
			<p>ABOUT US</p>
			<h3>Company Introduction</h3>
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
      <section class="aboutWrap aboutCeo">

        <div class="subTitleArea">
          <h3 class="titStyle5"><b>We appreciate you visiting the Hyundai Welding website.</b></h3>
        </div>
        <div class="text-style1">
          Since our establishment in 1975, Hyundai Welding has been producing high-quality welding consumables through continuous research and development, along with, active investment in cutting-edge manufacturing facilities. Now, we are No.1 in the domestic market, as well as,globally being recognized as the World's Best Welding Company.<br />
          In addition, Hyundai Welding has developed and supplies the latest welding equipment, such as, digital inverter welding machines suitable for a variety of industries, as well as, our new eco-friendly business, BWTS.<br /><br />

          We will continue to cultivate talent by accepting challenges and by innovating. Moreover, we will achieve innovation in quality and R&D through the development of the latest welding equipment. We will provide better services and welding solutions to all of our customers across all industries - Shipbuilding, Offshore, Heavy Industries, Plants, Automotive, Construction, Pipelines, and Green Energy.<br /><br />

          Hyundai Welding has always put high value on customer-centered management and a challenging spirit. We will always endeavor to be a company that fulfills dreams with our customers.<br /><br />

          Hyundai Welding sincerely wants to thank it's customers for their continued interest and support. 
          <p class="tar ceoName">Hyundai Welding CEO</p>

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
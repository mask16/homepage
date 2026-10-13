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

    <div class="subContent innerWrap">
      <section class="aboutWrap aboutCeo conPd">

        <div class="subTitleArea">
          <h3 class="titStyle5">
			<b>
				Welcome to Hyundai Gloville.
			</b>
		</h3>
        </div>
        <div class="text-style1">
          We continue to innovate logistics efficiency and serviceability, in order to maximize customer value.
		  <br /><br />
         We continue to provide customized logistics solutions to our clients, in order to adapt to the challenges in the era of the Fourth Industrial Revolution.
		  <br /><br />
          Our company's mission statement is to "implement our management performance capabilities and create new values so that our customers 
          and employees can co-prosper, realize their creative imagination, and help to become the best company."
		  <br /><br />
          We will continue to secure new growth engines and practice responsible management to become a global logistics company.
		  <br /><br />
          We will constantly face challenges in the process of increasing our customer value. We ask for your interest and encouragement.
		  <br /><br />
          Thank you.

          <p class="tar ceoName">CEO <span>Joo Hyong Park</span></p>

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
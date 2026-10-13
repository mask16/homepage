<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiSimul.skin.php
+ Description	: product.bwtsHiSimul
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI WELDING</p>
			<h3>Business Introduction</h3>
		</div>
	</div>
</section>


  <div class="subWrap">
    <section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
		<!-- subNav -->
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
		<!--//subNav -->
	</section>

	<div class="subContent">
      <div class="innerWrap">

        <!-- Hi-Simul K - ENG -->
        <!-- URL: https://www.hyundaiwelding.com/eng/hdw/product/bwtsHiSimul -->
        <div class="sr-only">
          <h1>Hi-Simul K – A simulation kit for learning HiBallast Control System</h1>
          <h2>Customized training with possible scenarios</h2>
          <h2>Hi-Simul K – A simulator featuring the same HMI as HiBallast</h2>
          <h3>Compact Design</h3>
        </div>

        <div class="btwsProduct btwsProduct-simul">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-Simul K is an operator training simulator that provides users with a system operation experience similar to onboard conditions by implementing the HiBallast system virtually and has the following main features.
			  <br /><br />

              <p class="bar-text">Provide actual HiBallast operating condition with vessel's system</p>
              <p class="bar-text">Improving the user's ability to cope with any circumstance by applying various scenario modes.</p>
              <p class="bar-text">Realistic sensor measurement value monitoring through application of realistic conditions and high-dimensional estimation model</p>
              <p class="bar-text">Create various situation by adjusting operation setting</p>
              <p class="bar-text">Online education available</p>
              <p class="bar-text">Portable educational device</p>
            </div>
          </div>
          <div class="btImg">
            <img src="<?=$skin_url?>/img/content/simul_btImg03.jpg" alt="" />
          </div>
            <img src="<?=$skin_url?>/img/content/simul_btImg04.jpg" alt="" />
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
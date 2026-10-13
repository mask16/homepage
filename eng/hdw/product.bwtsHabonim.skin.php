<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiBallastNF.skin.php
+ Description	: product.bwtsHiBallast
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

        <!-- HABONIM Cryogenic Ball Valve - ENG -->
        <!-- URL: https://www.hyundaiwelding.com/eng/hdw/product/bwtsHabonim -->
        <div class="sr-only">
          <h1>HABONIM valves are equipped with the Total HermetiX integrity package</h1>
          <h2>Zero fugitive-emission, no-maintenance stem sealing</h2>
          <h2>Double body sealing</h2>
          <h3>HermetiX™ stem sealing design</h3>
          <h3>Body-to-ends &amp; body-to-bonnet double sealing</h3>
        </div>

        <div class="btwsProduct btwsProduct-hiBallast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_habonim.png" alt="" /></h2>
            <div class="topImg">
              <div class="left text-style1">
                Habonim is a leading manufacture of high-end ball valves and pneumatic actuators with 75 years of expertise in industrial applications. <br>
                Hyundai Welding is a Habonim’s authorized distributor for Industrial Valves & Actuators in South Korea and Japan.
              </div>
            </div>

            <div class="topImg">
              <div class="left text-style1">
                <span style="font-size:1.2em;"><b style="color:#12357d; font-weight:900;">Advantage</b></span><br>
                <img src="<?=$skin_url?>/img/content/habonim_img_01.png" alt="" />
                <br/>
                <div class="left text-style1">
                As a standard, most of HABONIM valves are equipped with the Total HermetiX integrity package 
                <br>comprised of three main elements and a superior inline sealing mechanisms in some of them:
              </div></br>

                <b style="font-weight:600;">Zero fugitive-emission no maintenance stem sealing</b>
                  <p class="bar-text" style="font-weight:200;">HermetiX™ stem sealing design with zero fugitive emission sealing capability.</p>
                  <p class="bar-text" style="font-weight:200;">Tested or certified according to ISO 15848-1 and API641 standards.</p>
                  <p class="bar-text" style="font-weight:200;">Up to 500,000 cycles of operation with no maintenance  guaranteed.</p>
                  <p class="bar-text" style="font-weight:200;">Field proven for millions of cycles continuous operation.</p>
                <br/>
                <b style="font-weight:600;">Double body sealing</b>
                <p class="bar-text" style="font-weight:200;">Body-to-ends & body-to-bonnet double sealing for superior atmospheric sealing.</p>
                <p class="bar-text" style="font-weight:200;">Selection of sealing materials for diverse applications.</p>
                <p class="bar-text" style="font-weight:200;">Fugitive emission prevention.</p>
                <br/>
                <b style="font-weight:600;">Fire safe</b>
                <p class="bar-text" style="font-weight:200;">Tested and cerified according to API 607 & ISO 10497.</p>
                <p class="bar-text" style="font-weight:200;">Type-tested and certified by leading certification bodies for marine service.</p>
                <p class="bar-text" style="font-weight:200;">Clean fire-safe construction guarantees no graphite contamination of the media flow.</p>
              </div>
            </div>
          </div>

          <div class="left text-style1">
          <span style="font-size:1.2em;"><b style="color:#12357d; font-weight:900;">Product Line</b></span></div><br /><br />
           <div class="btImg"style="text-align: center;"><img src="<?=$skin_url?>/img/content/habonim_img_02.png" alt="" style="width: 60%; height: auto;"/></div>
          <br /> <br /><br /><br /><br /><br />


          <div class="topImg">
            <div class="left text-style1">
            <span style="font-size:1.2em;"><b style="color:#12357d; font-weight:900;">Product Range</b></span>
              <br/>
              <b class="bar-text" style="font-weight:500;line-height:1.5;">Trunnion & Floating Ball valves</b>
                <p style="font-size:0.9em;font-weight:200;margin-left:40px;line-height:1.5;"> * Sizes ½’’ up to 14’’ (DN15 – DN400)</p>
                <p style="font-size:0.9em;font-weight:200;margin-left:40px;line-height:1.5;"> * Vacuum up to 1,000 bar (15,000psi)</p>
                <p style="font-size:0.9em;font-weight:200;margin-left:40px;line-height:2.5;"> * -269℃(-450℉) up to 650℃(1200℉)</p>

              <b class="bar-text" style="font-weight:500;line-height:2.5;">Total HermetiX™ Integrity Package</b>
              <br/>
              <b class="bar-text" style="font-weight:500;line-height:2.5;">Pneumatic Actuators</b>
              <br/>
              <b class="bar-text" style="font-weight:500;line-height:2.5;">Controlled packages</b>
            </div>
            </div>


            <div class="topImg">
            <div class="left text-style1">
              <span style="font-size:1.2em;"><b style="color:#12357d; font-weight:900;">Standards & Certification</b></span><br /><br />
            <div class="btImg"style="text-align: center;"><img src="<?=$skin_url?>/img/content/habonim_img_03.png" alt="" /></div>
            </div></div>

            <style>
            .bar-text a {
              color: #444444; /* 진회색 */
              text-decoration: underline;
              transition: color 0.2s ease;
            }

            .bar-text a:hover {
              color: #0066cc; /* 파란색 */
            }
          </style>
          <div class="left text-style1">
            <span style="font-size:1.2em;">
              <b style="color:#12357d; font-weight:900;">HABONIM & ITT Company Website</b>
            </span>
            <p class="bar-text" style="font-weight:400;">
              <a href="https://habonim.com/" target="_blank" style="display:block; text-decoration:underline;">https://habonim.com/</a>
            </p>
            <p class="bar-text" style="font-weight:400;">
              <a href="https://www.itt.com/" target="_blank" style="display:block; text-decoration:underline;">https://www.itt.com/</a>
            </p>
          </div>
            </div>

        </div>

        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- subWrap// -->
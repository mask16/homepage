<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.history.skin.php
+ Description	: about.history
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

    <div class="subContent">
      <section class="aboutWrap aboutHistory">

        <div class="subTitleArea conPd">
    <!--      <h3 class="fontPop titStyle5"><b>World-class welding specialist</b></h3>
          <div style="font-size: 16px; font-weight: 400;">
       		Hyundai PNS is a global welding specialist that provides top welding solutions to customers through the supply of welding materials and welding equipment of the highest quality.
			<br>
			Welding is an indispensable material for industrial development, and Hyundai PNS has been a partner of remarkable development and success to the development of Korea's heavy industries for about 40 years.
			<br>
			We have currently established production plants and sales subsidiaries in 18 countries, and we export welding materials and welding equipment to over 80 countries.
			In 2009 we achieved a 200 million dollar export for the first time in the domestic welding industry, and we are continuing to grow.
		  </div>-->
          <h3 class="fontPop titStyle5"><b>Learn more about Hyundai PNS<br /> growth story.</b></h3>
        </div>
        <div class="historyContent conPd" style="margin-top: 50px;">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2011 -</p>
                  <ul>
                    <li><span>2019</span> Produced Premium welding machine Hi Series </li>
                    <li><span>2017</span> Produced DIGITAL INVERTER welding machine H Series</li>
                    <li><span>2014</span> Produced DIGITAL INVERTER welding machine Pulse MIG welding machine production, NEO series</li>
                    <li><span>2013</span> Produced DIGITAL INVERTER multifunction device production</li>
                    <li><span>2012</span> Produced DIGITAL INVERTER PLASMA welding machine (NEO PW 300)</li>
                    <li><span>2012</span> Environmental test for ship rectifiers (Hi POWER 50D & 75D)</li>
                    <li><span>2011</span> Produced DIGITAL INVERTER automation TIG welding machine (NEO TIG 350P)</li>
                    <li><span>2011</span> Environmental test for ship rectifier (Hi POWER 100D)</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2001 - 2010</p>
                  <ul>
                    <li><span>2010</span> Manufactured DIGITAL MAG welding machine (LIBERO), conducted environmental test for ship rectifier (Hi POWER 35D)</li>
                    <li><span>2009</span> Produced SCR aluminum-only MIG welding machine</li>
                    <li><span>2008</span> Produced DIGITAL CO2/MAG 600 (FINE ARC II)</li>
                    <li><span>2007</span> Produced DIGITAL CO2/MAG welding machine (HD Auto + Series)</li>
                    <li><span>2001</span> Merged with Sungwoo Industry Co., Ltd. Hyundai welding Co., Ltd. Registered welding machine technology research center (Korea Industrial Technology Association)</li>
                    <li><span>2001</span> Produced DC SAW 1500(ZEUS1500) / AC SAW1500(HERA1500A)</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1991 -2000</p>
                  <ul>
                    <li><span>2000</span> Inverter CO2/MAG welding machine production (FINE ARC 350)</li>
                    <li><span>1999</span> Technical alliance with SANREX in Japan</li>
                    <li><span>1998</span> Started production of SCR welding machine (DYNAMIC AUTO Series)</li>
                    <li><span>1997</span> Sungwoo Industry Co., Ltd. Icheon Plant completed</li>
                    <li><span>1995</span> Established Sungwoo Precision Industry</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1981 - 1990</p>
                  <ul>
                    <li><span>1987</span> Changed the company name to Hyundai Welding Co., Ltd.</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1975 - 1980</p>
                  <ul>
                    <li><span>1977</span> Pohang welding rod factory completed</li>
                    <li><span>1975</span> Established Seohan Development Co., Ltd.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
  <script>
    var swiper = new Swiper('.historySlider', {
      slidesPerView: 'auto',
      spaceBetween: 30,
    });
  </script>
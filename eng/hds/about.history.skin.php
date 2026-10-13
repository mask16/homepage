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
          <h3 class="fontPop titStyle5"><b>Learn more about Hyundai Superteck<br /> growth story.</b></h3>
        </div>
        <div class="historyContent conPd">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2015 -</p>
                  <ul>
                    <li><span>2020.11</span>   Started special alloy steel business (stainless steel, aluminum, heat-resistant steel, wear-resistant steel, etc.)</li>
                    <li><span>2020.10</span>   Started thermal spray wire business (ZINC, STS, Ni., etc.) </li>
                    <li><span>2020.08</span>   Started brazing & soldering material business</li>
                    <li><span>2020.07</span>   Started tungsten rod business</li>
                    <li><span>2020.06</span>   Started gousing rod business</li>
                    <li><span>2018.07</span>   Started aluminum welding product drum types (80kg ~ 173kg) business</li>
                    <li><span>2018.05</span>   Acquired CE, TUV certification for HIGH TENSILE STRENGTH welding products</li>
                    <li><span>2018.03</span>   Acquired DNV-GL, CE, DB, TUV certification for aluminum welding products</li>
                    <li><span>2017.12</span>   Started copper welding product business</li>
                    <li><span>2017.09</span>   Started aluminum welding product business</li>
                    <li><span>2015.01</span>   Started special alloy welding rod business that can be applied to structures that require special and high functions-Duplex, Super Duplex, Inconel, Hastelloy, Cr-Mo heat-resistant steel, cryogenic, corrosion resistance, high strength, seismic design, low temperature toughness, etc</li>
                    <li><span>2015.01</span>   Establishment of Hyundai Superteck</li>
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
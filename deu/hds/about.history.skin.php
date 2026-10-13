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
			<p>HYUNDAI SUPERTECK</p>
			<h3>Unternehmensvorstellung</h3>
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
                    <li><span>2020.11</span>   Beginn des Geschäfts mit legiertem Spezialstahl (Edelstahl, Aluminium, hitzebeständiger Stahl, verschleißfester Stahl usw.)</li>
                    <li><span>2020.10</span>   Beginn des Geschäfts mit thermischen Spritzdraht (ZINC, STS, Ni. Usw.)</li>
                    <li><span>2020.08</span>   Beginn des Löt- und Lötmaterialgeschäfts</li>
                    <li><span>2020.07</span>   Beginn Wolframelektroden-Geschäft</li>
                    <li><span>2020.06</span>   Beginn Kohleelektroden-Geschäft</li>
                    <li><span>2018.07</span>   Beginn des Geschäfts mit Fassware Aluminiumschweißzusätze (80 kg ~ 173 kg)</li>
                    <li><span>2018.05</span>   Erhalt der CE- und TÜV-Zertifizierung für Schweißprodukte mit hoher Zugfestigkeit</li>
                    <li><span>2018.03</span>   Erhalt der DNV-GL-, CE-, DB- und TÜV-Zertifizierung für Aluminiumschweißzusätze</li>
                    <li><span>2017.12</span>   구리 용접봉 사업 개시</li>
                    <li><span>2017.09</span>   Beginn des Geschäfts mit Aluminiumschweißzusatzwerkstoffen</li>
                    <li><span>2015.01</span>   Gründung von Hyundai Superteck</li>
                    <li><span>       </span>   Beginn des Geschäfts mit Speziallegierungen (SZW), Duplex, Super Duplex, Inconel, Hastelloy, Cr-Mo, hitzebeständiger Stahl, kryogen, Korrosionsbeständigkeit, hohe Festigkeit, hohe Zähigkeit bei niedrigen Temperaturen, usw</li>
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
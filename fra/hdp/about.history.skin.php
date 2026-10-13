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
			<p>HYUNDAI PNS</p>
			<h3>Accueil</h3>
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
          <h3 class="fontPop titStyle5"><b>En savoir plus sur Hyundai PNS</b></h3>
        </div>
        <div class="historyContent conPd" style="margin-top: 50px;">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2011 -</p>
                  <ul>
                    <li><span>2019</span> Production de la poste à souder au haut de gamme (Hi Series)</li>
                    <li><span>2017</span> Production des postes à souder inverter numériques (H Series)</li>
                    <li><span>2014</span> Production des postes à souder inverter numériques impulsion MIG et NEO Series </li>
                    <li><span>2013</span> Production d'appareils multifonctions inverter numérique</li>
                    <li><span>2012</span> Production de la poste à souder plasma inverter numérique (NEO PW 300)</li>
                    <li><span>2012</span> Test environnemental pour les rectificateurs de navires (Hi POWER 50D & 75D)</li>
                    <li><span>2011</span> Production de la poste à souder TIG inverter automatique et numérique (NEO TIG 350P)</li>
                    <li><span>2011</span> Test environnemental pour le rectificateur de navire (Hi POWER 100D)</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2001 - 2010</p>
                  <ul>
                    <li><span>2010</span> Poste à souder DIGITAL MAG (LIBERO), test environnemental réalisé pour le rectificateur de navire (Hi POWER 35D)</li>
                    <li><span>2009</span> Production des postes à souder MIG SCR uniquement pour aluminium</li>
                    <li><span>2008</span> Production DIGITAL CO2 / MAG 600 (FINE ARC II)</li>
                    <li><span>2007</span> Production des postes à souder DIGITAL CO2 / MAG (HD Auto + Series)</li>
                    <li><span>2001</span> Fusion avec SUNGWOO PRECISION CO., LTD. Installation de R&D des postes à souder enregistré (Korea Industrial Technology Association).</li>
                    <li><span>2001</span> Production DC SAW 1500 (ZEUS1500) / AC SAW1500 (HERA1500A)</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1991 -2000</p>
                  <ul>
                    <li><span>2000</span> Production des postes à souder inverter CO2 / MAG (FINE ARC 350)</li>
                    <li><span>1999</span> Alliance technique avec SANREX au Japon</li>
                    <li><span>1998</span> Début de la production des postes à souder SCR (série DYNAMIC AUTO)</li>
                    <li><span>1997</span> Achèvement de l'usine de fabrication d'Icheon de SUNGWOO PRECISION CO., LTD.</li>
                    <li><span>1995</span> Fondation de SUNGWOO PRECISION CO., LTD.</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1981 - 1990</p>
                  <ul>
                    <li><span>1987</span> Changement de nom d'entreprise à HYUNDAI WELDING CO., LTD</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1975 - 1980</p>
                  <ul>
                    <li><span>1977</span> Achèvement de l'usine d'électrodes à Pohang</li>
                    <li><span>1975</span> ondation de SEOHAN DEVELOPMENT CO., LTD.</li>
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
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
          <h3 class="fontPop titStyle5"><b>Learn more about Hyundai PNS<br /> growth story.</b></h3>
    <!--      <div style="font-size: 16px; font-weight: 400;">
			Hyundai PNS ist ein globaler Schweißspezialist, der seinen Kunden die besten Schweißlösungen durch die Lieferung von Schweißmaterialien und Schweißgeräten von höchster Qualität bietet.
			<br>
			Schweißen ist ein unverzichtbares Material für die industrielle Entwicklung, und Hyundai PNS ist seit seiner Gründung seit etwa 40 Jahren ein Partner für die bemerkenswerte Entwicklung und den Erfolg in der koreanischen Schwerindustrie.
			<br>
			Derzeit haben wir Produktionsstätten und Vertriebsniederlassungen in 18 großen Ländern der Welt gegründet und exportieren Schweißmaterialien und Schweißgeräte in mehr als 80 Länder weltweit.
			Im Jahr 2009 haben wir zum ersten Mal in der heimischen Schweißindustrie Exporte von 200 Millionen US-Dollar erzielt und sind im Wettbewerb mit der Welt gewachsen.
		  </div>-->
        </div>
        <div class="historyContent conPd" style="margin-top: 50px;">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2011 -</p>
                  <ul>
                    <li><span>2019</span> Produktion Premium Schweißgerät Hi Series</li>
                    <li><span>2017</span> Produktion DIGITAL INVERTER Schweißgerät der H-Serie</li>
                    <li><span>2014</span> Produkzion DIGITAL INVERTER Schweißgerät Pulse MIG Schweißgerät Produktion, NEO Serie</li>
                    <li><span>2013</span> Produktion von DIGITAL INVERTER Multifunktionsgeräten</li>
                    <li><span>2012</span> Produziertes DIGITAL INVERTER PLASMA Schweißgerät (NEO PW 300)</li>
                    <li><span>2012</span> Umwelttest für Schiffsgleichrichter (Hi POWER 50D & 75D)</li>
                    <li><span>2011</span> Produziertes DIGITAL INVERTER Automatisierungs-WIG-Schweißgerät (NEO TIG 350P)</li>
                    <li><span>2011</span> Umwelttest für Schiffsgleichrichter (Hi POWER 100D)</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2001 - 2010</p>
                  <ul>
                    <li><span>2010</span> Produktion DIGITAL MAG-Schweißgerät (LIBERO), durchgeführter Umwelttest für Schiffsgleichrichter (Hi POWER 35D)</li>
                    <li><span>2009</span> Produktion SCR-MIG-Schweißgerät nur aus Aluminium</li>
                    <li><span>2008</span> Produktion DIGITAL CO2 / MAG 600 (FINE ARC II)</li>
                    <li><span>2007</span> Produktion DIGITAL CO2 / MAG-Schweißgerät (HD Auto + Serie)</li>
                    <li><span>2001</span> Fusion mit Sungwoo Industry Co., Ltd. Hyundai Welding Co., Ltd. Registriertes Forschungszentrum für Schweißmaschinentechnologie (Korea Industrial Technology Association)</li>
                    <li><span>2001</span> Produktion DC SAW 1500 (ZEUS1500) / AC SAW1500 (HERA1500A)</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1991 -2000</p>
                  <ul>
                    <li><span>2000</span> Herstellung von CO2 / MAG-Schweißgeräten für Wechselrichter (FINE ARC 350)</li>
                    <li><span>1999</span> Technische Allianz mit SANREX in Japan</li>
                    <li><span>1998</span> Beginn der Produktion eines SCR-Schweißgeräts (DYNAMIC AUTO-Serie)</li>
                    <li><span>1997</span> Fertigstellung des Icheon-Werks von Sungwoo Industry Co., Ltd.</li>
                    <li><span>1995</span> 1995 Gründung der Sungwoo Precision Industry</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1981 - 1990</p>
                  <ul>
                    <li><span>1987</span> Änderung des Firmennamens in Hyundai Welding Co., Ltd.</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1975 - 1980</p>
                  <ul>
                    <li><span>1977</span> Fertigstellung der Pohang-Fabrik</li>
                    <li><span>1975</span> Gründung der Seohan Development Co., Ltd.</li>
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
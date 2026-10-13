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
			<h3>Introducción de empresa</h3>
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
          <h3 class="fontPop titStyle5"><b>Obtenga más información sobre la historia de crecimiento de HYUNDAI PNS.</b></h3>
        </div>
        <div class="historyContent conPd" style="margin-top: 50px;">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2011 -</p>
                  <ul>
                    <li><span>2019</span> Producción de las Series Hi, equipo premium </li>
                    <li><span>2017</span> Producción de las Series H, DIGITAL INVERTER</li>
                    <li><span>2014</span> Producción de las Series NEO, DIGITAL INVERTER con Pulse MIG</li>
                    <li><span>2013</span> Producción de dispositivo multifunción DIGITAL INVERTER</li>
                    <li><span>2012</span> Producción de equipo de soldadura DIGITAL INVERTER PLASMA (NEO PW 300)</li>
                    <li><span>2012</span> Prueba ambiental para rectificadores de barcos (Hi POWER 50D & 75D)</li>
                    <li><span>2011</span>  Producción de equipo de soldadura TIG con automatización DIGITAL INVERTER (NEO TIG 350P)</li>
                    <li><span>2011</span> Prueba ambiental para rectificador de barco (Hi POWER 100D)</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2001 - 2010</p>
                  <ul>
                    <li><span>2010</span> Producción de DIGITAL MAG (LIBERO), 
Prueba ambiental realizada para rectificador de barco(Hi POWER 35D)</li>
                    <li><span>2009</span> Producción de la máquina de soldadura MIG SCR solo para aluminio</li>
                    <li><span>2008</span> Producción de DIGITAL CO2/MAG 600 (FINE ARC II)</li>
                    <li><span>2007</span> Producción del equipo DIGITAL CO2/MAG (HD Auto + Series)</li>
                    <li><span>2001</span> Sungwoo Industry Co., Ltd. se fusionó con Hyundai Welding Co., Ltd. 
Registro al Centro de investigación de tecnología de máquinas de soldadura (Asociación de Tecnología Industrial de Corea)</li>
                    <li><span>2001</span> Producción de DC SAW 1500(ZEUS1500) / AC SAW1500(HERA1500A)</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1991 -2000</p>
                  <ul>
                    <li><span>2000</span> Producción de equipo inversor CO2 / MAG (FINE ARC 350)</li>
                    <li><span>1999</span> Alianza técnica con SANREX de Japón</li>
                    <li><span>1998</span> Inicio de la producción de equipo SCR (DYNAMIC AUTO Series)</li>
                    <li><span>1997</span> Terminación de la planta Icheon de Sungwoo Industry Co., Ltd.</li>
                    <li><span>1995</span> Establecimiento de Sungwoo Industry Co., Ltd.</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1981 - 1990</p>
                  <ul>
                    <li><span>1987</span> Cambió el nombre de la empresa a Hyundai Welding Co., Ltd.</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1975 - 1980</p>
                  <ul>
                    <li><span>1977</span> Terminación de la planta de Pohang</li>
                    <li><span>1975</span> Establecimiento de Seohan Development Co., Ltd.</li>
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
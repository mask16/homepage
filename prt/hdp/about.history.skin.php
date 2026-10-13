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
			<h3>Introdução da Empresa</h3>
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
          <h3 class="fontPop titStyle5"><b>Aprender mais sobre a história de crescimento da<br>
Hyundai PNS.</b></h3>
        </div>
        <div class="historyContent conPd" style="margin-top: 50px;">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2011 -</p>
                  <ul>
                    <li><span>2019</span> Produção da Máquina de solda premium Hi Series</li>
                    <li><span>2017</span> Produção da máquina de solda DIGITAL INVERTER H Series</li>
                    <li><span>2014</span> Produção da máquina de solda DIGITAL INVERTER, a produção da máquina de solda Pulse MIG, série NEO</li>
                    <li><span>2013</span> Produção de dispositivos multifuncionais DIGITAL INVERTER</li>
                    <li><span>2012</span> Produção da máquina de solda DIGITAL INVERTER PLASMA (NEO PW 300)</li>
                    <li><span>2012</span> Teste ambiental para retificadores de navio (Hi POWER 50D e 75D)</li>
                    <li><span>2011</span> Produziu máquina de solda TIG para automação de INVERSOR DIGITAL (NEO TIG 350P)</li>
                    <li><span>2011</span> Teste ambiental para retificador de navio (Hi POWER 100D)</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2001 - 2010</p>
                  <ul>
                    <li><span>2010</span> Máquina de solda DIGITAL MAG fabricada (LIBERO), conduzido teste ambiental para retificador de navio (Hi POWER 35D)</li>
                    <li><span>2009</span> Produção da máquina de solda MIG SCR apenas de alumínio</li>
                    <li><span>2008</span> Produção da DIGITAL CO2/MAG 600 (FINE ARC II)</li>
                    <li><span>2007</span> Produção da máquina de solda DIGITAL CO2 / MAG (HD Auto + Series)</li>
                    <li><span>2001</span> Fundido com a Sungwoo Industry Co., Ltd. Hyundai Welding Co., Ltd. Centro de pesquisa de tecnologia de máquinas de soldagem registrado (Associação de Tecnologia Industrial da Coreia)</li>
                    <li><span>2001</span> Produção de DC SAW 1500(ZEUS1500) / AC SAW1500(HERA1500A)</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1991 -2000</p>
                  <ul>
                    <li><span>2000</span> Produção de máquina de solda Inverter CO2 / MAG (FINE ARC 350)</li>
                    <li><span>1999</span> Aliança técnica com SANREX no Japão</li>
                    <li><span>1998</span> Início da produção da máquina de solda SCR (DYNAMIC AUTO Series)</li>
                    <li><span>1997</span> Sungwoo Industry Co., Ltd. Planta de Icheon concluída</li>
                    <li><span>1995</span> Estabelecimento de Sungwoo Precision Industry</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1981 - 1990</p>
                  <ul>
                    <li><span>1987</span> Alterou o nome da empresa paraHyundai Welding Co., Ltd.</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1975 - 1980</p>
                  <ul>
                    <li><span>1977</span> Concluída a fábrica de hastes de soldagem Pohang</li>
                    <li><span>1975</span> Estabelecimento de Seohan Development Co., Ltd.</li>
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
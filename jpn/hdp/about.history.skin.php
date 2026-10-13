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
			<h3>企業紹介</h3>
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
       		現代PNSは、最高品質の溶接材料と溶接装備の供給を通して、顧客に最適な溶接ソリューションを提供する世界的溶接専門企業です
			<br>
			溶接は産業の発達において必要不可欠な必須素材であり、現代PNSは創社以来約40年間、大韓民国の重工業分野の目まぐるしい発展と成功のパートナーとして共にしてきました
			<br>
		  	現在、韓国国内の1位を越え、世界の重要18か国に生産工場と販売法人支社を設立、80か国に溶接材料と溶接設備を輸出しています。2009年韓国国内溶接業界初めて2億ドル輸出塔を受賞、名実共に世界と競争しながら成長しています。
		  </div>    -->
        </div>
        <div class="historyContent conPd" style="margin-top: 50px;">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2011 -</p>
                  <ul>
                    <li><span>2019</span> プレミアム溶接機 Hi Series 生産</li>
                    <li><span>2017</span> IGITAL INVERTER 溶接機 H Series 生産</li>
                    <li><span>2014</span> DIGITAL INVERTER 溶接機 Pulse MIG 溶接機生産、NEO Series 生産</li>
                    <li><span>2013</span> DIGITAL INVERTER 複合機生産</li>
                    <li><span>2012</span> DIGITAL INVERTER PLASMA 溶接機(NEO PW 300)生産</li>
                    <li><span>2012</span> 船舶用整流器(Hi POWER 50D & 75D)環境テスト</li>
                    <li><span>2011</span> DIGITAL INVERTER 自動化 TIG 溶接機(NEO TIG 350P)生産</li>
                    <li><span>2011</span> 船舶用整流器(Hi POWER 100D)環境テスト</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2001 - 2010</p>
                  <ul>
                    <li><span>2010</span> DIGITAL MAG 溶接機生産(LIBERO)、船舶用整流器(Hi POWER 35D) 環境テスト</li>
                    <li><span>2009</span> SCR アルミ専用 MIG 溶接機生産</li>
                    <li><span>2008</span> DIGITAL CO2/MAG 600 生産(FINE ARC II)</li>
                    <li><span>2007</span> DIGITAL CO2/MAG 溶接機 (HD Auto + Series) 生産</li>
                    <li><span>2001</span> 星宇開発(株)、現代綜合金属㈱に合併、溶接機技術研究所登録(韓国産業技術振興協会)</li>
                    <li><span>2001</span> DC SAW 1500(ZEUS1500) / AC SAW1500(HERA1500A)生産</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1991 -2000</p>
                  <ul>
                    <li><span>2000</span> インバータ CO2/MAG 溶接機生産(FINE ARC 350)</li>
                    <li><span>1999</span> 日本SANREX 技術提携</li>
                    <li><span>1998</span> SCR溶接機生産開始(DYNAMIC AUTO Series)</li>
                    <li><span>1997</span> 星宇開発(株)利川工場竣工</li>
                    <li><span>1995</span> 星宇開発(株)設立</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1981 - 1990</p>
                  <ul>
                    <li><span>1987</span> 現代綜合金属株式会社に商号変更</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1975 - 1980</p>
                  <ul>
                    <li><span>1977</span> 浦項溶接棒工場竣工</li>
                    <li><span>1975</span> 瑞韓開発(株)設立</li>
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
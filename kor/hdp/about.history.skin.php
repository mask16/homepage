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
			<h3>기업소개</h3>
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
     <!--     <h3 class="fontPop titStyle5"><b>세계적인 용접 전문기업</b></h3>
          <div style="font-size: 16px; font-weight: 400;">
       		현대피엔에스는 최고 품질의 용접재료와 용접장비의 공급을 통해 고객에게 최적의 용접 솔루션을 제공하는 세계적인 용접 전문 기업입니다.<br>
			용접은 산업발전에 없어서는 안될 필수 소재로 현대피엔에스는 창사 이래 약 40년 간 대한민국의 중공업 분야의 눈부신 발전과 성공의 동반자로서 함께 하였습니다.<br>
		  	현재는 국내 1위를 넘어 세계 주요 18개 국가에 생산공장과 판매법인지사를 설립, 세계80여개국에 용접재료와 용접장비를 수출하고 있으며 2009년에는 국내 용접업계 최초로 2억 달러 수출의 탑을 수상, 명실상부 세계와 경쟁하며 성장하고 있습니다.
		  </div>	-->
          <h3 class="fontPop titStyle5"><b>Learn more about Hyundai PNS<br /> growth story.</b></h3>
        </div>
        <div class="historyContent conPd" style="margin-top: 50px;">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2011 -</p>
                  <ul>
                    <li><span>2019</span> 프리미엄 용접기 Hi Series 생산</li>
                    <li><span>2017</span> DIGITAL INVERTER 용접기 H Series 생산</li>
                    <li><span>2014</span> DIGITAL INVERTER 용접기 Pulse MIG 용접기 생산, NEO Series 생산</li>
                    <li><span>2013</span> DIGITAL INVERTER 복합기 생산</li>
                    <li><span>2012</span> DIGITAL INVERTER PLASMA 용접기 (NEO PW 300)생산</li>
                    <li><span>2012</span> 선박용 정류기(Hi POWER 50D & 75D) 환경시험</li>
                    <li><span>2011</span> DIGITAL INVERTER 자동화 TIG 용접기(NEO TIG 350P)생산</li>
                    <li><span>2011</span> 선박용 정류기(Hi POWER 100D) 환경시험</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2001 - 2010</p>
                  <ul>
                    <li><span>2010</span> DIGITAL MAG 용접기 생산(LIBERO), 선박용 정류기(Hi POWER 35D) 환경시험</li>
                    <li><span>2009</span> SCR 알루미늄 전용 MIG 용접기 생산</li>
                    <li><span>2008</span> DIGITAL CO2/MAG 600 생산(FINE ARC II)</li>
                    <li><span>2007</span> DIGITAL CO2/MAG 용접기 (HD Auto + Series) 생산</li>
                    <li><span>2001</span> 성우정밀산업㈜ 현대종합금속㈜로 합병 용접기 기술연구소 등록(한국산업기술진흥협회)</li>
                    <li><span>2001</span> DC SAW 1500(ZEUS1500) / AC SAW1500(HERA1500A)생산</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1991 -2000</p>
                  <ul>
                    <li><span>2000</span> 인버터 CO2/MAG 용접기생산(FINE ARC 350)</li>
                    <li><span>1999</span> 일본 SANREX 기술제휴</li>
                    <li><span>1998</span> SCR용접기 생산 개시(DYNAMIC AUTO Series)</li>
                    <li><span>1997</span> 성우정밀산업(주) 이천공장 준공</li>
                    <li><span>1995</span> 성우정밀산업(주) 설립</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1981 - 1990</p>
                  <ul>
                    <li><span>1987</span> 현대종합금속 주식회사로 상호변경</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1975 - 1980</p>
                  <ul>
                    <li><span>1977</span> 포항용접봉 공장 준공</li>
                    <li><span>1975</span> 서한개발㈜ 설립</li>
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
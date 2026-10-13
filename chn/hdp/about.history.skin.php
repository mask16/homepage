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
			<h3>企业介绍</h3>
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
      <!--    <div style="font-size: 16px; font-weight: 400;">
       		现代PNS是通过提供最高品质的焊接材料和焊接设备，为顾客提供最佳焊接解决方案的世界级焊接专门企业
			<br>
			焊接是产业发展不可或缺的必需材料，现代PNS自创立以来约40年间作为大韩民国重工业领域耀眼的发展与成功的伙伴与大家同行
			<br>
		  	现在超过国内第一，在世界主要18个国家设立了生产工厂和销售法人分公司，向世界80多个国家出口焊接材料和焊接设备，2009年国内焊接业界首次获得了2亿美元的出口塔，名副其实的与世界竞争并成长。
		  </div> -->
        </div>
        <div class="historyContent conPd" style="margin-top: 50px;">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2011 -</p>
                  <ul>
                    <li><span>2019</span> 生产高端焊机Hi Series</li>
                    <li><span>2017</span> 生产DIGITAL INVERTER 焊接机 H Series</li>
                    <li><span>2014</span> 生产DIGITAL INVERTER 焊机Pulse MIG 焊机生产，NEO Series</li>
                    <li><span>2013</span> 生产DIGITAL INVERTER 复合机</li>
                    <li><span>2012</span> 生产DIGITAL INVERTER PLASMA 焊接机 (NEO PW 300)</li>
                    <li><span>2012</span> 船舶用整流器(Hi POWER  50D & 75D)环境试验</li>
                    <li><span>2011</span> 生产DIGITAL INVERTER 自动化 TIG 焊接机(NEO TIG 350P)</li>
                    <li><span>2011</span> 船舶用整流器(Hi POWER 100D)环境试验</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2001 - 2010</p>
                  <ul>
                    <li><span>2010</span> DIGITAL MAG 焊接机生产(LIBERO)、船舶用整流器(Hi POWER 35D)环境试验</li>
                    <li><span>2009</span> 生产SCR铝制专用MIG焊接机</li>
                    <li><span>2008</span> 生产 DIGITAL CO2/MAG 600 (FINE ARC II)</li>
                    <li><span>2007</span> 生产 DIGITAL CO2/MAG 焊机 (HD Auto + Series)</li>
                    <li><span>2001</span> 星宇精密产业（株）现代综合金属（株）注册合并焊接机技术研究所（韩国产业技术振兴协会）</li>
                    <li><span>2001</span> 生产DC SAW 1500(ZEUS1500) / AC SAW1500(HERA1500A)</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1991 -2000</p>
                  <ul>
                    <li><span>2000</span> 逆变CO2/MAG 焊接机生产(FINE ARC 350)</li>
                    <li><span>1999</span> 与日本SANREX技术合作</li>
                    <li><span>1998</span> SCR焊机开始生产(DYNAMIC AUTO Series)</li>
                    <li><span>1997</span> 星宇精密产业（株）利川工厂竣工</li>
                    <li><span>1995</span> 星宇精密产业（株）成立</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1981 - 1990</p>
                  <ul>
                    <li><span>1987</span> 变更商号为现代综合金属株式会社</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1975 - 1980</p>
                  <ul>
                    <li><span>1977</span> 浦项焊条工厂竣工</li>
                    <li><span>1975</span> 设立瑞韩开发（株）</li>
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
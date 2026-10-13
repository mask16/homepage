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
          <h3 class="fontPop titStyle5">
			<b>Learn more about Hyundai Superteck <br /> growth story.</b>
		  </h3>
        </div>
        <div class="historyContent conPd">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2015 -</p>
                  <ul>
                    <li><span>2020.11</span>   特殊合金钢（不锈钢、铝合金、耐热钢、耐磨钢等）</li>
                    <li><span>2020.10</span>   熔射用线材 (ZINC, STS, Ni., 等.) 事业开始</li>
                    <li><span>2020.08</span>   钎焊材料事业开始</li>
                    <li><span>2020.07</span>   钨棒事业开始</li>
                    <li><span>2020.06</span>   碳棒事业开始</li>
                    <li><span>2018.07</span>   铝焊材桶装TYPE(80 KG - 173 KG 级)事业开始</li>
                    <li><span>2018.05</span>   HIGH TENSILE STRENGTH 焊材取得CE,TUV认证</li>
                    <li><span>2018.03</span>   铝焊条取得 DNV-GL, CE, DB, TUV认证</li>
                    <li><span>2017.12</span>   铜焊条事业开始</li>
                    <li><span>2017.09</span>   铝焊条事业开始</li>
                    <li><span>2015.01</span>   建立现代Supertec</li>
                    <li><span>       </span>   可用于特殊、高性能结构物的特殊合金焊条项目启动-Duplex, Super Duplex, Inconel, Hastelloy, Cr-Mo 耐热钢, 极低温、耐腐蚀性、高强度、抗震设计、低温韧性等特殊合金焊条</li>
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
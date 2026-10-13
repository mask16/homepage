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
          <h3 class="fontPop titStyle5"><b>Learn more about Hyundai Superteck<br /> growth story.</b></h3>
        </div>
        <div class="historyContent conPd">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2015 -</p>
                  <ul>
                    <li><span>2020.11</span>   特殊合金鋼(ステンレス、アルミニウム、耐熱鋼、耐摩耗鋼など)</li>
                    <li><span>2020.10</span>   溶射用線材(ZINC、STS、NICなど)事業開始</li>
                    <li><span>2020.08</span>   ブレージング＆ソルダリング(ろう付用)材料事業開始</li>
                    <li><span>2020.07</span>   タングステン棒事業開始</li>
                    <li><span>2020.06</span>   ガウジング棒事業開始</li>
                    <li><span>2018.07</span>   アルミ溶接棒ドラムTYPE (80 KG - 173 KG 級)事業開始</li>
                    <li><span>2018.05</span>   HIGH TENSILE STRENGTH 溶接棒 CE、TUV認証取得</li>
                    <li><span>2018.03</span>   アルミ溶接棒 DNV-GL、CE、DB、TUV認証取得</li>
                    <li><span>2017.12</span>   銅溶接棒事業開始</li>
                    <li><span>2017.09</span>   アルミ溶接棒事業開始</li>
                    <li><span>2015.01</span>   現代スーパーテック設立</li>
                    <li><span>       </span>   特殊、高機能が必要な構造物に適用する特殊合金溶接棒事業開始 - Duplex、Super Duplex、Inconel、Hastelloy、Cr-Mo耐熱鋼、極低温、耐食性、高張力、耐震設計用などの特殊合金溶接棒</li>
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
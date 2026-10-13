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
			<p>HYUNDAU GLOVILLE</p>
			<h3>giới thiệu công ty</h3>
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
          <h3 class="fontPop titStyle5"><b>Learn more about Hyundai Gloville<br /> growth story.</b></h3>
        </div>
        <div class="historyContent conPd">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2011 -</p>
                  <ul>
                    <li>
						<span>2020</span>
						Đổi tên công ty thành Hyundai Gloville Co., Ltd.
					</li>
                    <li>
						<span>2013</span>
						Sáp nhập với Hyundai General Metal Co., Ltd. (logistics)
					</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2001 - 2010</p>
                  <ul>
                    <li>
						<span>2010</span>
						mua lại công ty vận chuyển hàng hoá
					</li>
                    <li>
						<span>2004</span>
						mua lại công ty vận tải phức hợp
					</li>
                    <li>
						<span>2003</span>
						Đổi tên công ty thành Gloville Process Co., Ltd.
					</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">1991 -2000</p>
                  <ul>
                    <li>
						<span>2000</span>
						Tham gia FIATA (Liên đoàn Quốc tế các Doanh nghiệp Vận tải Hàng hải)
					</li>
                    <li>
						<span>2000</span>
						Đã tham gia KIFFA (Hiệp hội vận tải đa phương Hàn Quốc)
					</li>
                    <li>
						<span>1999</span>
						Thành lập Công ty TNHH Gloville Jongwoon Co., Ltd.
					</li>
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
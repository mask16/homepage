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
			<p>HYUNDAU SUPERTECK</p>
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
          <h3 class="fontPop titStyle5"><b>Learn more about Hyundai Superteck<br /> growth story.</b></h3>
        </div>
        <div class="historyContent conPd">

          <div class="swiper-container historySlider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="historyWrap">
                  <p class="historyYear">2015 -</p>
                  <ul>
                    <li><span>2020.11</span>   Thép hợp kim đặc biệt (thép không gỉ, nhôm, thép chịu nhiệt, thép chịu mài mòn, v.v.)</li>
                    <li><span>2020.10</span>   Bắt đầu kinh doanh thép cuộn (ZINC, STS, NIC, v.v.) dùng phun phủ</li>
                    <li><span>2020.08</span>   bắt đầu kinh doanh vật liệu Brazing & Hàn (để hàn) </li>
                    <li><span>2020.07</span>   Bắt đầu kinh doanh thanh vonfram</li>
                    <li><span>2020.06</span>   Bắt đầu công việc kinh doanh gousing rod</li>
                    <li><span>2018.07</span>   Bắt đầu kinh doanh que hàn nhôm (loại  drum types 80 KG-173 KG)</li>
                    <li><span>2018.05</span>   HIGH TENSILE STRENGTH Đạt được chứng nhận CE, TUV cho que hàn</li>
                    <li><span>2018.03</span>   Đạt được chứng nhận DNV-GL, CE, DB, TUV cho que hàn nhôm</li>
                    <li><span>2017.12</span>   Bắt đầu kinh doanh que hàn đồng</li>
                    <li><span>2017.09</span>   Bắt đầu kinh doanh que hàn nhôm</li>
                    <li><span>2015.01</span>   Bắt đầu kinh doanh que hàn hợp kim đặc biệt có thể được áp dụng cho các cấu trúc yêu cầu các chức năng đặc biệt và cao-Duplex, Super Duplex, Inconel, Hastelloy, thép chịu nhiệt Cr-Mo, đông lạnh, chống ăn mòn, cường độ cao, thiết kế địa chấn, nhiệt độ thấp độ dẻo dai, v.v.</li>
                    <li><span>2015.01</span>   thành lập  Hyundai Superteck</li>
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
<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study2.skin.php
+ Description	: product.study2
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI WELDING</p>
			<h3>giới thiệu kinh doanh</h3>
		</div>
	</div>
</section>

<div class="subWrap">
	<section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
		<!-- subNav -->
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
		<!--//subNav -->
	</section>

    <div class="subContent">
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5"><b>Đây là lĩnh vực được Hyundai Welding liên tục nghiên cứu và phát triển.</b></h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>Phát triển vật liệu hàn</b></h6>
          <div>
            <p class="text-blit">Phát triển các sản phẩm được tối ưu hóa cho thép nóng chảy ở nhiệt độ thấp, thép cường độ cao, thép chịu nhiệt, v.v.</p>
            <p class="text-blit">Phát triển các sản phẩm chức năng đặc biệt cho đóng tàu, xa bờ, xây dựng, điện hạt nhân và nhà máy điện</p>
            <p class="text-blit">Phát triển các sản phẩm có chức năng sáng tạo cho các sản phẩm đa năng như đóng tàu, khung thép, xây dựng, thiết bị nặng và ô tô</p>
            <p class="text-blit">Hợp tác nghiên cứu và phát triển trong ngành để ứng dụng các loại thép mới, vật liệu hàn mới và kỹ thuật hàn mới, cung cấp công nghệ giải pháp tổng thể</p>
            <p class="text-blit">Tăng tốc độ và hiệu quả hàn, độ bền cao, chống nứt và thực hiện thân thiện với môi trường</p>
          </div>
          <h6 class="titStyle3"><b>Nghiên cứu công nghệ hàn</b></h6>
          <div>
            <p class="text-blit">Đánh giá đặc tính cấp dây hàn thông qua giám sát hồ quang</p>
            <p class="text-blit">Nghiên cứu các kỹ thuật cải tiến hiệu suất thông qua đánh giá và phân tích cơ tính của vật liệu hàn</p>
            <p class="text-blit">Nghiên cứu các đặc tính của chi tiết hàn theo các thông số hàn</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
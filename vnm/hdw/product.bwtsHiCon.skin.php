<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiCon.skin.php
+ Description	: product.bwtsHiCon
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
      <div class="innerWrap">
        <div class="btwsProduct btwsProduct-hicon">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">TẤT CẢ SẢN PHẨM</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hicon.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-CON là bộ điều khiển thông minh được phát triển để cho phép hoạt động ổn định ngay cả trong điều kiện môi trường khắc nghiệt như tàu thủy. Đặc biệt, nó là bộ điều khiển có độ ổn định và độ bền đã được xác minh thông qua các bài kiểm tra môi trường bao gồm các bài kiểm tra độ rung / nhiệt độ, độ ẩm / điện áp chịu đựng theo yêu cầu của tổ chức phân loại. <br /><br />

			  Nó có thể được áp dụng cho các hệ thống điều khiển tự động khác nhau như BWTS, FGSS và SCR, và có các tính năng sau.<br /><br />

              <p class="bar-text">Môi trường vận hành ổn định</p>
              <p class="bar-text">Giao diện thân thiện với người dùng và được tối ưu hóa</p>
              <p class="bar-text">Cung cấp nhiều loại kết nối giao tiếp</p>
            </div>
          </div>
          <div class="btImg">
            <div class="left"><img src="<?=$skin_url?>/img/content/hicon_btImg01.jpg" alt="" /></div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hicon_btImg02.jpg" alt="" /></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
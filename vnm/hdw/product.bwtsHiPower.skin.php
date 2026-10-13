<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiPower.skin.php
+ Description	: product.bwtsHiPower
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
        <div class="btwsProduct btwsProduct-hiPower">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">TẤT CẢ SẢN PHẨM</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hipower.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-PowerV là một van được điều khiển bởi một bộ truyền động điện thủy lực.
			  Sử dụng thiết bị truyền động điện thủy lực mang lại những ưu điểm sau.<br /><br />


              <p class="bar-text">Điều khiển van ổn định bằng cách sử dụng mô-men xoắn cao</p>
              <p class="bar-text">Sự tiêu thụ ít điện năng</p>
              <p class="bar-text">Áp dụng cho các van khác nhau</p>
              <p class="bar-text">Phương pháp cài đặt, vận hành và điều chỉnh dễ dàng</p>
              <p class="bar-text">Các mô hình chống cháy nổ / không chống cháy nổ được cung cấp</p><br /><br />

              Hi-Power V có thể được ứng dụng cho các lĩnh vực khác nhau như BWTS, các nhà máy trên cạn, và các công trình xử lý nước, đồng thời có thể thay thế các van điện, khí nén và thủy lực hiện có.

            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hipower_topImg.jpg" alt="" /></div>
          </div>

          <div class="btImg">
            <div class="left">
             <!--<h6>Valve</h6>-->
              <img src="<?=$skin_url?>/img/content/hipower_btImg01.jpg" alt="" />
            </div>
            <div class="right">
             <!--<h6>Actuator, Power Pack 등</h6>-->
              <img src="<?=$skin_url?>/img/content/hipower_btImg02.jpg" alt="" />
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
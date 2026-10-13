<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiSimul.skin.php
+ Description	: product.bwtsHiSimul
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
        <div class="btwsProduct btwsProduct-simul">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">TẤT CẢ SẢN PHẨM</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
             Hi-Simul K là một thiết bị mô phỏng dùng cho giáo dục cung cấp cho người dùng trải nghiệm vận hành hệ thống trong các điều kiện tương tự như trên tàu bằng cách triển khai hệ thống HiBallast ảo và có các tính năng chính sau đây.
			  <br /><br />

              <p class="bar-text">Cung cấp môi trường vận hành hệ thống trong các điều kiện rất giống với môi trường trên tàu</p>
              <p class="bar-text">Nâng cao khả năng đối phó với tình huống của người dùng bằng cách tạo ra một tình huống vận hành bất thường (chế độ kịch bản)</p>
              <p class="bar-text">Thực hiện giám sát giá trị đo lường cảm biến thực tế thông qua việc áp dụng các điều kiện trong thế giới thực và các mô hình ước lượng chiều cao</p>
              <p class="bar-text">Dữ liệu hoạt động thủ công có thể được điều khiển để tạo ra các tình huống khác nhau mà người dùng mong muốn</p>
              <p class="bar-text">Remote giáo dục có sẵn</p>
            </div>
          </div>
          <div class="btImg">
            <img src="<?=$skin_url?>/img/content/simul_btImg03.jpg" alt="" />
          </div>
            <img src="<?=$skin_url?>/img/content/simul_btImg04.jpg" alt="" />
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
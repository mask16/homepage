<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsEcoBallast.skin.php
+ Description	: product.bwtsEcoBallast
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
        <div class="btwsProduct btwsProduct-ecoballast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">TẤT CẢ SẢN PHẨM</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
EcoBallast là thương hiệu dành cho các cơ sở xử lý nước cân bằng của tàu do Hyundai Heavy Industries phát triển và Hyundai Welding có giấy phép sản xuất Ecoballast.
EcoBallast, sử dụng bộ lọc và tia cực tím, bao gồm các thiết bị chính như bộ lọc, đèn UV, làm sạch và kiểm soát.
<br /><br />
Thiết bị lọc có thể làm giảm đáng kể lượng trầm tích trong nước cân bằng của tàu và ngăn chặn sự xâm nhập của các sinh vật biển trên 50 μm.
Đèn UV được thiết kế đặc biệt cho hệ thống EcoBallast sử dụng đèn UV cường độ cao, áp suất trung bình để tiết kiệm không gian và tối đa hóa hiệu quả.
<br /><br />
Hệ thống phải được vận hành trong quá trình vận hànhcân bằng của tàu và khử bóng để xử lý nước hoàn toàn. Điều này có nghĩa là việc xử lý nước bổ sung được thực hiện trong quá trình khử bóng nước, có tính đến sự gia tăng của các sinh vật trong nước biển đã xử lý trong quá trình xả nước.
<br /><br />
Thiết bị CIP (Làm sạch tại chỗ) là thiết bị làm sạch tự động nhằm làm sạch các chất lạ có thể tạo ra bên ngoài ống bảo vệ đèn UV trong quá trình vận hành dằn và khử bóng. Thiết bị này được vận hành để ngăn chặn sự suy giảm của đèn UV do các chất gây ô nhiễm trong nước biển.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img//content/ecoballast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Nguyên lý</th>
                  <td>Bộ lọc + UV</td>
                </tr>
                <tr>
                  <th>Công suất tiêu thụ<br />(mỗi 1,000㎥/h)</th>
                  <td>100kW</td>
                </tr>
                <tr>
                  <th>Điểm xử lý</th>
                  <td>Ballasting & Deballasting</td>
                </tr>
                <tr>
                  <th>Các tính năng</th>
                  <td>Hệ thống thân thiện với môi trường (Không có hóa chất)<br />Không ảnh hưởng đến nhiệt độ / tính chất</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left">
              <img src="<?=$skin_url?>/img/content/ecoballast_btImg01.jpg" alt="" />
            </div>
            <div class="right">

            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
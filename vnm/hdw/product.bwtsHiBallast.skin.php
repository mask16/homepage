<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiBallast.skin.php
+ Description	: product.bwtsHiBallast
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
        <div class="btwsProduct btwsProduct-hiBallast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">TẤT CẢ SẢN PHẨM</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hiballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              HiBallast là thương hiệu của các thiết bị xử lý nước cân bằng của tàu được phát triển bởi Hyundai Heavy Industries và Hyundai Welding đã có giấy phép sản xuất HiBallast.
HiBallast, sử dụng phương pháp điện phân nước biển gián tiếp, bao gồm các thiết bị chính như bộ lọc, thiết bị điện phân, bộ trung hòa và cảm biến TRO.
<br /><br />
Bộ lọc có chức năng tự động rửa ngược và lọc các vi sinh vật, sinh vật có kích thước lớn hơn 50μm trong nước biển.
Axit hypochlorous nồng độ cao (1.000mg / l trở xuống) được sản xuất bằng phương pháp điện phân gián tiếp để xử lý vi sinh vật có kích thước nhỏ hơn 50um đi qua bộ lọc và bơm vào đường ống nước dằn của tàu. Thuốc diệt nấm mốc diệt sinh vật biển và đáp ứng các yêu cầu quy định.
<br /><br />
Nếu nước cân bằng của tàu được xả ra mà không được trung hòa sau khi xử lý nước, nó có thể gây ra tác hại, do đó, trước khi xả, một chất trung hòa được bơm vào để loại bỏ chất oxy hóa còn lại trong nước cân bằng của tàu trước khi xả.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hiBallast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Nguyên lý</th>
                  <td>Lọc + Điện phân (Gián tiếp)</td>
                </tr>
                <tr>
                  <th>Công suất tiêu thụ<br />(mỗi 1,000㎥/h)</th>
                  <td>50kW cho ballast<br />v1kW cho deballasting</td>
                </tr>
                <tr>
                  <th>Thời gian xử lý</th>
                  <td>Chỉ xử lý trong quá trình cân bằng của tàu<br /> Xử lý trung hòa trong quá trình khử bóng</td>
                </tr>
                <tr>
                  <th>Các tính năng</th>
                  <td>Tiêu thụ điện năng thấp<br /> Có thể vận hành chỉ với 1% tổng dung tích bể dằn trong nước biển ở các khu vực có độ mặn thấp</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left"><h6>Flow diagram for ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg01.jpg" alt="" /></div>
            <div class="right"><h6>Flow diagram for de-ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg02.jpg" alt="" /></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
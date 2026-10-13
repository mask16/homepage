<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI GLOVILLE</p>
		<h3>giới thiệu kinh doanh</h3>
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
      <section class="businessGloville innerWrap">
        <div class="conPd">

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>Điều khiển</b></h6>
              <p class="titStyle5">HYUNDAI<br/>Visibility</p>
            </div>
            <div>
              <p class="">Theo dõi hàng hóa thời gian thực thông qua trao đổi thông tin có hệ thống với Liners và các hãng hàng không</p>
              <p class="">Quản lý lịch trình chính xác các điểm khởi hành và điểm đến</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>Dịch vụ tận tâm</b></h6>
              <p class="titStyle5">HYUNDAI<br/>SQM</p>
              <b class="c-gray">service quality management</b>
            </div>
            <div>
              <p class="">Hoạt động của một nhóm chuyên dụng cho từng khách hàng</p>
              <p class="">Đánh giá chất lượng dịch vụ hàng tuần bởi khách hàng (Báo cáo SQI, KPI)</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>An ninh hậu cần</b></h6>
              <p class="titStyle5">HYUNDAI<br/>SSM</p>
              <b class="c-gray">security & safety management</b>
            </div>
            <div>
              <p class="">Nguyên tắc bảo mật và hoạt động nhóm chuyên dụng</p>
              <p class="">Tiến hành đào tạo an ninh thường xuyên</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>Dịch vụ sau bán hàng</b></h6>
              <p class="titStyle5">HYUNDAI<br/>CCM</p>
              <b class="c-gray">claim & complaint management</b>
            </div>
            <div>
              <p class="">Quy trình xử lý tai nạn khẩn cấp / điều động tại chỗ / thăm người giao hàng</p>
              <p class="">Khảo sát mức độ hài lòng của khách hàng và phân tích / cải tiến khiếu nại</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
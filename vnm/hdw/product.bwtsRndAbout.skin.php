<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndAbout.skin.php
+ Description	: product.bwtsRndAbout
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
      <section class="RnDAbout">
        <div class="conPd">
          <h5 class="titStyle5"><b>Trung tâm R&D (Trung tâm Nghiên cứu Công nghệ) thuộc Bộ phận Máy móc của Hyundai Welding đang tập trung vào việc phát triển và nghiên cứu các thiết bị tàu thân thiện với môi trường nhằm bảo vệ môi trường biển dựa trên quy trình công nghệ thân thiện với môi trường.</b></h5>
        </div>
        <div class="RnDAboutImg"></div>
        <div class="RnDAboutCon">
          <div class="conPd">
            Trung tâm R&D (Viện Nghiên cứu Kỹ thuật) này đang phát triển vật liệu điện cực không hòa tan (DSA) thông qua nghiên cứu điện hóa cơ bản, máy điện phân nước biển hiệu suất cao, van điện thủy lực và hệ thống điều khiển thông minh.<br /><br />

			Chúng tôi cố gắng thu được kết quả tối ưu bằng cách sử dụng các kỹ thuật phân tích và kỹ thuật tính toán khác nhau như phân tích dòng chất lỏng một pha và đa, phân tích dòng nhiệt và hiệu suất cũng như kỹ thuật đường ống (mô hình 3D) bằng cách sử dụng mô phỏng động lực học chất lỏng tính toán (CFD). Dựa trên điều này , chúng tôi đang tiến hành nghiên cứu để tối ưu hóa thiết kế và tăng hiệu quả sản phẩm.<br /><br />

			Ngoài ra, chúng tôi đang tập trung nghiên cứu để phát triển các sản phẩm và quy trình mới có giá trị gia tăng cao phù hợp với sự thay đổi của thị trường bằng cách phân tích xu hướng của công nghệ đổi mới trong lĩnh vực thân thiện với môi trường.<br /><br />
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
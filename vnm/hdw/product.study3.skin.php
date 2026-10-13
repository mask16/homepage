<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study3.skin.php
+ Description	: product.study3
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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>Định hướng và tình trạng phát triển tại Hyundai Welding Research Institute</b></h5>
          <h6 class="titStyle1 c-gray"><p>Hướng phát triển</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Thân thiện với môi trường</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Phát triển vật liệu hàn khói thấp</p>
              <p class="text-blit">Phát triển vật liệu hàn Mn thấp</p>
              <p class="text-blit">Phát triển vật liệu hàn tán xạ thấp</p>
              <p class="text-blit">Phát triển dây hàn lõi thuốc tự bảo vệ Self-Shielded </p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>kỷ năng cao</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">Phát triển vật liệu hàn với các đặc tính CTOD đông lạnh tuyệt vời</p>
              <p class="text-blit">Phát triển vật liệu hàn cường độ cao / độ bền cao cho ngoài khơi</p>
              <p class="text-blit">Phát triển vật liệu hàn hydro cực thấp chống ẩm</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Hiệu quả cao</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">Vật liệu hàn Electrogas</p>
              <p class="text-blit">Phát triển dây cuộn kim loại để hàn tốc độ cao</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Loại kết nối thép mới</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">Phát triển Self Shield EGW cho bể chứa plant</p>
              <p class="text-blit">Phát triển FCW cường độ cao</p>
              <p class="text-blit">Phát triển vật liệu hàn cho các công trình ngoài khơi thép S500, S550, S690</p>
              <p class="text-blit">Phát triển vật liệu hàn cho các quy trình hàn mới như tự động hóa, hiệu quả cao, tốc độ cao, trọng lượng nhẹ, v.v.</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
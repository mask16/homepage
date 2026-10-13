<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndField.skin.php
+ Description	: product.bwtsRndField
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
      <section class="RnDField">
        <div class="conPd">
          <h5 class="titStyle5"><b>Lĩnh vực này đang được liên tục nghiên cứu và phát triển bởi bộ phận máy móc của Hyundai Welding.</b></h5>
        </div>
        <div class="RnDFieldImg"></div>
        <div class="RnDFieldCon">
          <div class="conPd">
            <div class="">
              <h6 class="titStyle3"><b>BWTS R & D</b></h6>

              <p class="text-blit">Phát triển thiết bị điện phân nước biển để cải thiện độ tin cậy hoạt động và tính khả dụng của BWTS</p>
              <p class="text-blit">Phát triển các quy trình thân thiện với môi trường và các sản phẩm liên quan để ngăn ngừa chất lượng nước và ô nhiễm không khí</p>
              <p class="text-blit">Phân tích, đánh giá vật liệu -WTS và nghiên cứu cơ bản trong lĩnh vực điện hóa</p>
              <p class="text-blit">Nghiên cứu về cải tiến hiệu suất hệ thống và tối ưu hóa thiết kế dựa trên phân tích luồng</p>
              <p class="text-blit">Nghiên cứu nâng cao chất lượng thiết bị hàng hải thân thiện với môi trường (Hi-CON, Hi-Power-V)</p>
            </div>
            <div class="">
              <ul class="RnDFieldList">
                <li>
                  <p><b>Phát triển vật liệu điện cực</b></p>
                  <div class="right">
                    <img src="<?=$skin_url?>/img/content/bwtsRnD_img01.jpg" />
                  </div>
                </li>
                <li>
                  <p><b>Phát triển máy điện phân hiệu suất cao</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img02.jpg" />
                </div>
                </li>
                <li>
                  <p><b>Phân tích dòng chất lỏng và nhiệt</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img03.jpg" />
                  </div>

                </li>
                <li>
                  <p><b>Mô hình 3D</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img04.jpg" />
                  </div>

                </li>
              </ul>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
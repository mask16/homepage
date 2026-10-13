<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.history.skin.php
+ Description	: about.history
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI SUPERTECK</p>
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
      <section class="productStudy1">
        <div class="innerWrap conPd">
          <h5 class="titStyle5">
			<b>
				Hyundai Superteck là công ty chuyên về hàn cung cấp các giải pháp hàn tối ưu cho khách hàng.
			</b>
		  </h5>
        </div>
        <div class="productStudyImg"></div>
        <div class="innerWrap productStudy1Con">
          <div class="conPd">
            Hyundai Superteck là công ty hàn chuyên cung cấp các giải pháp hàn tối ưu cho khách hàng bằng cách cung cấp vật liệu hàn đặc biệt chất lượng cao, vật liệu hàn hợp kim màu và các vật liệu phụ liên quan đến hàn khác phù hợp với môi trường hàn đặc biệt của khách hàng.
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
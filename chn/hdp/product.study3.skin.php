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
		<p>HYUNDAI PNS</p>
		<h3>事业简介</h3>
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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>这是现代PNS研究所正在开发焊接机的方向</b></h5>
          <h6 class="titStyle1 c-gray"><p>开发方向</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>产品稳定性</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">开发不受高温、多湿、灰尘等外部环境变化的系统</p>
              <p class="text-blit">优秀的耐久性和保存性</p>
              <p class="text-blit">采用多保护电路功能</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>高性能</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">利用SAC、SPC等多种脉冲控制技术，开发出非铁系焊接技术 SAC(Surface Arc Control), SPC(Suface Pulse Control)</p>
              <p class="text-blit">开发并稳定大电流Inverter SAW焊接系统</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>高效率</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">采用高速挥杆&软挥杆Full Bridge控制的逆变器系统，实现90%以上的效率</p>
              <p class="text-blit">最大程度地减少待机电量，优化电效率</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>客户订制型</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">开发成套设备存储Tank用Self Shield EGW</p>
              <p class="text-blit">开发高强度FCW</p>
              <p class="text-blit">海洋构造物S500、S550、S690钢用焊接材料开发</p>
              <p class="text-blit">开发自动化、高效率化、高速化、轻量化等新焊接工程焊接材料</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
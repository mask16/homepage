<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study2.skin.php
+ Description	: product.study2
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
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5"><b>这是现代PNS不断研究和发展的领域。</b></h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>焊接设备开发</b></h6>
          <div>
            <p class="text-blit">开发出最适合造船厂、成套设备、汽车零部件等的专用产品</p>
            <p class="text-blit">开发与多种焊接材料兼容的设备</p>
            <p class="text-blit">开发电弧稳定性和实现低飞溅的焊接性能</p>
            <p class="text-blit">开发用稳定电机控制可进行一定送达的焊接小车</p>
            <p class="text-blit">开发以提高工作率、生产效率为目的的监控系统</p>
            <p class="text-blit">通过开发HMI提高用户的便利性</p>
            <p class="text-blit">超轻化、干练的设计，开发符合顾客需求的产品</p>
          </div>
          <h6 class="titStyle3"><b>焊接设备专利研究</b></h6>
          <div>
			<p class="text-blit">电流不均匀监测装置</p>
			<p class="text-blit">安全气自动控制焊接装置</p>
			<p class="text-blit">电焊机用电力机</p>
			<p class="text-blit">焊机用控制面板</p>
			<p class="text-blit">电弧焊接器功率控制</p>
			<p class="text-blit">弧焊处理控制装置及方法</p>
			<p class="text-blit">利用100%CO2 气的药芯焊丝用脉冲焊接波控制方法</p>
			<p class="text-blit">对母材和焊丝的触碰进行感应的焊接装置</p>
			<p class="text-blit">焊接系统中的焊丝输送装置</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
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
			<h3>Business Introduction</h3>
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
          <h5 class="titStyle5"><b>This is the direction in which a welding machine is being developed at Hyundai PNS' research center.</b></h5>
          <h6 class="titStyle1 c-gray"><p>Development direction</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Product Stability</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Development of a system that is independent of changes in external environment such as high temperature, high humidity, and dust</p>
              <p class="text-blit">Excellent durability and retention</p>
              <p class="text-blit">Adopt multiple protection circuit function</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>High Functionality</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">Development of non-ferrous line welding technology with various pulse control techniques such as SAC and SPC.  SAC(Surface Arc Control), SPC(Suface Pulse Control)</p>
              <p class="text-blit">Development and stabilization of large current inverter SAW welding system</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>High Efficiency</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">High-speed switching & soft switching Full bridge control inverter system realizes over 90% efficiency</p>
              <p class="text-blit">Electricity efficiency optimization by minimizing standby power</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Customized Devlopment</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">Self Shield EGW development for plant storage tank</p>
              <p class="text-blit">Development of high strength FCW</p>
              <p class="text-blit">Development of welding material for S500, S550, S690 steel for offshore structures</p>
              <p class="text-blit">Development of welding materials for new welding processes such as automation, high efficiency, high speed, and light weight</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
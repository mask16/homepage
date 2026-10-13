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
			<p>HYUNDAI GLOVILLE</p>
			<h3>事业介绍</h3>
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
          <h5 class="titStyle5">
			<b>
				主要业务部分为出口/进口货物和内地运输服务，此外还提供货物保管、出口包装、机场业务代理、特殊货物运输等物流服务。
			</b>
		  </h5>

          <div class="businessGlovilleWrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>进出口/内需货运</b></h6>
              <p class="text-blit">AIR, OCEAN 进出口 LCL / FCL货运</p>
              <p class="text-blit">国内内需货物运输（企业物流）</p>
              <p class="text-blit">特殊货物运输:大型成套设备、冷藏、展品</p>
              <p class="text-blit">项目货物</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville01.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>3PL/仓储</b></h6>
              <p class="text-blit">库存管理，仓库管理，受配送，验收，包装等</p>
              <p class="text-blit">全国主要物流中心内的仓库保管服务</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville02.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>机场/ 港口业</b></h6>
              <p class="text-blit">机场快运,ULD 运输</p>
              <p class="text-blit">仓库保管、出入库管理、其他业务代理</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville03.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>出口货物包装</b></h6>
              <p class="text-blit">最新包装设备和最佳工作环境（密封包装、SKID、真空包装等）</p>
              <p class="text-blit">包装> 通过运输连接减少顾客物流费用</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville04.png" alt="" /></div>

            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
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
		<h3>事業紹介</h3>
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
				主な事業領域は輸出、輸入及び内陸運送サービス、貨物保管、輸出梱包、空港業務代行、特殊貨物運送などの物流サービスを提供しています。
			</b>
		  </h5>

          <div class="businessGlovilleWrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>輸出入/内需貨物運送</b></h6>
              <p class="text-blit">AIR/OCEAN 輸出、輸入 LCL FCL 貨物運送</p>
              <p class="text-blit">国内内需貨物運送(企業物流)</p>
              <p class="text-blit">特殊貨物運送 : 大型プラント、冷蔵、展示物</p>
              <p class="text-blit">プロジェクト貨物</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville01.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>3PL/倉庫保管</b></h6>
              <p class="text-blit">在庫管理、倉庫管理、配送、検収、梱包など</p>
              <p class="text-blit">全国主要物流センターの保管サービス</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville02.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>空港/ 港湾運送業</b></h6>
              <p class="text-blit">空港シャトル運送、ULD運送</p>
              <p class="text-blit">倉庫保管、入出庫管理、その他業務代行等</p>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/business_Gloville03.png" alt="" /></div>

            </div>
          </div>

          <div class="businessGlovilleWrap">
            <div>
              <h6 class="titStyle3"><b>輸出貨物梱包</b></h6>
              <p class="text-blit">最新設備、最高の作業環境(密閉梱包、SKID、真空梱包など)</p>
              <p class="text-blit">梱包 > 運送の連携による顧客の物流コスト低減</p>
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
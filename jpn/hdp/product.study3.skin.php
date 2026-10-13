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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>今後現代PNS研究所の溶接機開発の方向性</b></h5>
          <h6 class="titStyle1 c-gray"><p>開発方向性</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>製品安定性</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">高温、多湿、埃など、外部環境変化に対応するシステム開発</p>
              <p class="text-blit">優秀な耐久性及び保存性</p>
              <p class="text-blit">多重保護回路機能採択</p>
			</div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>高機能性</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">SAC、SPCなど、多様なパルス制御技法を基づいて非鉄系ライン溶接技術開発</p>
              <p class="text-blit">大電流 Inverter SAW 溶接システム開発及び安定化</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>高効率</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">高速スイッチング & ソフトスイッチング Full Bridge 制御のインバータシステムにより、90%以上の効率を具現</p>
              <p class="text-blit">待機電力を最小化して電気効率を最適化</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>顧客カスタマイズ型</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">プラント貯蔵Tank用 Self Shield EGW 開発</p>
              <p class="text-blit">高張力 FCW 開発</p>
              <p class="text-blit">海洋構造物 S500、S550、S690鋼用溶接材料開発</p>
              <p class="text-blit">自動化、高効率化、高速化、軽量化等、新溶接工程溶接材料開発</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
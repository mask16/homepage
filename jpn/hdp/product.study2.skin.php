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
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5"><b>現代PNSで着実に研究し、<br>発展している分野です</b></h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>溶接装備開発</b></h6>
          <div>
            <p class="text-blit">造船所、プラント、自動車部品などに最適化製品開発</p>
            <p class="text-blit">多様な溶接材料と互換するシンナージック開発</p>
            <p class="text-blit">アーク安定性及び低スパッタ実現の為、溶接技能開発</p>
            <p class="text-blit">安定したモニター制御で一定の送給が可能なフィーダー、キャリッジ開発</p>
            <p class="text-blit">作業率、生産性向上の為、モニタリングシステムの開発</p>
            <p class="text-blit">HMI 開発による使用者の便宜性向上</p>
            <p class="text-blit">超軽量化、洗礼されたデザインによる顧客ニーズに合わせた製品の開発</p>
		  </div>
          <h6 class="titStyle3"><b>溶接装備特許研究</b></h6>
          <div>
            <p class="text-blit">電流不均衡感知装置</p>
            <p class="text-blit">シールドガス自動制御溶接装置</p>
            <p class="text-blit">溶接機用電力機</p>
            <p class="text-blit">溶接機用コントロールパネル</p>
            <p class="text-blit">アーク溶接機フィーダーのモータ定速制御</p>
            <p class="text-blit">アーク溶接時、バーンバック処理制御装置及び方法</p>
            <p class="text-blit">CO2 100% ガスを利用したフラックスコアードワイヤー用パルス溶接波形制御方法</p>
            <p class="text-blit">母材とワイヤーのタッチをセンシングする溶接装置</p>
            <p class="text-blit">溶接システムのワイヤー送給装置</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
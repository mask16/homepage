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
      <section class="RnDField">
        <div class="conPd">
          <h5 class="titStyle5"><b>現代綜合金属機械事業部で地道に研究し発展させている分野です</b></h5>
        </div>
        <div class="RnDFieldImg"></div>
        <div class="RnDFieldCon">
          <div class="conPd">
            <div class="">
              <h6 class="titStyle3"><b>BWTS 研究開発</b></h6>

              <p class="text-blit">BWTSの運転信頼度及びアベイラビリティ向上の為の海水電気分解装置の開発</p>
              <p class="text-blit">水質及び大気汚染防止の為の環境に優しいプロセス及び関連製品開発</p>
              <p class="text-blit">BWTS素材分析評価及び電気化学分野の基礎研究</p>
              <p class="text-blit">流動解析基盤のシステム性能向上及び設計最適化研究</p>
              <p class="text-blit">環境配慮型船舶用器材(Hi-CON, Hi-Power-V)品質向上研究</p>
            </div>
            <div class="">
              <ul class="RnDFieldList">
                <li>
                  <p><b>電極素材開発</b></p>
                  <div class="right">
                    <img src="<?=$skin_url?>/img/content/bwtsRnD_img01.jpg" />
                  </div>
                </li>
                <li>
                  <p><b>高効率電解槽開発</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img02.jpg" />
                </div>
                </li>
                <li>
                  <p><b>流体及び熱流動解析</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img03.jpg" />
                  </div>

                </li>
                <li>
                  <p><b>3D Modeling</b></p>
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
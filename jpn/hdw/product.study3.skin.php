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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>現代綜合金属で持続的に研究し発展させている分野です</b></h5>
          <h6 class="titStyle1 c-gray"><p>開発方向</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b><ruby>環境親和型<rt>エコロジー</rt></ruby></b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Low ヒューム溶接材料の開発</p>
			  <p class="text-blit">Low Mn 溶接材料の開発</p>
			  <p class="text-blit">Low スパッタ溶接材料の開発</p>
			  <p class="text-blit">Self-Shielded フラックスコアードワイヤーの開発</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>高機能性</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">極低温 CTOD 特性が優秀な溶接材料の開発</p>
              <p class="text-blit">Offdhore材料用の超高強度/高靭性溶接材料の開発</p>
              <p class="text-blit">耐吸湿極低水素系溶接材料の開発</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>高能率</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
			  <p class="text-blit">エレクトロガス溶接材料の開発</p>
			  <p class="text-blit">高速溶接用メタルコアードワイヤの開発</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>新鋼種の連携型</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">プラント貯蔵Tank材料 Self Shield EGW 開発</p>
              <p class="text-blit">高強度 FCW 開発</p>
              <p class="text-blit">海洋構造物 S500, S550, S690鋼材料溶接材料開発</p>
              <p class="text-blit">自動化、高効率化、高速化、軽量化など、新しい溶接工程での溶接材料の研究開発</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
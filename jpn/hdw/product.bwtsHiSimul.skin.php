<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiSimul.skin.php
+ Description	: product.bwtsHiSimul
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
      <div class="innerWrap">
        <div class="btwsProduct btwsProduct-simul">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hi-Simul K は、HiBallast システムを仮想的に実装することにより、ユーザ様に船舶と同様のシステム運用を体感できる教育用 simulation 装備で、主に以下の特徴があります。
			  <br /><br />
              <p class="bar-text">船上と非常に近い状態でのシステム操作運転環境を提供</p>
              <p class="bar-text">異常な運転状況を作り出すことによって、ユーザの状況対処能力を向上させる(シナリオモード)</p>
              <p class="bar-text">実際と同じような条件と高次元的な推定モデルの適用を通して、リアルなセンサー計測値のモニタリングを実現</p>
              <p class="bar-text">運転データを手動で操作し、ユーザが求める様々な状況を作り出すことが可能</p>
              <p class="bar-text">オンライン教育を提供 </p>
              <p class="bar-text">リモート教育が可能</p>
            </div>
          </div>
          <div class="btImg">
            <img src="<?=$skin_url?>/img/content/simul_btImg03.jpg" alt="" />
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
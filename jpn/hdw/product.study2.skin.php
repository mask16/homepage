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
      <section class="productStudy2">
        <div class="conPd">
          <h5 class="titStyle5"><b>現代綜合金属で持続的に研究し発展させている分野です</b></h5>
        </div>
        <div class="productStudy2Img"></div>
        <div class="productStudy2Con conPd">
          <h6 class="titStyle3"><b>溶接材料開発</b></h6>
          <div>
            <p class="text-blit">低温鋼材料、高張力鋼、耐熱鋼などに最適化された製品開発</p>
            <p class="text-blit">造船、海洋、建設、原子力、発電プラント材料特殊機能性正品開発</p>
            <p class="text-blit">造船、形鋼、建設、重装備、自動車など、汎用製品に対する革新的機能化製品開発</p>
            <p class="text-blit">新しい鋼種と溶接材料、新しい溶接技法適材料の為の溶接業界共同研究開発、Total solution技術提供</p>
            <p class="text-blit">溶接スピード及び効率の増大、高靭性、耐き裂性、環境親和型（エコロジー）を具現</p>
          </div>
          <h6 class="titStyle3"><b>溶接技術の研究</b></h6>
          <div>
            <p class="text-blit">Arcモニタリングによる溶接ワイヤー送給特性評価</p>
            <p class="text-blit">溶接材料の機械的特性評価及び分析による性能向上技法の研究</p>
            <p class="text-blit">溶接Parameterによる溶接部の特性研究</p>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
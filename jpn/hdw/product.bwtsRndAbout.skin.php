<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndAbout.skin.php
+ Description	: product.bwtsRndAbout
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
      <section class="RnDAbout">
        <div class="conPd">
          <h5 class="titStyle5">
			<b>
			現代綜合金属機械事業部のR&Dセンター(技術研究所)は、環境にやさしい工程技術をベースに、、海洋環境を保全するための船舶機器の開発及び研究に力を注いでいます。
			</b>
		  </h5>
        </div>
        <div class="RnDAboutImg"></div>
        <div class="RnDAboutCon">
          <div class="conPd">
            本R&Dセンター(技術研究所)は、電気化学基礎研究を通した不溶性電極(DSA)素材の開発、高効率海水電気分解電解槽開発、Electro-Hydraulicバルブ及びスマートコントロールシステムを開発しています。
			</br></br>
	数値流体力学(CFD)シミュレーションを利用した単相及び多重流体の流動解析、熱流動及び性能解析、パイプエンジニアリング(3D modeling)などの様々なコンピュータシミュレーション及びエンジニアリング技法を
	用いて、最適の結果を導き出すよう努めています。これらの技術を基に、設計の最適化、システム効率増大の為の研究を行っております。
			</br></br>
	また、環境分野の革新技術動向を分析し、より付加価値の高い新製品及び工程開発にも打ち込んでいます。        
	  </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
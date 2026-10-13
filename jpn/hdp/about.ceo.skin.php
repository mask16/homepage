<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.ceo.skin.php
+ Description	: about.ceo
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualAbout">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI PNS</p>
			<h3>企業紹介</h3>
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

    <div class="subContent innerWrap">
      <section class="aboutWrap aboutCeo conPd">

        <div class="subTitleArea">
          <h3 class="titStyle5"><b>弊社ホームページにアクセスして頂き誠にありがとうございます</b></h3>
        </div>
        <div class="text-style1">
			現代PNSは2020年3月20日、溶接装備事業部門の専門性を一層強化し経営効率性を高め、急変する市場変化に対して迅速に対応できる技術基盤を設ける為、現代綜合金属㈱から分割し設立されました
			<br /><br />
			現代PNSは1995年溶接機事業部の設立以降25年間、絶え間ない研究開発を通して、2007年デジタルSCR溶接機、2013年デジタルインバータ溶接機を生産し、特に2019年にはプレミアム溶接機であるHiシリーズを開発し、造船、プラントを含む全事業領域に供給しております
			<br /><br />
			また、世界最高の技術力を確保するため、各分野最高の研究機関との協力を通じた新技術開発と国産化に先駆けており、産業現場の要求に最適化された溶接装備の供給の為、R&D CENTERを常に運用し、顧客のニーズに合った製品開発の為に努力しております
			<br /><br />
			現代PNSは、今後も顧客の満足を最優先とし、常に顧客中心経営と未来に向けたチャレンジ精神を基に、社会的価値を重視し、顧客の皆様と共により大きな夢を育み実現して行く企業になれるよう、最善を尽くします
			<br /><br />
			顧客の皆様へ心より感謝いたします<br>これからも多くの関心と声援を宜しくお願い致します
			<!-- <p class="tar ceoName">代表取締役 <span><ruby>裵炳默<rt>ベ・ビョンムク</rt></ruby></span></p> -->

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
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
			<p>HYUNDAI GLOVILLE</p>
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
          <h3 class="titStyle5"><b>現代グロービルホームページにアクセスして頂き誠にありがとうございます</b></h3>
        </div>
        <div class="text-style1">
          弊社は物流効率性の引き上げとサービス向上を通して、顧客の価値を極大化させるという理念の下、絶え間ない挑戦と革新を続けています
		  <br /><br />
          我々は、4次産業革命時代の変化に応える最適なカスタマイズ型物流ソリューションの提供を通して、顧客に最高の満足感を与える事が出来るよう持続的な投資と最善の努力を尽くしています
		  <br /><br />
          弊社の企業文化は、"事業関係者である顧客と会社と役職員が共同繁栄を追求し、創意的な想像力を情熱的に実現させ、最高の会社になれるよう経営遂行能力を具現化し、"新しい価値を創造する事"であります
		  <br /><br />
          現代グロービルはこの様な心構えで、世界的な総合物流企業となるために新しい成長動力を確保し、責任経営を続けていきます
		  <br /><br />
          これからも顧客の価値を高めるための挑戦は絶え間なく続けていきます顧客の皆様の関心と激励、宜しくお願い致します
		  <br /><br />
          ありがとうございました

          <p class="tar ceoName">代表取締役社長 
	<span>
		<ruby>
		Dae Hoan Oh<rt>チョンウンソン</rt>
		</ruby>
</span></p>

        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
<?php
if( !defined('_GNUBOARD_') ) EXIT;
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

    <!-- [1] study1 -->
    <section class="productStudy1">
      <div class="conPd">
        <h5 class="titStyle5">
          <b>
            現代綜合金属浦項技術研究所は、顧客のニーズを最優先とし、直ちに答えれる溶接ソリューションの開発に邁進しております
          </b>
        </h5>
      </div>
      <div class="productStudyImg"></div>
      <div class="productStudy1Con">
        <div class="conPd">
          1977年、研究所発足以来、被覆アーク溶接材料、サブマージアーク溶接材料(SAW)、ソリッドワイヤー、フラックスコアードワイヤ(FCW)、TIGワイヤ、ニッケル合金鋼及びその他の溶接材料を研究開発し、大韓民国の産業発展に寄与してきました国内大手ユーザとの密接な技術共有を通して、共通技術開発を推進し、海外支社を通して、競争会社及び海外の需要先に対するデータベースを確保し、戦略を樹立しております
          <br /><br />
          さらには、国策研究機関と有機的な協力を通して、新しい鋼材の開発による溶接材料の開発、製品の信頼性確保及び発展を続けています。また、蓄積されたノウハウをもとに、高機能性、エコロジー、高能率、新鋼種連携型溶接材料を開発し、国内外AS/BS及び技術サポートを通して顧客に合わせたサービスによって、顧客により一歩寄り添う研究所になれるよう努力しています本研究所は、顧客の生産性向上及び品質改善、原価の節減と顧客のニーズに符合する新製品開発及び全ての分野での最上の結果を導くよう努力を続けており、市場の変化に合わせた溶接材料を開発するための研究に集中して取り組んでいます
        </div>
      </div>
    </section>

    <div style="height:60px;"></div>

    <!-- [2] study2 -->
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

    <div style="height:100px;"></div>

    <!-- [3] study3 -->
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
            <p class="text-blit">Offshore材料用の超高強度/高靭性溶接材料の開発</p>
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

<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsCharter.skin.php
+ Description	: sus.ethicsCharter
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>
.sus4Img {width:100%;height:300px;background:url("<?=$skin_url?>/img/content/sus4.jpg") no-repeat center;background-size:cover;margin:30px 0;
	transition:height .2s;
	-webkit-transition:height .2s;
	-ms-transition:height .2s;
	-moz-transition:height .2s;
	-o-transition:height .2s;
}
				@media only all and (max-width: 959px) {
				.sus4Img {width:100%;height:200px;}
				}
</style>
  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI WELDING</p>
		<h3>持続可能経営</h3>
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

    <div class="subContent conPd">
      <section class="susWrap susCharter">
        <div class="subTitleArea" style="border-bottom:solid 1px #e5e5e5;padding-bottom:50px;">
          <h3 class="titStyle5"><b>SHE (Safety, Health and Environment) マネジメント</b></h3>
          <h3 class="text-style1">
			<b>SHEの経営ビジョン<br><br>
				<p class="titStyle5">「安全と健康は私たちのあらゆる活動の最優先事項であり、従業員と職場の保護を確保します。」</p>
			</b>
		  </h3>
        <div class="sus4Img"></div>
        </div>

        <div class="text-style1">
          <p class="titStyle5 pb10"><b>SHE経営の4原則</b></p>
        </div>

        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>1. SHE管理体制の確立</b></p>
		  <p>- 各事業領域に安全衛生専門部署を設置した「安全衛生環境管理チーム」を設置し、労働災害の防止に向けた根本的な安全衛生体制を構築する。<br>
- 安全、健康、環境 (SHE) 管理のパフォーマンスを社内および社外の利害関係者に透明に開示します。<br>
- 環境、従業員、ビジネスパートナー、顧客、地域社会の安全と健康を優先します。<br>
- ISO14001（環境マネジメントシステムの国際規格）、ISO45001（労働安全衛生マネジメントシステム）の認証を取得。
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>2. 安全な職場の構築</b></p>
		  <p>- すべてのビジネス分野で「安全第一」の文化を育てます。<br>
- 危険を特定し、事故や怪我のリスクを最小限に抑えるために、施設や設備の職場検査を定期的に実施します。<br>
- 包括的な安全衛生研修を提供することで、従業員とビジネスパートナーが安全な職場で積極的に貢献できるようにします。 潜在的な危険を事前に認識し、安全プロトコルを遵守するため必要な知識とスキルを従業員に提供します。
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>3. 健康な職場づくり</b></p>
		  <p>- 予防に重点を置いた積極的な健康管理システムを導入します。<br>
- 定期的な監査と溶接リスク評価を実施して、作業場内の有害物質 (溶接ヒュームや粉塵など) を特定します。<br>
- 有効な管理措置を実施することにより、健康関連危害の影響を軽減する
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>4. 環境に配慮した職場づくり</b></p>
		  <p>- 継続的なモニタリングを通じて環境フットプリントを削減し、環境リスクを軽減します。<br>
- 環境関連法令を遵守し、国内外の環境問題に積極的に対応します。<br>
- 環境に優しい新しい技術や製品へのイノベーションと投資を促進することで、グリーン ビジネス イニシアチブを推進します。
		  </p>
        </div>
        <p style="margin:20px 0">
          <a href="/pdf/Hyundai_Welding_Environmental_Management_Policy_Kor.pdf" target="_blank" class="btn btnLineGray btn-round" style="margin-right:10px; margin-bottom:10px">
            <i class="xi-document xi-x"></i> Hyundai Welding Environmental Management Policy PDF Korean
          </a>
          <a href="/pdf/Hyundai_Welding_Environmental_Management_Policy_Eng.pdf" target="_blank" class="btn btnLineGray btn-round">
            <i class="xi-document xi-x"></i> Hyundai Welding Environmental Management Policy PDF English
          </a>
		    </p>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
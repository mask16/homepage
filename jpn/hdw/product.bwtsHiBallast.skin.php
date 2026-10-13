<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiBallast.skin.php
+ Description	: product.bwtsHiBallast
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
        <div class="btwsProduct btwsProduct-hiBallast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hiballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              HiBallastは世界最大造船グル－プである現代重工業(株)で開発した船舶用バラスト水処理装置のブランドであり、弊社はHiBallast制作に関するLicenseを保有しております。
			  <br /><br />
              間接式の電気分解方式を使用するHiBallastは、フィルター、電気分解装置、中和装置、TROセンサーなどの主要装備で構成されています。
			  <br /><br />
              フィルターは自動バックフラッシング機能を保有しており、海水に含まれている50μm以上の微生物と有機体をフィルタリングします。
			  <br /><br />
              フィルターを通過する50μm未満の微生物を処理するために、間接式電気分解方式で高濃度(1,000mg/ℓ以下)の次亜塩素酸を生産し、船舶のバラスト水配管に注入し残った微生物を除去ます。
			  <br /><br />
              水処理後、バラスト水が中和作業無く排出された場合、有害な影響を及ぼす恐れがありますので、排出前に中和剤を注入し、バラスト水内に残存されている酸化剤を除去した後で排出するようにします。
            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hiBallast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>処理方式</th>
            <!-- <td>フィルター + 電気分解(間接式)</td>-->
                  <td>Filter ＋ Electrolysis (間接式)</td>
                </tr>
                <tr>
                  <th>消費電力<br />(per 1,000㎥/h)</th>
             <!-- <td>バラスティング時 50kW<br />デバラスティング時 1kW</td>-->
	       <td>Ballasting 50KW<br />Deballasting 1KW</td>
                </tr>
                <tr>
                  <th>処理時点</th>
              <!-- <td>バラスティング時のみ処理<br />デバラスティングの時は中和処理</td>-->
	        <td>Ballastingの際に処理<br />Deballastingの際は中和処理のみ</td>
                </tr>
                <tr>
                  <th>特徴</th>
                  <td>低い消費電力<br />低塩分濃度地域では、全体バラストタンク<br />容量の1%の海水のみで運転可能</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left"><h6>Flow diagram for ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg01.jpg" alt="" /></div>
            <div class="right"><h6>Flow diagram for de-ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg02.jpg" alt="" /></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
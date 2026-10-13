<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsEcoBallast.skin.php
+ Description	: product.bwtsEcoBallast
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
        <div class="btwsProduct btwsProduct-ecoballast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
             EcoBallastは世界最大造船グル－プである現代重工業(株)で開発した船舶用バラスト水処理装置のブランドであり、弊社はEcoBallast制作に関するLicenseを保有しております。
			<br /><br />
              フィルターとUV方式を用いたEcoBallastはフィルター、UVランプ、洗浄機、制御機などの主要設備で構成されています。
			  <br /><br />
              フィルター装備はバラスト水内の沈殿物の量を大幅に減らし、50μm以上の海洋有機体の侵入を防ぐことができます。
			  <br /><br />
              EcoBallastシステム用に特別に設計されたUVランプは高強度重圧紫外線ランプを使用して省スペースと処理効率を最大に高めます。
			  <br /><br />
             完全な水処理の為に、バラスティングとデバラスティング運転の際、システムを作動しなければいけません。これはバラスティングの時に処理された海水内の有機体が増殖することを考慮し、デバラスティングの時には追加的な水処理が必要とすることを意味します。
			  <br /><br />
              CIP(Cleaning in-place)装備は、バラスティング及びデバラスティング運転の時、UVランプの保護管外部に生成される恐れがある異物質を洗浄する自動洗浄装備です。これは海水内の汚染物質によるUVランプの性能の低下を防止するための装備です。
	</div>
            <div class="right"><img src="<?=$skin_url?>/img//content/ecoballast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>処理方式</th>
           <!--        <td>フィルター + 紫外線</td>-->
		<td>Filter + UV</td>
                </tr>
                <tr>
                  <th>電力消費量<br />(per 1,000㎥/h)</th>
                  <td>100kW</td>
                </tr>
                <tr>
                  <th>処理時点</th>
             <!--     <td>バラスティング / デバラスティング</td>-->
                  <td>Ballasting / Deballasting</td>
                </tr>
                <tr>
                  <th>特徴</th>
                  <td>環境に優しい (エコシステム, No chemical)<br />海水温度/塩分濃度の影響なし</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left">
              <img src="<?=$skin_url?>/img/content/ecoballast_btImg01.jpg" alt="" />
            </div>
            <div class="right">

            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
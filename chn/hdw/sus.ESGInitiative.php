<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsCharter.skin.php
+ Description	: sus.ethicsCharter
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>
.productStudy3Wrap img {
    max-width: 100%; 
    margin-bottom: 20px;
}
.productStudy3Wrap {margin-top:100px !important;}
.productStudy3Wrap.brdr-b {
   margin-top: 0px !important;
}
				@media only all and (max-width: 959px) {
				.productStudy3Wrap > div:first-child { width: 200px;}

				}
a, p, span, div, b {
    word-break: break-all;
}
</style>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI WELDING</p>
        <h3>可持续经营</h3>
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
          <h5 class="titStyle5"><b>ESG倡议 </b></h5>
        <div class="text-style1" style="padding-bottom:50px">
		<b>
		现代综合金属是社会的一员,追求可持续价值。我们通过加入并支持全球倡议，负责任地履行ESG管理。
		</b>
        </div>

          <div class="productStudy3Wrap brdr-b">
            <div>
              <div><img src="<?=$skin_url?>/img/content/sus2_1.png" alt="" /></div>
            </div>
            <div>
              <h6 class="titStyle3"><b>Task Force on Climate-Related Financial Disclosures (TCFD) </b></h6>
              <p class="">TCFD是金融稳定委员会(FSB,Financial Stability Board)于2015年为公开有关气候变化的财务信息而设立的全球协议体。 <br>
现代综合金属于2023年1月宣布支持TCFD，透明公开相关信息（支配结构、战略、风险管理、目标管理等）。 <br>
掌握相应的财务风险，以反映整个管理中的可持续性。</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <div><img src="<?=$skin_url?>/img/content/sus2_2.png" alt="" /></div>
            </div>
            <div>
              <h6 class="titStyle3"><b>UN Global Compact (UNGC) </b></h6>
              <p class="">本公司宣布支持四大核心价值人权、劳动、环境、反腐败领域的10项原则,并在所有事业活动中自愿遵守。 <br>
现代综合金属将通过内在化更高水平的意识,尽到负责任的企业市民的作用。</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <div><img src="<?=$skin_url?>/img/content/sus2_3.png" alt="" /></div>
            </div>
            <div>
              <h6 class="titStyle3"><b>家庭友善企业认证</b></h6>
              <p class="">根据《关于促进家庭友好社会环境营造的法律》第15条，模范运营生育及养育支援、弹性工作制度、家庭友好工作文化等家庭友好制度的<br>
企业由公共机关通过文件审查、现场审查及成员满意度调查给予认证的制度。<br>
现代综合金属于2023年12月从女性家族部获得了家庭亲和企业认证。</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <div><img src="<?=$skin_url?>/img/content/sus2_4.png" alt="" /></div>
            </div>
            <div>
              <h6 class="titStyle3"><b>International Standard Organization (ISO) 认证</b></h6>
              <p class="">现代综合金属拥有ISO14001(环境经营系统)、ISO45001 (安全保健经营系统)、ISO9001(质量经营系统)、ISO9001(质量经营系统)、和 IATF16949(汽车质量经营系统) 国际标准认证。</p>
            </div>
          </div>
        </div>
      </section>

      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>ESG评估</b></h5>
        <div class="text-style1" style="padding-bottom:50px">
		<b>以ESG评价结果为基础, 得出改善事项, 并与利害关系人共享, 成为可持续的企业。</b>
        </div>

          <div class="productStudy3Wrap brdr-b">
            <div>
              <div><img src="<?=$skin_url?>/img/content/sus2_5.png" alt="" /></div>
            </div>
            <div>
              <h6 class="titStyle3"><b>Sustinvest</b></h6>
              <p class="">现代综合金属在韩国ESG专业评估机构“Sustinvest”的ESG综合评估中获得BB评级。<br>
特别是，我们在环境和社会领域的卓越表现获得了 A 级的认可。<br>
现代综合金属将根据外部评价继续推进ESG经营。</p>
            </div>
          </div>
        </div>
      </section>

    </div>
  </div>
  <!-- subWrap// -->
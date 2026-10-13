<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsCharter.skin.php
+ Description	: sus.ethicsCharter
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<style>

				@media only all and (max-width: 959px) {
				.productStudy3Wrap > div:first-child {width: 100%;}

				}
</style>
  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>Sustainable Management</p>
        <h3>지속가능경영</h3>
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
          <h5 class="titStyle5"><b>ESG Report</b></h5>
        <div class="text-style1" style="padding-bottom:50px">
		<b>본 보고서는 현대종합금속의 환경, 사회, 경제적 책임에 대한 경영전략, 사업활동, 그리고 사업성과를 종합적으로 수록하고 있습니다.<br>
		현대종합금속은 ESG 보고서를 발간하여 지속가능경영 목표를 달성하기 위해 추진한 활동과 성과를 이해관계자분들께 투명하게 공개합니다.</b>
        </div>

          <div class="productStudy3Wrap brdr-b">
            <div>
              <div><img src="/img/2025ESGMain.png" alt="" style="max-width:100%;width:100%" /></div>
            </div>
            <div>
              <h6 class="titStyle7 pb10"><b>2025 ESG Report </b></h6>
              <p style="margin:10px 0"><a href="/pdf/HyundaiWelding_ESG_Report_Kor.pdf" target="_blank" class="btn btnLineGray btn-round"><i class="xi-document xi-x"></i> 지속가능경영 보고서 PDF 국문</a> <a href="/pdf/HyundaiWelding_ESG_Report_Eng.pdf" target="_blank" class="btn btnLineGray btn-round"><i class="xi-document xi-x"></i> 지속가능경영 보고서 PDF 영문</a></p>
            </div>
          </div>

<h5 class="titStyle7"><b>연도별 다운로드</b></h5>

<div class="productStudy3Wrap">
  <div style="width:100%; padding:0; font-size:16px; line-height:1.6;">

    <!-- 2025 -->
    <div style="display:flex; align-items:baseline; flex-wrap:wrap; column-gap:clamp(40px, 12vw, 220px); row-gap:10px; margin:10px 0;">
      <h6 class="titStyle3 pb10" style="margin:0; padding-bottom:0;">
        <b>2025 지속가능경영 보고서</b>
      </h6>
      <p style="margin:0;">
        <a href="/pdf/HyundaiWelding_ESG_Report_Kor.pdf"
           target="_blank"
           class="btn btnLineGray btn-round">
          <i class="xi-document xi-x"></i> 국문
        </a>
        <a href="/pdf/HyundaiWelding_ESG_Report_Eng.pdf"
           target="_blank"
           class="btn btnLineGray btn-round">
          <i class="xi-document xi-x"></i> 영문
        </a>
      </p>
    </div>

    <!-- 2023 -->
    <div style="display:flex; align-items:baseline; flex-wrap:wrap; column-gap:clamp(40px, 12vw, 220px); row-gap:10px; margin:10px 0;">
      <h6 class="titStyle3 pb10" style="margin:0; padding-bottom:0;">
        <b>2023 지속가능경영 보고서</b>
      </h6>
      <p style="margin:0;">
        <a href="/pdf/ESG_Report_Kor.pdf"
           target="_blank"
           class="btn btnLineGray btn-round">
          <i class="xi-document xi-x"></i> 국문
        </a>
        <a href="/pdf/ESG_Report_Eng.pdf"
           target="_blank"
           class="btn btnLineGray btn-round">
          <i class="xi-document xi-x"></i> 영문
        </a>
      </p>
    </div>

  </div>
</div>





      </section>
    </div>
  </div>
  <!-- subWrap// -->
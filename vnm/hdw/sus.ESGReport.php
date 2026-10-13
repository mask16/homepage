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
        <p>HYUNDAI WELDING</p>
        <h3>khã năng quản lý bền vững</h3>
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
          <h5 class="titStyle5"><b>Báo cáo ESG</b></h5>
        <div class="text-style1" style="padding-bottom:50px">
		<b>Báo cáo Phát triển bền vững của Hyundai General Metals trình bày một cách toàn diện chiến lược quản lý bền vững, hoạt động kinh doanh và hiệu quả hoạt động của chúng tôi liên quan đến các trách nhiệm về môi trường, xã hội và kinh tế. Chúng tôi xuất bản Báo cáo Phát triển Bền vững để cung cấp thông tin minh bạch cho các bên liên quan về các hoạt động và thành tựu đạt được nhằm đạt được các mục tiêu quản lý bền vững của chúng tôi.</b>
        </div>

          <div class="productStudy3Wrap brdr-b">
            <div>
              <div><img src="/img/2025ESGMain.png" alt="" style="max-width:100%;width:100%" /></div>
            </div>
            <div>
              <h6 class="titStyle7 pb10"><b>Báo cáo bền vững năm 2025</b></h6>
              <p style="margin:10px 0">
                <a href="/pdf/HyundaiWelding_ESG_Report_Kor.pdf" target="_blank" class="btn btnLineGray btn-round">
                  <i class="xi-document xi-x"></i> Sustainability Report PDF Korean
                </a>
                <a href="/pdf/HyundaiWelding_ESG_Report_Eng.pdf" target="_blank" class="btn btnLineGray btn-round">
                  <i class="xi-document xi-x"></i> Sustianability Report PDF English
                </a>
              </p>
            </div>
          </div>

          <h5 class="titStyle7"><b>Tải xuống</b></h5>
          <div class="productStudy3Wrap">
            <div style="width:100%; padding:0; font-size:16px; line-height:1.6;">

              <!-- 2025 -->
              <div style="display:flex; align-items:baseline; flex-wrap:wrap; column-gap:clamp(40px, 12vw, 220px); row-gap:10px; margin:10px 0;">
                <h6 class="titStyle3 pb10" style="margin:0; padding-bottom:0;">
                  <b>Báo cáo bền vững năm 2025</b>
                </h6>
                <p style="margin:0;">
                  <a href="/pdf/HyundaiWelding_ESG_Report_Kor.pdf"
                     target="_blank"
                     class="btn btnLineGray btn-round">
                    <i class="xi-document xi-x"></i> Korean
                  </a>
                  <a href="/pdf/HyundaiWelding_ESG_Report_Eng.pdf"
                     target="_blank"
                     class="btn btnLineGray btn-round">
                    <i class="xi-document xi-x"></i> English
                  </a>
                </p>
              </div>

              <!-- 2023 -->
              <div style="display:flex; align-items:baseline; flex-wrap:wrap; column-gap:clamp(40px, 12vw, 220px); row-gap:10px; margin:10px 0;">
                <h6 class="titStyle3 pb10" style="margin:0; padding-bottom:0;">
                  <b>Báo cáo bền vững năm 2023</b>
                </h6>
                <p style="margin:0;">
                  <a href="/pdf/ESG_Report_Kor.pdf"
                     target="_blank"
                     class="btn btnLineGray btn-round">
                    <i class="xi-document xi-x"></i> Korean
                  </a>
                  <a href="/pdf/ESG_Report_Eng.pdf"
                     target="_blank"
                     class="btn btnLineGray btn-round">
                    <i class="xi-document xi-x"></i> English
                  </a>
                </p>
              </div>

            </div>
          </div>
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->

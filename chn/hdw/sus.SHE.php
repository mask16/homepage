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

    <div class="subContent conPd">
      <section class="susWrap susCharter">
        <div class="subTitleArea" style="border-bottom:solid 1px #e5e5e5;padding-bottom:50px;">
          <h3 class="titStyle5"><b>SHE (Safety, Health and Environment) 经营体系</b></h3>
          <h3 class="text-style1">
			<b>安全保健环境(SHE)经营愿景 <br><br>
				<p class="titStyle5">“以人和现场为中心，安全是我们所做一切的首要任务。”</p>
			</b>
		  </h3>
        <div class="sus4Img"></div>
        </div>

        <div class="text-style1">
          <p class="titStyle5 pb10"><b>SHE管理的4大目标</b></p>
        </div>

        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>1. SHE管理体系建立</b></p>
		  <p>- 为了预防产业灾害及重大灾害,设立"安全保健环境经营组",在各事业领域设立安全保健专门部门。	<br>																			
- 向内部和外部利益相关者透明地披露安全、健康和环境 (SHE) 管理绩效。	<br>																			
- 优先考虑环境、员工、业务合作伙伴、客户和当地社区的安全和健康。<br>																				
- 获得ISO 14001（环境经营）和ISO 45001（安全保健体系）认证, 构建安全保健环境经营体系。<br>																				

		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>2. 建立安全的工作场所</b></p>
		  <p>- 在所有业务领域培育“安全第一”的文化。<br>																				
- 定期对工作场所的设施和设备进行检查，以识别危险并最大程度地减少事故和伤害的风险。<br>																				
- 通过实施定期安全保健教育，强化所有职员和合作企业的必要力量，努力预防事故的发生。<br>																				
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>3. 促进健康的工作场所</b></p>
		  <p>- 运营以预防中心的保健管理系统。<br>				
- 通过有害物质管理构建健康车间。<br>				
- 周期性工作环境监测。	<br>			
<br>
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10" style="font-size:1.8em"><b>4. 创建环保工作场所</b></p>
		  <p>- 通过持续监测减少环境足迹并降低环境风险。		<br>				
- 遵守环境法律法规，积极应对国内外环境问题。	<br>					
- 为环保技术开发和事业运营，持续推进投资、研究、活动。	<br>					
<br>
		  </p>
        </div>

        <p style="margin:20px 0">
          <a href="/pdf/Hyundai_Welding_Environmental_Management_Policy_Kor.pdf" target="_blank" class="btn btnLineGray btn-round" style="margin-right:10px; margin-bottom:10px">
            <i class="xi-document xi-x"></i> 现代综合焊材 环境管理方针 PDF 韩语版
          </a>
          <a href="/pdf/Hyundai_Welding_Environmental_Management_Policy_Eng.pdf" target="_blank" class="btn btnLineGray btn-round">
            <i class="xi-document xi-x"></i> 现代综合焊材 环境管理方针 PDF 英语版
          </a>
		    </p>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
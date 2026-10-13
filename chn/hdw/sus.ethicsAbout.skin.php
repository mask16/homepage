<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsAbout.skin.php
+ Description	: sus.ethicsAbout
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

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
      <section class="susWrap susAbout">

        <div class="subTitleArea">
          <p class="titStyle7 pb10"><b>追求正直，公正，清廉。</b></p>
          <h3 class="titStyle5"><b>伦理经营的目的和必要性</b></h3>
        </div>

        <div class="text-style1">
          现代综合金属集团将按照新的时代环境，引入追求透明、公正、合理业务的"伦理经营"。
		  <br/>
          伦理经营的引入以只追求短期利润就无法实现可持续发展的认识为基础，以纠正公司内错误惯例，确立执行业务时职员的正确价值观，同时履行企业的社会责任为目标而行。
          目前，WTO、OECD、ICC等国际组织正在推进"反腐败回合"，UNEF、ISO等机构也在努力推进伦理经营的规范化和标准化，将"公平透明的竞争规则"应用于国际商务交易。
          我们将通过伦理经营这一新概念的未来经营战略，满足所有利害关系人的伦理理念，得到国民的信赖和爱戴，努力树立新的企业文化，谋求持续发展。
          现代综合金属集团最终将通过伦理经营，为从国际经济社会成长为21世纪超一流跨国企业奠定基础。
        </div>

        <div class="susAboutContent">
            <div class="left">
              <div class="circieBlue circieBlue1">透明的<br>价值观</div>
              <div class="circieBlue circieBlue2">公正的<br>业务执行</div>
            </div>
            <div class="bar"></div>
            <div class="right">
              <div class="circleBlueLine">社会对企业<br>伦理意识的信任</div>
            </div>
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->
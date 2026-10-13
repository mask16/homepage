<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail.skin.php
+ Description	: sus.unethicalResultDetail.skin.php
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

    <div class="subContent">
      <section class="susWrap">
        <div class="conPd">
          <div class="subTitleArea">
            <p class="text-style1">
				<b>
					干部和职员要根据伦理纲领及伦理经营实践方针进行举报，如果本文没有明示或对解释的主张存在对立，就向伦理经营室咨询，并根据其解释。
					公司为了诚实履行伦理经营，通过多种途径运营内部举报制度，其以匿名举报为原则。
				</b>
			</p>
          </div>
        </div>

        <div class="innerWrap">
          <ul class="unethicalTargetList">
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail1">
                <span class="titStyle7"><b>贪污财物</b></span>
                <span class="text-style2">有关职务侵吞公司公款或收受外部利益相关者财物或宴请的行为</span>
                <span class="text-style2">揭发贪污公款及收受财物时，考虑金额是否过多、公司损失与否等，可以考虑刑事起诉及解雇。</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail2">
                <span class="titStyle7"><b>职场欺凌</b></span>
                <span class="text-style2">利用公司内优越地位，对其他职工造成身心痛苦或者暴力、咒骂等使工作环境恶化的行为</span>
                <span class="text-style2">如果发现职场欺凌行为，根据事件的轻重，可以考虑对其给予免职处分。</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail3">
                <span class="titStyle7"><b>职场性骚扰</b></span>
                <span class="text-style2">利用公司内地位或以与工作等相关的性言行或性要求等使对方产生性屈辱感或厌恶感的行为。</span>
                <span class="text-style2">即使是在聚餐时偶发饮酒性戏弄的情况，也可以考虑以零容忍原则进行处罚。</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail4">
                <span class="titStyle7"><b>其他非伦理行为申报</b></span>
                <span class="text-style2">违反伦理纲领规范及实践指南的事项</span>
                <span class="text-style2">违反伦理纲领及实践指南的行为或其他被认为违法或不道德的行为</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->

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
      <section class="susWrap">
        <div class="conPd">
          <div class="subTitleArea">
            <p class="text-style1"><b>임직원은 윤리강령 및 실천지침에 따라 신고하되, 본문에 명시되지 않았거나 해석에 대한 주장이 대립할 소지가 있을 경우,
                윤리경영실에 문의하고 그 해석에 따른다. 회사는 윤리경영이 성실히 실천될 수 있도록 다양한 경로로 내부제보, 신고 제도를 운영하며, 이는 익명신고를 원칙으로 한다.</b></p>
          </div>
        </div>

        <div class="innerWrap">
          <ul class="unethicalTargetList">
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail1">
                <span class="titStyle7"><b>공금횡령 및 금품 수수</b></span>
                <span class="text-style2">직무와 관련하여 회사의 공금을 횡령하거나 외부 이해관계자로부터 금품 또는 향응을 수수하는 행위 관련</span>
                <span class="text-style2">공금횡령 및 금품수수 적발 시 금액의 과다 여부, 회사의 손실여부 등을 고려하여 형사고발 및 해임을 검토할 수 있다.</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail2">
                <span class="titStyle7"><b>직장 내 괴롭힘</b></span>
                <span class="text-style2">직장 내에서 우월적 지위를 이용하여 다른 직원에게 신체적, 정신적 고통을 주거나 폭력, 욕설 등으로 업무환경을 악화시키는 행위 관련</span>
                <span class="text-style2">직장 내 괴롭힘 적발 시 사안의 경중에 따라 해임까지 징계를 고려할 수 있다.</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail3">
                <span class="titStyle7"><b>직장 내 성희롱</b></span>
                <span class="text-style2">직장 내 지위를 이용하거나 업무 등과 관련하여 성적 언동 또는 성적 요구 등으로 상대방에게 성적 굴욕감이나 혐오감을 느끼게 하는 행위 관련</span>
                <span class="text-style2">이유 여하를 막론하고 무관용을 원칙으로 하며 해임까지 징계를 고려할 수 있다.</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail4">
                <span class="titStyle7"><b>기타 비윤리 행위</b></span>
                <span class="text-style2">윤리경영 규범 및 실천지침 위반 사항</span>
                <span class="text-style2">윤리경영 규범 및 실천지침에 위배되는 행위 또는 그 밖에 불법적이거나 비윤리적이라고 판단되는 행위 관련</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->

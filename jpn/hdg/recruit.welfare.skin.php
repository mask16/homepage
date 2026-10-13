<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/recruit.welfare.skin.php
+ Description	: recruit.welfare
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualRecruit">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI GLOVILLE</p>
		<h3>採用情報</h3>
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
      <div class="recruitWelfare">
        <div class="conPd">
          <h5 class="titStyle5"><b>メリット</b></h5>
          <p class="text-style1">同種業界最高水準の給与を通して構成員の意欲を高め、生活の安定を維持し、業務の効率化を高めています</p>

          <ul class="recruitWelfareList">
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg01.png" />
              <p><b>子女教育費支援</b></p>
              <p>幼稚園、中高等学校、専門大学、4年生制大学教育費支援</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg02.png" />
              <p><b>冠婚葬祭支援</b></p>
              <p>本人及び家族などの慶弔見舞金、慶弔休暇及び互助用品支援</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg03.png" />
              <p><b>社内食堂運営</b></p>
              <p>工場内社内食堂運営、本社および各事務所は食費支援</p>
            </li>
            <!-- <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg04.png" />
              <p><b>住宅資金支援</b></p>
              <p>賃貸及び住宅購入時、住宅資金を支援</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg05.png" />
              <p><b>出勤バス運営</b></p>
              <p>出勤時、コース別出勤バス運営(浦項工場運行)</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg06.png" />
              <p><b>寮の運営</b></p>
              <p>浦項工場、独身寮の提供</p>
            </li> -->
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg07.png" />
              <p><b>夏期休暇費支援</b></p>
              <p>従業員夏期休暇費支援</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg08.png" />
              <p><b>車両維持費支援</b></p>
              <p>次長以上</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg09.png" />
              <p><b>贈り物の支給</b></p>
              <p>旧正月、旧お盆、労働者の日、創立記念日、誕生日</p>
            </li>
            <!-- <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg10.png" />
              <p><b>医療費支援</b></p>
              <p>本人の病と傷害の時、医療費を支援</p>
            </li> -->
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg11.png" />
              <p><b>長期勤務報償</b></p>
              <p>金指輪支給</p>
            </li>
            <!-- <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg12.png" />
              <p><b>상가 지원</b></p>
              <p>상가소모품 지원</p>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- subWrap// -->

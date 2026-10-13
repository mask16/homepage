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
        <p>CAREERS</p>
        <h3>채용정보</h3>
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
          <h5 class="titStyle5"><b>Benefits</b></h5>
          <p class="text-style1">동종업계 최고 수준의 급여를 통해 구성원의 의욕을 고취하고, 생활의 안정을 유지시켜 업무의 효율성을 높이고 있습니다. </p>

          <ul class="recruitWelfareList">
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg01.png" />
              <p><b>자녀학자금 지원</b></p>
              <p>유치원, 중·고등학교, 전문대, 4년제 대학교 학자금 지원</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg02.png" />
              <p><b>경조사 지원</b></p>
              <p>본인 및 가족 등의 경조비, 경조휴가 지급 및 상조용품 지원</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg03.png" />
              <p><b>구내식당 운영</b></p>
              <p>공장 내 구내식당 운영, 본사 및 각 사무소는 식대지원</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg04.png" />
              <p><b>주택자금지원</b></p>
              <p>전세 및 주택구입시 주택자금 지원</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg05.png" />
              <p><b>출근버스 운영</b></p>
              <p>출근시 코스별 출근버스 운행 (포항공장 운행)</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg06.png" />
              <p><b>기숙사 운영</b></p>
              <p>포항공장 독신자 숙소 제공</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg07.png" />
              <p><b>하계휴가비 지원</b></p>
              <p>임직원 하계휴가비 지원</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg08.png" />
              <p><b>차량유지비 지원</b></p>
              <p>차장 이상</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg09.png" />
              <p><b>선물 지급</b></p>
              <p>구정, 추석, 근로자의 날, 창립기념일, 생일</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg10.png" />
              <p><b>의료비 지원</b></p>
              <p>본인 질병, 상해 시  의료비 지원</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg11.png" />
              <p><b>장기근속 포상</b></p>
              <p>금반지 지급</p>
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

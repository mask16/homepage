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

    <div class="subContent conPd">
      <section class="susWrap susCharter">
        <div class="subTitleArea" style="border-bottom:solid 1px #e5e5e5;padding-bottom:50px;">
          <h3 class="titStyle5"><b>SHE 경영체계</b></h3>
          <h3 class="text-style1">
			<b>안전보건환경(SHE) 경영비전 <br><br>
				<p class="titStyle5">"사람과 현장을 중심으로<br> 안전을 최우선으로 한다."</p>
			</b>
		  </h3>
        <div class="sus4Img"></div>
        </div>

        <div class="text-style1">
          <p class="titStyle5 pb10"><b>SHE 4대 목표</b></p>
        </div>

        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10"><b>1. SHE 관리체계 확립</b></p>
		  <p>- 산업재해 및 중대재해 예방을 위해 '안전보건환경경영팀' 설립하고, 각 사업영역별로 안전보건 전담 부서를 마련하여 체계적인 안전보건 시스템 정착<br>
		  - 안전보건환경 경영 성과를 대내외 이해관계자에게 투명하게 공개<br>
		  - 임직원, 협력업체, 고객, 지역사회의 안전환경보건을 최우선으로 고려<br>
		  - ISO 14001(환경경영)과 ISO 45001(안전보건경영) 취득하여 안전보건환경 경영 시스템 구축
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10"><b>2. 안전한 사업장 조성</b></p>
		  <p>- 전 부문 안전 최우선 문화 장착<br>
		  - 사업장의 시설, 장비, 도구 등 근로환경을 정기적으로 점검하여 위험을 예방하고 환경부하를 최소화<br>
		 - 정기 안전보건 교육 실시를 통해 모든 임직원과 협력업체는 필요한 역량을 강화하고 사고를 예방할 수 있도록 노력<br>
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10"><b>3. 건강한 사업장 조성 </b></p>
		  <p>- 예방중심의 보건관리시스템 운영<br>
		  - 유해물질 관리를 통한 건강한 작업장 구축<br>
		  - 주기적 작업환경 측정<br>
		  </p>
        </div>
        <div class="text-style1" style="padding-top:50px">
          <p class="titStyle5 pb10"><b>1. SHE 관리체계 확립</b></p>
		  <p>- 산업재해 및 중대재해 예방을 위해 '안전보건환경경영팀' 설립하고, 각 사업영역별로 안전보건 전담 부서를 마련하여 체계적인 안전보건 시스템 정착<br>
		  - 안전보건환경 경영 성과를 대내외 이해관계자에게 투명하게 공개<br>
		  - 임직원, 협력업체, 고객, 지역사회의 안전환경보건을 최우선으로 고려<br>
		  - ISO 14001(환경경영)과 ISO 45001(안전보건경영) 취득하여 안전보건환경 경영 시스템 구축
		  </p>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
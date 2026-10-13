<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail4.skin.php
+ Description	: sus.unethicalResultDetail4.skin.php
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

    <div class="subContent unethicalTargetDetail">
      <section class="susWrap">

        <div class="innerWrap">
          <a href="<?=$host_url?>/sus/unethicalTarget" class="backBtn">신고대상 전체보기</a>
          <div class="subTitleArea">
            <h5 class="titStyle5"><b>기타 비윤리 행위 신고</b></h5>
            <p class="bar-text">윤리강령 및 실천지침에 위배되는 행위 또는 그 밖에 불법적이거나 비윤리적이라고 판단되는 행위</p>
          </div>
          <div class="unethicalTargetDetailWrap">

            <div class="unethicalTargetDetailCon">
              <p><b>1) 임원(부서장) 및 부서원의 책임</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>임원 및 부서장이 부하직원에게 위법한 업무 지시를 하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>상사의 위법한 업무 지시를 이행하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>근무시간에 근무하지 않거나 상사의 지시사항을 이행하지 않는 행위</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>2) 고객에 대한 책임</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>고의적으로 고객과의 약속을 지키지 않는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>고객의 불만사항 해결을 미루는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>고객의 정보를 임의적으로 이용 및 유출하는 행위</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>3) 인사청탁</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>이해관계자에게 가족, 친인척 및 지인의 취업을 청탁하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>인사팀에 특정인의 취업을 청탁하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>부하직원이 이유없이 부당한 인사평가를 받도록 인사팀에 요청하는 행위</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>4) 중복취업 및 겸직</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>회사의 승인없이 다른 회사에 중복 취업을 하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>회사의 승인없이 다른 회사에 직무를 겸직하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>퇴사 후 이해관계자로부터 취업을 보장 및 약속 받는 행위</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>5) 협력업체와 계약체결</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>명확한 사유없이 특정 업체를 선정 또는 기피, 배제하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>이유없이 대금지급 기준을 위반하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>사전승인 없이 회사의 인력 및 장비, 서비스, 정보 등을 임의로 사용 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>공사, 용역 등을 시세보다 고가로 계약하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>이해관계 상충 발생 시 신고를 하지 않거나 허위로 신고하는 행위</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>6) 업무수행</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>전산출하 제한 시스템을 무시하고 임의적으로 제품출하를 지시하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>이유없이 특정업체의 판매가격에 특혜를 주는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>중요 보고문서의 오류 발생을 인지한 후 수정보고를 하지 않는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>직무와 관련하여 취득한 정보를 개인목적으로 이용하는 행위</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>7) 회사재산의 사적사용 및 파손</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>차량, 노트북, 고가의 소모품, 사무용품을 무단 반출하여 사적으로 사용하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>토지, 건물, 설비기기 등 유형자산을 개인 영리목적으로 사용하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>회사의 재산을 고의로 파손하는 행위</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>8) 사행성 행위 등</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>임직원 상호 간에 도박 등의 사행성 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>임직원 상호 간에 각종 보증, 금융상품 또는 물품 구매 강요 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>회사의 승인없는 근무시간 중 알코올 섭취 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>회사의 승인없이 주취 상태로 출근하여 근무하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>음주운전 및 이를 통해 사고를 발생시키는 행위</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>9) 사내정보 및 보안관리</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>회사의 지적재산권 및 영업비밀, 회사기밀 등의 내부정보 유출 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>회사의 사전 승인없이 회사의 규범 및 규정, 지침 등 외부 유출 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>타인의 ID와 패스워드를 이용하여 허가받지 않은 정보 열람행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>저작권을 침해할 수 있는 자료를 회사 내 무단으로 배포행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>5)</span>불법 소프트웨어를 사용하는 행위</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
              <p><b>10) 윤리강령 및 실천지침의 준수</b></p>
              <div class="tableStyle1">
                <div class="tableHeader">
                  <table class="thc">
                    <colgroup>
                      <col width="100%">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>윤리경영 위반행위에 대한 신고대상</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- tableHeader// -->
                <ul class="tableList">
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>1)</span>임직원의 윤리강령 및 실천지침 미준수 행위</p></div>

                  </li>
                  
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>2)</span>타인에 대한 비방, 중상을 목적으로 내부신고제도를 악용하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>3)</span>내부 신고자 신원 공개를 하는 행위</p></div>

                  </li>
                  <li>
                    <div><span class="mTit"></span><p class="num-text"><span>4)</span>내부 신고자에 대한 신분상 불이익을 주는 행위</p></div>

                  </li>
                </ul>
              </div>
            </div>

            <div class="unethicalTargetDetailCon">
                <p>임직원은 윤리강령 및 실천지침에 따라 신고하되, 본문에 명시되지 않았거나 해석에 대한 주장이 대립할 소지가 있을 경우, 윤리경영실에 문의하고 그 해석을 따른다.</p>
            </div>


          </div>
          <!-- unethicalTargetDetailWrap// -->
        </div>

      </section>
    </div>
  </div>
  <!-- subWrap// -->

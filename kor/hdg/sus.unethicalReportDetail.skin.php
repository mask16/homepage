<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalReportDetail.skin.php
+ Description	: sus.unethicalReportDetail.skin.php
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

    <div class="subContent ">
      <div class="innerWrap">
        <a href="<?=$host_url?>/sus/unethicalReport" class="backBtn">신고하기 메인으로</a>

        <div class="unethicalReport">
          <div class="unethicalReportBox">
            <p class="text-style1"><b>신고자의 비밀은 절대적으로 보호되며, 홈페이지 외 아래 방법으로도 신고 가능합니다.</b></p><br /><br />
            <p class="num-text"><span>1. </span>e-mail : ethics@hyundaiwelding.com</p>
            <p class="num-text"><span>2.</span> 전화 : (02)6230-6000 ARS 안내 : 윤리경영실 선택</p>
            <p class="num-text"><span>3. </span>우편신고 : 서울 강남구 테헤란로 507 WeWork빌딩 16층 윤리경영실</p>
            <p class="num-text"><span>4. </span>기타 : 윤리경영실 직원에게 서면 및 직원 휴대폰으로 신고가능</p>
          </div>
<!--
          <div class="unethicalReportBox">
            <p class="text-style1"><b>비윤리신고를 위한 개인정보 수집 동의</b></p><br /><br />

            <p class="num-text"><span>1. </span>최소한의 개인정보만을 수집합니다. 신고내용 확인 및 신고결과의 회신 서비스 제공을 목적으로 개인정보 수집 이용 동의를 구합니다.</p>
            <p class="num-text"><span>2. </span>수집하려는 개인정보 항목<br />
              - 작성자, 전화번호, E-MAIL, 비밀번호</p>
            <p class="num-text"><span>3. </span>개인정보의 보유 및 이용기간은 신고일부터 3년 입니다.</p>

            <div class="radioWrap">
              <label class="check"><input type="radio" name="chAgree" id="chAgree" value="Y"  class="radioStyle1" /> 동의함 <span class="checkMark"></span></label>
              <label class="check"><input type="radio" name="chAgree" value="N" class="radioStyle1" /> 동의안함 <span class="checkMark"></span></label>
            </div>
          </div>
-->
          <form id="fm" action="<?=$ActionUrl?>" method="post" enctype="multipart/form-data">
          <div class="unethicalReportForm">
            <h5 class="titStyle5"><b>신고하기</b></h5>
            <p class="text-style1"></span>익명 신고를 희망하실 경우, 개인정보(성명, 전화번호, 이메일)를 기재하지 않으셔도 됩니다.</p>
            <ul>
              <li>
                <p class="label">작성자</p>
                <div class="right">
                  <input type="text" class="inputStyle1" name="reporter" id="reporter" placeholder="작성자명을 입력하세요" />
                </div>
              </li>
              <li>
                <p class="label">전화번호</p>
                <div class="right">
                  <div class="tel">
                    <div>
                      <select class="selectStyle2" id="tel1" name="tell[0]">
                        <?=code_select_option('hp_number',0)?>
                      </select>
                    </div>
                    <div><input type="tel" id="tel2" name="tell[1]" class="inputStyle1" maxlength="9" placeholder="전화번호를 입력하세요" /></div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">E-mail</p>
                <div class="right">
                  <div class="mail">
                    <div><input type="text" class="inputStyle1" id="email1" name="email[0]" maxlength="30" placeholder="이메일을 입력하세요" /></div>
                    <div class="at">@</div>
                    <div><input type="text" class="inputStyle1" id="email2" name="email[1]" maxlength="30" placeholder="이메일을 입력하세요" /></div>
                    <div>
                      <select class="selectStyle2" onchange="fnMail(this.value)">
		                  <option value="">직접입력</option>
		                  <?=code_select_option('EmailList',0)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
			  <li>
                <p class="label">카테고리</p>
                <div class="right">
                  <div class="category">
                    <div>
                      <select class="selectStyle2" name="category">
						<?=code_select_option('report_category',0,$category)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">제목</p>
                <div class="right">
                  <input type="text" name="title" id="title" class="inputStyle1 required" maxlength="100" placeholder="제목을 입력하세요" />
                </div>
              </li>
              <li>
                <p class="label">내용</p>
                <div class="right">
                  <textarea name="content" id="content" rows="20" class="textareaStyle1 required" placeholder="내용을 입력하세요"></textarea>
                </div>
              </li>
              <li>
                <p class="label">첨부파일</p>
                <div class="right">
                  <ul>
                    <li>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="파일선택" disabled="disabled">
                        <label for="file1"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file1" name="fileupload[0]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="파일선택" disabled="disabled">
                        <label for="file2"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file2" name="fileupload[1]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="파일선택" disabled="disabled">
                        <label for="file3"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file3" name="fileupload[2]" class="upload-hidden">
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <p class="label">비밀번호</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" name="password" id="password" maxlength="20" placeholder="비밀번호를 입력하세요" />
                  <p class="c-gray">8자리 이상입력, 영문 · 숫자 · 특수문자 조합 필수</p>
                </div>
              </li>
              <li>
                <p class="label">비밀번호 확인</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" id="passwordRe" maxlength="20" placeholder="비밀번호를 한번 더 입력하세요" />
                </div>
              </li>
            </ul>
          </div>

			<input type="hidden" name="mode" value="" />
			<input type="hidden" name="token" value="" />
			<input type="hidden" name="ReturnUrl" value="<?=$ThisUrl?>" />
			<input type="hidden" name="url" value="<?=$url?>" />
			<input type="hidden" name="site" value="<?=$shost?>" />
			<input type="hidden" name="lang" value="<?=$schar?>" />
          </form>
          <!-- unethicalReportForm// -->

          <div class="unethicalReportBt tac">
            <p class="text-style1">처리결과 확인을 위해서는 내용작성 완료 후 발급되는 접수번호와<br />신고 시 입력하신 비밀번호가 필요하오니 기록 부탁드립니다.</p>
            <button type="button" class="btn btn-round btnBlue layerBtn" onclick="fm_submit()">등록</button>
            <a href="<?=$host_url?>/sus/unethicalReport"><button type="button" class="btn btn-round btnLineBlue"">취소</button></a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- subWrap// -->

  <div class="dim-layer popupContact" id="layer_report">
    <div class="dimBg"></div>
    <div class="pop-layer">
      <a href="<?=$host_url?>/sus/unethicalResult" class="btn-layerClose btn-Close"></a>
      <div class="popupHeader">
        <h5><b>신고가 완료되었습니다.</b></h5>
      </div>
      <div class="pop-body">
        <p class="text-style1">접수번호 : <span class="c-blue" id="reportNo"></span></p><br /><br />

        <p class="text-style1 c-gray">결과를 확인하기 위해서는 접수번호와 신고내용 입력 시 작성된 비밀번호가 필요합니다. <br />번호를 분실하실 경우 결과 확인이 어려우니, 기록 부탁드립니다.</p>
      </div>
      <div class="pop-ft tac">
          <a href="<?=$host_url?>/sus/unethicalResult" class="btn-Close btn btnBlue btn-round">확인</a>
      </div>
    </div>
  </div>

  <script type="text/javascript">
	$(document).ready(function() {
    	fnFileEvent();

		<?php if( $reportNo ){?>
			$('#reportNo').text('<?=$reportNo?>');
			$('#layer_report').show('fast');
		<?php }?>
    });

    function fnFileEvent(){
        var fileTarget = $('.filebox .upload-hidden');

        fileTarget.off('change').on('change', function() {
          if (window.FileReader) {
            var filename = $(this)[0].files[0].name;
          } else {
            var filename = $(this).val().split('/').pop().split('\\').pop();
          }

          $(this).siblings('.upload-name').val(filename);
        });
    }

	function fnMail(val_){
    	$('#email2').val(val_);
    	if(val_ == '') $('#email2').focus();
    }

	//submit
	function fm_submit(){
		// token
		if( !token_check('fm') )	return false;

		//필수항목검수
/*  
		if($("input[name='chAgree']:checked").val() != 'Y'){
    		alert('비윤리신고를 위한 개인정보 수집에 동의해주세요.');
    		$('#chAgree').focus();
			return false;
    	}
*/
		if( $("#password").val().trim() != $("#passwordRe").val().trim() ){
			alert('비밀번호와 비밀번호확인 값이 같지 않습니다');
			return false;
		}
		if( !fm_check('fm') )	return false;

		if( confirm('신고하시겠습니까?') ){
			$("#fm [name=mode]").val('reportSubmit');
			$("#fm").submit();
		}
	}
  </script>
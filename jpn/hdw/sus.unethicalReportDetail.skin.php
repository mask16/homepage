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
		<p>HYUNDAI WELDING</p>
		<h3>持続可能経営</h3>
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
        <a href="<?=$host_url?>/sus/unethicalReport" class="backBtn">申告する メインページへ</a>

        <div class="unethicalReport">
        <div class="unethicalReportBox">
          <p class="text-style1"><b>申告者の秘密は絶対的に保護され、ホームページ以外にも下記の方法で申告が可能です</b></p><br /><br />
          <p class="num-text"><span>1. </span>e-mail : ethics@hyundaiwelding.com</p>
          <p class="num-text"><span>2.</span> 電話 : 82-2 6230-6000 ARS案内 : 倫理経営室選択</p>
          <p class="num-text"><span>3. </span>郵便の申告 : Ethics Management Office on the 17th floor of WeWork Building 507 Teheran-ro, Gangnam-gu, Seoul</p>
          <p class="num-text"><span>4. </span>その他 : 倫理経営室の職員に直接申告</p>
        </div>
<!--        
          <div class="unethicalReportBox">
            <p class="text-style1"><b>非倫理申告の為の個人情報の収集の同意</b></p><br /><br />

            <p class="num-text">
				<span>1. </span>最小限の個人情報だけを収集いたします申告内容の確認及び、申告の結果に対する回答サービスを目的として個人情報の収集及び利用に対し同意を求めます。
			</p>
            <p class="num-text"><span>2. </span>収集しようとする個人情報の項目<br />
              - 作成者、電話番号、E-MAIL、パスワード</p>
            <p class="num-text"><span>3. </span>個人情報の保有及び、利用期間は申告日から3年になります。</p>
            <p class="num-text"><span>4. </span>個人情報の収集に対する同意を拒否された場合、非倫理申告の利用が出来ません。</p>
            <div class="radioWrap">
              <label class="check"><input type="radio" name="chAgree" id="chAgree" value="Y"  class="radioStyle1" /> 同意 <span class="checkMark"></span></label>
              <label class="check"><input type="radio" name="chAgree" value="N" class="radioStyle1" /> 不同意 <span class="checkMark"></span></label>
            </div>
          </div>
-->
          <form id="fm" action="<?=$ActionUrl?>" method="post" enctype="multipart/form-data">
          <div class="unethicalReportForm">
            <h5 class="titStyle5"><b>申告する</b></h5>
            <p class="text-style1">匿名申告をご希望の場合は、個人情報(氏名、電話番号、Eメール)をご記入いただかなくても結構です。</p>
            <ul>
              <li>
                <p class="label">作成者</p>
                <div class="right">
                  <input type="text" class="inputStyle1" name="reporter" id="reporter" placeholder="作成者のお名前を入力してください" />
                </div>
              </li>
              <li>
                <p class="label">電話番号</p>
                <div class="right">
                  <div class="tel">
                    <div>
                      <select class="selectStyle2" id="tel1" name="tell[0]">
                        <?=code_select_option('hp_number',0)?>
                      </select>
                    </div>
                    <div><input type="tel" id="tel2" name="tell[1]" class="inputStyle1" maxlength="9" placeholder="電話番号を入力してください" /></div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">E-mail</p>
                <div class="right">
                  <div class="mail">
                    <div><input type="text" class="inputStyle1" id="email1" name="email[0]" maxlength="30" placeholder="メールアドレスを入力してください" /></div>
                    <div class="at">@</div>
                    <div><input type="text" class="inputStyle1" id="email2" name="email[1]" maxlength="30" placeholder="メールアドレスを入力してください" /></div>
                    <div>
                      <select class="selectStyle2" onchange="fnMail(this.value)">
		                  <option value="">直接入力</option>
		                  <?=code_select_option('EmailList',1)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
			  <li>
                <p class="label">カテゴリー</p>
                <div class="right">
                  <div class="category">
                    <div>
                      <select class="selectStyle2" name="category">
						<?=code_select_option('report_category',3,$category)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">題名</p>
                <div class="right">
                  <input type="text" name="title" id="title" class="inputStyle1 required" maxlength="100" placeholder="タイトルを入力してください" />
                </div>
              </li>
              <li>
                <p class="label">内容</p>
                <div class="right">
                  <textarea name="content" id="content" rows="20" class="textareaStyle1 required" placeholder="内容を入力してください"></textarea>
                </div>
              </li>
              <li>
                <p class="label">添付ファイル</p>
                <div class="right">
                  <ul>
                    <li>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="ファイルの選択" disabled="disabled">
                        <label for="file1"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file1" name="fileupload[0]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="ファイルの選択" disabled="disabled">
                        <label for="file2"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file2" name="fileupload[1]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="ファイルの選択" disabled="disabled">
                        <label for="file3"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file3" name="fileupload[2]" class="upload-hidden">
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <p class="label">パスワード</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" name="password" id="password" maxlength="20" placeholder="パスワードを入力してください" />
                  <p class="c-gray">8文字以上入力、アルファベット・数字・特殊記号の組み合わせ必須</p>
                </div>
              </li>
              <li>
                <p class="label">パスワードの確認</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" id="passwordRe" maxlength="20" placeholder="パスワードをもう一度入力してください" />
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
            <p class="text-style1">
				処理結果の確認のためには、内容の作成を完了した後に発行される受付番号と申告時に入力されたパスワードが必要になりますので、必ず控えておいてください 。
			</p>
            <button type="button" class="btn btn-round btnBlue layerBtn" onclick="fm_submit()">登録</button>
            <a href="<?=$host_url?>/sus/unethicalReport"><button type="button" class="btn btn-round btnLineBlue"">取り消し</button></a>
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
        <h5><b>申告が完了しました</b></h5>
      </div>
      <div class="pop-body">
        <p class="text-style1">受付番号 : <span class="c-blue" id="reportNo"></span></p><br /><br />

        <p class="text-style1 c-gray">結果を確認するためには受付番号、パスワードが必要です。 <br />パスワードを忘れた際には結果確認が出来ませんので、記録することをお勧めします。</p>
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
    		alert('非倫理申告のための個人情報収取に同意してください。');
    		$('#chAgree').focus();
			return false;
    	}
*/
		if( $("#password").val().trim() != $("#passwordRe").val().trim() ){
			alert('パスワードと2次パスワードが一致していません');
			return false;
		}
		if( !fm_check('fm') )	return false;

		if( confirm('申告しますか？') ){
			$("#fm [name=mode]").val('reportSubmit');
			$("#fm").submit();
		}
	}
  </script>
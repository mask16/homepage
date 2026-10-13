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
        <p>HYUNDAI SUPERTECK</p>
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

    <div class="subContent ">
      <div class="innerWrap">
        <a href="<?=$host_url?>/sus/unethicalReport" class="backBtn">举报/回主页</a>

        <div class="unethicalReport">
        <div class="unethicalReportBox">
          <p class="text-style1"><b>绝对保护举报人的秘密，通过网站外可以下列方法进行举报。</b></p><br /><br />
          <p class="num-text"><span>1. </span>邮箱 : ethics@hyundaiwelding.com</p>
          <p class="num-text"><span>2. </span>电话 : 82-2 6230-6000  ARS指南 : 选择伦理经营室</p>
          <p class="num-text"><span>3. </span>邮政举报 : 首尔江南区德黑兰路507 WeWork大厦 17楼 伦理经营室</p>
          <p class="num-text"><span>4. </span>其他 : 给伦理经营室人员直接举报</p>
        </div>
<!--        
          <div class="unethicalReportBox">
            <p class="text-style1"><b>为非伦理举报同意收集个人信息</b></p><br /><br />

            <p class="num-text"><span>1. </span>只收集最低限度的个人信息。 以确认举报内容及提供举报结果回复服务为目的，请求个人信息收集利用同意。</p>
            <p class="num-text"><span>2. </span>要收集的个人信息项目<br />
              - 举报人名字, 电话, 邮箱, 密码</p>
            <p class="num-text"><span>3. </span>个人信息的持有及利用期限为举报日起3年。</p>
            <p class="num-text"><span>4. </span>拒绝同意收集个人信息时，不得使用非伦理举报。</p>
            <div class="radioWrap">
              <label class="check"><input type="radio" name="chAgree" id="chAgree" value="Y"  class="radioStyle1" /> 同意 <span class="checkMark"></span></label>
              <label class="check"><input type="radio" name="chAgree" value="N" class="radioStyle1" /> 不同意 <span class="checkMark"></span></label>
            </div>
          </div>
-->
          <form id="fm" action="<?=$ActionUrl?>" method="post" enctype="multipart/form-data">
          <div class="unethicalReportForm">
            <h5 class="titStyle5"><b>举报</b></h5>
            <p class="text-style1"></span>如果希望匿名举报,可以不填写个人信息(姓名、电话号码、电子邮件)。</p>
            <ul>
              <li>
                <p class="label">举报人名字</p>
                <div class="right">
                  <input type="text" class="inputStyle1" name="reporter" id="reporter" placeholder="请输入姓名" />
                </div>
              </li>
              <li>
                <p class="label">电话</p>
                <div class="right">
                  <div class="tel">
                    <div>
                      <select class="selectStyle2" id="tel1" name="tell[0]">
                        <?=code_select_option('hp_number',0)?>
                      </select>
                    </div>
                    <div><input type="tel" id="tel2" name="tell[1]" class="inputStyle1" maxlength="9" placeholder="请输入电话号码" /></div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">邮箱</p>
                <div class="right">
                  <div class="mail">
                    <div><input type="text" class="inputStyle1" id="email1" name="email[0]" maxlength="30" placeholder="请输入电子邮箱" /></div>
                    <div class="at">@</div>
                    <div><input type="text" class="inputStyle1" id="email2" name="email[1]" maxlength="30" placeholder="请输入电子邮箱" /></div>
                    <div>
                      <select class="selectStyle2" onchange="fnMail(this.value)">
		                  <option value="">直接输入</option>
		                  <?=code_select_option('EmailList',1)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
			  <li>
                <p class="label">类别</p>
                <div class="right">
                  <div class="category">
                    <div>
                      <select class="selectStyle2" name="category">
						<?=code_select_option('report_category',2,$category)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">题目</p>
                <div class="right">
                  <input type="text" name="title" id="title" class="inputStyle1 required" maxlength="100" placeholder="请输入题目" />
                </div>
              </li>
              <li>
                <p class="label">附件</p>
                <div class="right">
                  <textarea name="content" id="content" rows="20" class="textareaStyle1 required" placeholder="请输入内容"></textarea>
                </div>
              </li>
              <li>
                <p class="label">选择文件</p>
                <div class="right">
                  <ul>
                    <li>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="选择文件" disabled="disabled">
                        <label for="file1"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file1" name="fileupload[0]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="选择文件" disabled="disabled">
                        <label for="file2"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file2" name="fileupload[1]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="选择文件" disabled="disabled">
                        <label for="file3"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file3" name="fileupload[2]" class="upload-hidden">
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <p class="label">密码</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" name="password" id="password" maxlength="20" placeholder="请输入密码" />
                  <p class="c-gray">输入8位以上，必须以英文、数字、特殊文字组合</p>
                </div>
              </li>
              <li>
                <p class="label">确认密码</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" id="passwordRe" maxlength="20" placeholder="请再输入密码" />
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
				为确认处理结果，需要完成内容后发放的受理编号和举报时输入的密码, 请记录受理编号和密码。
			</p>
            <button type="button" class="btn btn-round btnBlue layerBtn" onclick="fm_submit()">登录</button>
            <a href="<?=$host_url?>/sus/unethicalReport"><button type="button" class="btn btn-round btnLineBlue"">取消</button></a>
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
        <h5><b>举报已完成。</b></h5>
      </div>
      <div class="pop-body">
        <p class="text-style1">受理编号 : <span class="c-blue" id="reportNo"></span></p><br /><br />

        <p class="text-style1 c-gray">为确认结果，需输入受理编号和写举报内容时填写的密码。<br />丢失号码时，难以确认结果，请记录下来。</p>
      </div>
      <div class="pop-ft tac">
          <a href="<?=$host_url?>/sus/unethicalResult" class="btn-Close btn btnBlue btn-round">确认</a>
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
    		alert('为举报非伦理行为，请同意收集个人信息。');
    		$('#chAgree').focus();
			return false;
    	}
*/
		if( $("#password").val().trim() != $("#passwordRe").val().trim() ){
			alert('密码和密码确认不一致。');
			return false;
		}
		if( !fm_check('fm') )	return false;

		if( confirm('确定要举报吗？') ){
			$("#fm [name=mode]").val('reportSubmit');
			$("#fm").submit();
		}
	}
  </script>
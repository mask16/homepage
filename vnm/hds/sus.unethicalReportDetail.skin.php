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
        <h3>khã năng quản lý bền vững</h3>
      </div>
    </div>
  </section>


  <div class="subWrap">
    <section class="leftFloating" id="leftFloating"></section>
	<section class="subNavWrap" id="subNavPos">
		<!-- subNav -->
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
		<!--//subNav -->
	</section>


    <div class="subContent ">
      <div class="innerWrap">
        <a href="<?=$host_url?>/sus/unethicalReport" class="backBtn">Vào báo cáo chính</a>

        <div class="unethicalReport">
        <div class="unethicalReportBox">
          <p class="text-style1">
			<b>
				Thông tin của phóng viên được bảo vệ tuyệt đối và có thể được đưa tin bằng các cách sau đây ngoài trang web.
			</b>
		  </p>
		  <br /><br />
          <p class="num-text"><span>1. </span>E-mail : ethics@hyundaiwelding.com</p>
          <p class="num-text"><span>2.</span> Điện thoại : +82-2-6230-6000 Thông tin ARS: Chọn Văn phòng Quản lý Đạo đức</p>
          <p class="num-text"><span>3. </span>Báo cáo qua thư : Văn phòng Quản lý Đạo đức trên tầng 17 của Tòa nhà WeWork, 507 Teheran-ro, Gangnam-gu, Seoul</p>
          <p class="num-text"><span>4. </span>Những người khác : Báo cáo trực tiếp cho nhân viên của Văn phòng Quản lý Đạo đức</p>
          </div>
<!--
          <div class="unethicalReportBox">
            <p class="text-style1"><b>Đồng ý thu thập thông tin cá nhân để báo cáo phi đạo đức</b></p><br /><br />

            <p class="num-text"><span>1. </span>Chúng tôi chỉ thu thập lượng thông tin cá nhân tối thiểu. Chúng tôi xin sự đồng ý cho việc thu thập và sử dụng thông tin cá nhân nhằm mục đích kiểm tra nội dung báo cáo và cung cấp dịch vụ trả lời kết quả báo cáo.</p>
            <p class="num-text">
				<span>2. </span>Các mục thông tin cá nhân cần thu thập
				<br />
				- Tác giả, số điện thoại, e-mail, mật khẩu
			</p>
            <p class="num-text"><span>3. </span>Thời hạn lưu giữ và sử dụng thông tin cá nhân là 3 năm kể từ ngày báo cáo.</p>
            <p class="num-text"><span>4. </span>Nếu bạn từ chối đồng ý với việc thu thập thông tin cá nhân, bạn không thể sử dụng một báo cáo phi đạo đức.</p>
            <div class="radioWrap">
              <label class="check"><input type="radio" name="chAgree" id="chAgree" value="Y"  class="radioStyle1" />Đăng ký<span class="checkMark"></span></label>
              <label class="check"><input type="radio" name="chAgree" value="N" class="radioStyle1" /> hủy bỏ <span class="checkMark"></span></label>
            </div>
          </div>
-->
          <form id="fm" action="<?=$ActionUrl?>" method="post" enctype="multipart/form-data">
          <div class="unethicalReportForm">
            <h5 class="titStyle5"><b>Báo cáo</b></h5>
            <p class="text-style1"> Nếu bạn muốn báo cáo nặc danh, bạn không phải viết thông tin cá nhân (tên, số điện thoại, e-mail).</p>
            <ul>
              <li>
                <p class="label">Tác giả</p>
                <div class="right">
                  <input type="text" class="inputStyle1" name="reporter" id="reporter" placeholder="Vui lòng nhập tên tác người lặp" />
                </div>
              </li>
              <li>
                <p class="label">Số điện thoại</p>
                <div class="right">
                  <div class="tel">
                    <div>
                      <select class="selectStyle2" id="tel1" name="tell[0]">
                        <?=code_select_option('hp_number',0)?>
                      </select>
                    </div>
                    <div><input type="tel" id="tel2" name="tell[1]" class="inputStyle1" maxlength="9" placeholder="Xin vui lòng điền số điện thoại của bạn" /></div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">E-mail</p>
                <div class="right">
                  <div class="mail">
                    <div><input type="text" class="inputStyle1" id="email1" name="email[0]" maxlength="30" placeholder="Vui lòng nhập địa chỉ email của bạn" /></div>
                    <div class="at">@</div>
                    <div><input type="text" class="inputStyle1" id="email2" name="email[1]" maxlength="30" placeholder="Vui lòng nhập địa chỉ email của bạn" /></div>
                    <div>
                      <select class="selectStyle2" onchange="fnMail(this.value)">
		                  <option value="">Nhập trực tiếp</option>
		                  <?=code_select_option('EmailList',1)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
			  <li>
                <p class="label">Danh mục</p>
                <div class="right">
                  <div class="category">
                    <div>
                      <select class="selectStyle2" name="category">
						<?=code_select_option('report_category',8,$category)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">Tiêu đề</p>
                <div class="right">
                  <input type="text" name="title" id="title" class="inputStyle1 required" maxlength="100" placeholder="Vui lòng nhập tiêu đề" />
                </div>
              </li>
              <li>
                <p class="label">Nội dung</p>
                <div class="right">
                  <textarea name="content" id="content" rows="20" class="textareaStyle1 required" placeholder="Vui lòng nhập nội dung của bạn"></textarea>
                </div>
              </li>
              <li>
                <p class="label">Tập tin đính kèm</p>
                <div class="right">
                  <ul>
                    <li>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Chọn tệp" disabled="disabled">
                        <label for="file1"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file1" name="fileupload[0]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Chọn tệp" disabled="disabled">
                        <label for="file2"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file2" name="fileupload[1]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Chọn tệp" disabled="disabled">
                        <label for="file3"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file3" name="fileupload[2]" class="upload-hidden">
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <p class="label">Mật khẩu</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" name="password" id="password" maxlength="20" placeholder="Vui lòng nhập mật khẩu" />
                  <p class="c-gray">Enter at least 8 digits and combine English, numeric, and special characters.</p>
                </div>
              </li>
              <li>
                <p class="label">Xác nhận mật khẩu</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" id="passwordRe" maxlength="20" placeholder="Vui lòng nhập lại mật khẩu của bạn" />
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
				Để kiểm tra kết quả xử lý, xin lưu ý rằng bạn sẽ cần số đăng ký được cấp sau khi hoàn thành nội dung và mật khẩu bạn đã nhập khi báo cáo.
			</p>
            <button type="button" class="btn btn-round btnBlue layerBtn" onclick="fm_submit()">Đăng ký</button>
            <a href="<?=$host_url?>/sus/unethicalReport"><button type="button" class="btn btn-round btnLineBlue"">hủy bỏ</button></a>
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
        <h5><b>Báo cáo đã hoàn thành.</b></h5>
      </div>
      <div class="pop-body">
        <p class="text-style1">Số đăng ký : <span class="c-blue" id="reportNo"></span></p><br /><br />

        <p class="text-style1 c-gray">
			Để kiểm tra kết quả, bạn sẽ cần số biên nhận và mật khẩu được ghi khi nhập chi tiết báo cáo.
			<br>
			Nếu bị mất số sẽ khó kiểm tra kết quả nên bạn hãy ghi chép lại.
		</p>
      </div>
      <div class="pop-ft tac">
          <a href="<?=$host_url?>/sus/unethicalResult" class="btn-Close btn btnBlue btn-round">
			Xác nhận
		  </a>
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
    		alert('Vui lòng đồng ý với việc thu thập thông tin cá nhân để báo cáo phi đạo đức.');
    		$('#chAgree').focus();
			return false;
    	}
    */
		if( $("#password").val().trim() != $("#passwordRe").val().trim() ){
			alert('Giá trị Mật khẩu và Xác nhận Mật khẩu không giống nhau.');
			return false;
		}
		if( !fm_check('fm') )	return false;

		if( confirm('Bạn có chắc chắn muốn báo cáo không?') ){
			$("#fm [name=mode]").val('reportSubmit');
			$("#fm").submit();
		}
	}
  </script>
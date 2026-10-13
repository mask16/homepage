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
		<h3>Управление устройчивым развитием</h3>
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
        <a href="<?=$host_url?>/sus/unethicalReport" class="backBtn">Перейти на страницу отчета для неэтичного поведения</a>

        <div class="unethicalReport">
        <div class="unethicalReportBox">
          <p class="text-style1"><b>Конфиденциальность личности сообщившего гарантирована, и вы также можете сообщить об этом с помощью следующих методов, помимо сайта.</b></p><br /><br />
          <p class="num-text"><span>1. </span>Электронная почта : ethics@hyundaiwelding.com</p>
          <p class="num-text"><span>2.</span> Телефон : 82-2 6230-6000  Выберите отдел по управлению Этикой</p>
          <p class="num-text"><span>3. </span>Заявление по почте : Отдел по управлению Этикой на 17-ом этаже здания WeWork 507 пр. Teheran, Gangnam район, г.Сеул</p>
          <p class="num-text"><span>4. </span>Личное заявление : предоставить доклад непосредственно сотрудникам по управлению Этикой</p>
        </div>
        <!--
          <div class="unethicalReportBox">
            <p class="text-style1"><b>Согласие на сбор личной информации для заявления о неэтичном поведении сотрудников</b></p><br /><br />

            <p class="num-text"><span>1. </span>Мы собираем минимальную личную информацию. Мы запрашиваем согласие на использование сбора личной информации, с целью проверки деталей заявления и предоставления услуги по ответу о результате рассмотрения заявления.</p>
            <p class="num-text"><span>2. </span>Личная информация, которую мы собираем<br />
              - Имя, номер телефона, адрес электронной почты, пароль</p>
            <p class="num-text"><span>3. </span>Срок хранения и использования персональных данных составляет 3 года с даты представления заявления.</p>
            <p class="num-text"><span>4. </span>Если вы отказываетесь на сбор личной информации, вы не можете подать заявление о неэтичном поведении.</p>
            <div class="radioWrap">
              <label class="check"><input type="radio" name="chAgree" id="chAgree" value="Y"  class="radioStyle1" /> Соглашаться <span class="checkMark"></span></label>
              <label class="check"><input type="radio" name="chAgree" value="N" class="radioStyle1" /> Не соглашаться <span class="checkMark"></span></label>
            </div>
          </div>
-->
          <form id="fm" action="<?=$ActionUrl?>" method="post" enctype="multipart/form-data">
          <div class="unethicalReportForm">
            <h5 class="titStyle5"><b>Заявление</b></h5>
            <p class="text-style1">Если вы хотите сообщить анонимно, вам не нужно писать свои личные данные (имя, номер телефона, e-mail).</p>
            <ul>
              <li>
                <p class="label">Имя</p>
                <div class="right">
                  <input type="text" class="inputStyle1" name="reporter" id="reporter" placeholder="Пожалуйста, введите ваша имя " />
                </div>
              </li>
              <li>
                <p class="label">Номер телефона</p>
                <div class="right">
                  <div class="tel">
                    <div>
                      <select class="selectStyle2" id="tel1" name="tell[0]">
                        <?=code_select_option('hp_number',0)?>
                      </select>
                    </div>
                    <div><input type="tel" id="tel2" name="tell[1]" class="inputStyle1" maxlength="9" placeholder="пожалуйста введите ваш номер телефона" /></div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">Электронная почта</p>
                <div class="right">
                  <div class="mail">
                    <div><input type="text" class="inputStyle1" id="email1" name="email[0]" maxlength="30" placeholder="Пожалуйста, введите ваш адрес электронной почты" /></div>
                    <div class="at">@</div>
                    <div><input type="text" class="inputStyle1" id="email2" name="email[1]" maxlength="30" placeholder="Пожалуйста, введите ваш адрес электронной почты" /></div>
                    <div>
                      <select class="selectStyle2" onchange="fnMail(this.value)">
		                  <option value="">Прямой ввод</option>
		                  <?=code_select_option('EmailList',1)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
			  <li>
                <p class="label">Категория</p>
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
                <p class="label">Название</p>
                <div class="right">
                  <input type="text" name="title" id="title" class="inputStyle1 required" maxlength="100" placeholder="Пожалуйста, введите название отчета" />
                </div>
              </li>
              <li>
                <p class="label">Содержание</p>
                <div class="right">
                  <textarea name="content" id="content" rows="20" class="textareaStyle1 required" placeholder="Пожалуйста, введите ваше содержание"></textarea>
                </div>
              </li>
              <li>
                <p class="label">Прикрепить файл</p>
                <div class="right">
                  <ul>
                    <li>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Прикрепить файл" disabled="disabled">
                        <label for="file1"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file1" name="fileupload[0]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Прикрепить файл" disabled="disabled">
                        <label for="file2"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file2" name="fileupload[1]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Прикрепить файл" disabled="disabled">
                        <label for="file3"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file3" name="fileupload[2]" class="upload-hidden">
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <p class="label">Пароль</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" name="password" id="password" maxlength="20" placeholder="Пожалуйста, введите пароль" />
                  <p class="c-gray">Введите не менее 8 цифр и объедините английские, цифровые и специальные символы.</p>
                </div>
              </li>
              <li>
                <p class="label">Подтверждение пароля логин</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" id="passwordRe" maxlength="20" placeholder="Пожалуйста, введите еще раз ваш пароль" />
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
				Для проверки результатов, запомните регистрационный номер, выданный после заполнения заявления, и пароль, который вы ввели при составлении заявления.
			</p>
            <button type="button" class="btn btn-round btnBlue layerBtn" onclick="fm_submit()">Регистрация</button>
            <a href="<?=$host_url?>/sus/unethicalReport"><button type="button" class="btn btn-round btnLineBlue"">Отмена</button></a>
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
        <h5><b>Отчет принят.</b></h5>
      </div>
      <div class="pop-body">
        <p class="text-style1">номер отчета : <span class="c-blue" id="reportNo"></span></p><br /><br />

        <p class="text-style1 c-gray">
		Для проверки результатов вам понадобится номер отчета и пароль, указанные при вводе деталей отчета.
		<br />
		Если вы потеряете номер отчета, будет сложно проверить результат, поэтому запишите его.
		</p>
      </div>
      <div class="pop-ft tac">
          <a href="<?=$host_url?>/sus/unethicalResult" class="btn-Close btn btnBlue btn-round">подтвердить</a>
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
    		alert('Пожалуйста, согласитесь на сбор личной информации для неэтичного сообщения.');
    		$('#chAgree').focus();
			return false;
    	}
*/
		if( $("#password").val().trim() != $("#passwordRe").val().trim() ){
			alert('Значения пароля и подтверждения пароля не совпадают.');
			return false;
		}
		if( !fm_check('fm') )	return false;

		if( confirm('Вы уверены, что хотите сообщить об этом?') ){
			$("#fm [name=mode]").val('reportSubmit');
			$("#fm").submit();
		}
	}
  </script>
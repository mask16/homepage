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
        <h3>Sustentabilidad</h3>
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
        <a href="<?=$host_url?>/sus/unethicalReport" class="backBtn">Reportar</a>

        <div class="unethicalReport">
        <div class="unethicalReportBox">
          <p class="text-style1">
			<b>
				La confidencialidad del informante está absolutamente protegida, y también puede informar a través de los siguientes métodos al lado del sitio web.
			</b>
		  </p>
		  <br /><br />
          <p class="num-text"><span>1. </span>Correo electrónico : ethics@hyundaiwelding.com</p>
          <p class="num-text"><span>2.</span> Telephone : +82-2-6230-6000 Información de ARS: Seleccionar la oficina de gestión de ética </p>
          <p class="num-text"><span>3. </span>Reportar postal : Ethics Management Office on the 17th floor of WeWork Building 507 Teheran-ro, Gangnam-gu, Seoul</p>
          <p class="num-text"><span>4. </span>Reportar sobre la visita : Reportar directamente al personal de la oficina de gestión de ética</p>
      </div>
<!--
          <div class="unethicalReportBox">
            <p class="text-style1"><b>Consentimiento para recopilar información personal para informes poco éticos</b></p><br /><br />

            <p class="num-text"><span>1. </span>Recopilamos información personal mínima. Solicitamos el consentimiento para utilizar la recopilación de información personal con el fin de verificar los detalles del informe y proporcionar el servicio para responder a los resultados del informe.</p>
            <p class="num-text">
				<span>2. </span>Elementos de información personal que recopilamos
				<br />
				- Nombre, número de teléfono, correo electrónico, contraseña
			</p>
            <p class="num-text"><span>3. </span>El período de conservación y uso de la información personal es de 3 años a partir de la fecha del informe.</p>
            <p class="num-text"><span>4. </span>Si se niega a aceptar la recopilación de información personal, no puede utilizar informes poco éticos .</p>
            <div class="radioWrap">
              <label class="check"><input type="radio" name="chAgree" id="chAgree" value="Y"  class="radioStyle1" />Registro<span class="checkMark"></span></label>
              <label class="check"><input type="radio" name="chAgree" value="N" class="radioStyle1" />Cancelación <span class="checkMark"></span></label>
            </div>
          </div>
-->
          <form id="fm" action="<?=$ActionUrl?>" method="post" enctype="multipart/form-data">
          <div class="unethicalReportForm">
            <h5 class="titStyle5"><b>Informe</b></h5>
            <p class="text-style1">Si desea hacer una declaración anónima, no es necesario incluir su información personal (nombre, número de teléfono, correo electrónico).</p>
            <ul>
              <li>
                <p class="label">Nombre</p>
                <div class="right">
                  <input type="text" class="inputStyle1" name="reporter" id="reporter" placeholder="Nombre" />
                </div>
              </li>
              <li>
                <p class="label">Número de teléfono</p>
                <div class="right">
                  <div class="tel">
                    <div>
                      <select class="selectStyle2" id="tel1" name="tell[0]">
                        <?=code_select_option('hp_number',0)?>
                      </select>
                    </div>
                    <div><input type="tel" id="tel2" name="tell[1]" class="inputStyle1" maxlength="9" placeholder="Número de teléfono" /></div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">Correo electrónico</p>
                <div class="right">
                  <div class="mail">
                    <div><input type="text" class="inputStyle1" id="email1" name="email[0]" maxlength="30" placeholder="Correo electrónico" /></div>
                    <div class="at">@</div>
                    <div><input type="text" class="inputStyle1" id="email2" name="email[1]" maxlength="30" placeholder="Correo electrónico" /></div>
                    <div>
                      <select class="selectStyle2" onchange="fnMail(this.value)">
		                  <option value="">Entrada directa</option>
		                  <?=code_select_option('EmailList',1)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
			  <li>
                <p class="label">Categoría</p>
                <div class="right">
                  <div class="category">
                    <div>
                      <select class="selectStyle2" name="category">
						<?=code_select_option('report_category',5,$category)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">Título</p>
                <div class="right">
                  <input type="text" name="title" id="title" class="inputStyle1 required" maxlength="100" placeholder="Sujeto" />
                </div>
              </li>
              <li>
                <p class="label">Contenido</p>
                <div class="right">
                  <textarea name="content" id="content" rows="20" class="textareaStyle1 required" placeholder="Contenido"></textarea>
                </div>
              </li>
              <li>
                <p class="label">Seleccionar archivo adjunto</p>
                <div class="right">
                  <ul>
                    <li>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Seleccionar archivo adjunto" disabled="disabled">
                        <label for="file1"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file1" name="fileupload[0]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Seleccionar archivo adjunto" disabled="disabled">
                        <label for="file2"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file2" name="fileupload[1]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Seleccionar archivo adjunto" disabled="disabled">
                        <label for="file3"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file3" name="fileupload[2]" class="upload-hidden">
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <p class="label">Contraseña</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" name="password" id="password" maxlength="20" placeholder="Contraseña" />
                  <p class="c-gray">Enter at least 8 digits and combine English, numeric, and special characters.</p>
                </div>
              </li>
              <li>
                <p class="label">Confirmar contraseña</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" id="passwordRe" maxlength="20" placeholder="Repetir contraseña" />
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
				Para verificar los resultados del procesamiento, necesitamos el número de recibo emitido después de completar el contenido y la contraseña que ingresó al informar, así que regístrelo.
			</p>
            <button type="button" class="btn btn-round btnBlue layerBtn" onclick="fm_submit()">Registro</button>
            <a href="<?=$host_url?>/sus/unethicalReport"><button type="button" class="btn btn-round btnLineBlue"">Cancelación</button></a>
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
        <h5><b>Ha sido reportado</b></h5>
      </div>
      <div class="pop-body">
        <p class="text-style1">Número de recibo : <span class="c-blue" id="reportNo"></span></p><br /><br />

        <p class="text-style1 c-gray">
			Para ver el resultado necesitarías un número de recibo, y una contraseña.<br>Es imposible ver el resultado si pierdes la contraseña.
		</p>
      </div>
      <div class="pop-ft tac">
          <a href="<?=$host_url?>/sus/unethicalResult" class="btn-Close btn btnBlue btn-round">
			Verificación
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
    		alert('Utilizamos la información personal para reportar un comportamiento no ético.');
    		$('#chAgree').focus();
			return false;
    	}
  */
		if( $("#password").val().trim() != $("#passwordRe").val().trim() ){
			alert('Repetir contraseña');
			return false;
		}
		if( !fm_check('fm') )	return false;

		if( confirm('Deseas reportar?') ){
			$("#fm [name=mode]").val('reportSubmit');
			$("#fm").submit();
		}
	}
  </script>
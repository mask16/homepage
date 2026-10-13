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
        <p>HYUNDAI GLOVILLE</p>
        <h3>Gestão de Sustentabilidade</h3>
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
        <a href="<?=$host_url?>/sus/unethicalReport" class="backBtn">Relatório  Para a página principal</a>

        <div class="unethicalReport">
        <div class="unethicalReportBox">
          <p class="text-style1">
			<b>
				A confidencialidade do repórter está absolutamente protegida, podendo também denunciá-la através dos seguintes métodos ao lado do site.
			</b>
		  </p>
		  <br /><br />
          <p class="num-text"><span>1. </span>E-mail : ethics@hyundaiwelding.com</p>
          <p class="num-text"><span>2.</span> Telephone : +82-2-6230-6000 ARS Informações: Selecione Ethics Management Office</p>
          <p class="num-text"><span>3. </span>Relatório Postal : Escritório de Gestão de Ética no 17º andar do Edifício WeWork 507 Teheran-ro, Gangnam-gu, Seul</p>
          <p class="num-text"><span>4. </span>Relatório sobre a visita : Relatório sobre a visita: Relatório diretamente para a equipe do Escritório de Gestão de Ética</p>
          </div>
<!--
          <div class="unethicalReportBox">
            <p class="text-style1"><b>Consentimento para coletar informações pessoais para denúncias antiéticas</b></p><br /><br />

            <p class="num-text"><span>1. </span>Coletamos informações pessoais mínimas. Solicitamos consentimento para usar a coleta de informações pessoais com a finalidade de verificar os detalhes do relatório e fornecer o serviço de resposta aos resultados do relatório.</p>
            <p class="num-text">
				<span>2. </span>Itens de informações pessoais que coletamos
				<br />
				- Nome, número de telefone, e-mail, senha
			</p>
            <p class="num-text"><span>3. </span>O período de retenção e uso de informações pessoais é de 3 anos a partir da data do relatório.</p>
            <p class="num-text"><span>4. </span>Se você se recusar a concordar em coletar informações pessoais, não poderá usar denúncias antiéticas.</p>
            <div class="radioWrap">
              <label class="check"><input type="radio" name="chAgree" id="chAgree" value="Y"  class="radioStyle1" /> Convir <span class="checkMark"></span></label>
              <label class="check"><input type="radio" name="chAgree" value="N" class="radioStyle1" /> Discordar <span class="checkMark"></span></label>
            </div>
          </div>
-->
          <form id="fm" action="<?=$ActionUrl?>" method="post" enctype="multipart/form-data">
          <div class="unethicalReportForm">
            <h5 class="titStyle5"><b>Relatório</b></h5>
            <p class="text-style1"> Se você deseja reportar anonimamente, você não precisa escrever suas informações pessoais (nome, número de telefone, e-mail).</p>
            <ul>
              <li>
                <p class="label">Nome</p>
                <div class="right">
                  <input type="text" class="inputStyle1" name="reporter" id="reporter" placeholder="Insira o nome do escritor" />
                </div>
              </li>
              <li>
                <p class="label">Número de telefone</p>
                <div class="right">
                  <div class="tel">
                    <div>
                      <select class="selectStyle2" id="tel1" name="tell[0]">
                        <?=code_select_option('hp_number',0)?>
                      </select>
                    </div>
                    <div><input type="tel" id="tel2" name="tell[1]" class="inputStyle1" maxlength="9" placeholder="Insira o número do telefone" /></div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">E-mail</p>
                <div class="right">
                  <div class="mail">
                    <div><input type="text" class="inputStyle1" id="email1" name="email[0]" maxlength="30" placeholder="Insira o email" /></div>
                    <div class="at">@</div>
                    <div><input type="text" class="inputStyle1" id="email2" name="email[1]" maxlength="30" placeholder="Insira o email" /></div>
                    <div>
                      <select class="selectStyle2" onchange="fnMail(this.value)">
		                  <option value="">Entrada direta</option>
		                  <?=code_select_option('EmailList',1)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
			  <li>
                <p class="label">Categoria</p>
                <div class="right">
                  <div class="category">
                    <div>
                      <select class="selectStyle2" name="category">
						<?=code_select_option('report_category',7,$category)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">Título</p>
                <div class="right">
                  <input type="text" name="title" id="title" class="inputStyle1 required" maxlength="100" placeholder="Insira o título" />
                </div>
              </li>
              <li>
                <p class="label">Conteúdo</p>
                <div class="right">
                  <textarea name="content" id="content" rows="20" class="textareaStyle1 required" placeholder="Insira a informação"></textarea>
                </div>
              </li>
              <li>
                <p class="label">Selecionar arquivo anexo</p>
                <div class="right">
                  <ul>
                    <li>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Selecionar arquivo anexo" disabled="disabled">
                        <label for="file1"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file1" name="fileupload[0]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Selecionar arquivo anexo" disabled="disabled">
                        <label for="file2"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file2" name="fileupload[1]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Selecionar arquivo anexo" disabled="disabled">
                        <label for="file3"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file3" name="fileupload[2]" class="upload-hidden">
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <p class="label">Senha</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" name="password" id="password" maxlength="20" placeholder="Insira a senha" />
                  <p class="c-gray">Insira pelo menos 8 dígitos e combine caracteres ingleses, numéricos e especiais.</p>
                </div>
              </li>
              <li>
                <p class="label">Confirmar senha</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" id="passwordRe" maxlength="20" placeholder="Confirmar senha" />
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
				Para verificar os resultados do processamento, precisamos do número do recibo emitido após completar o conteúdo e da senha que você digitou ao relatar, portanto, registre-o.
			</p>
            <button type="button" class="btn btn-round btnBlue layerBtn" onclick="fm_submit()">Registrando</button>
            <a href="<?=$host_url?>/sus/unethicalReport"><button type="button" class="btn btn-round btnLineBlue"">Cancelamento</button></a>
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
        <h5><b>O relatório está completo.</b></h5>
      </div>
      <div class="pop-body">
        <p class="text-style1">Número de recepção : <span class="c-blue" id="reportNo"></span></p><br /><br />

        <p class="text-style1 c-gray">
			Para verificar o resultado, você precisa do número de registro e da senha usada ao entrar no relatório.
			<br>
			Se você perder seu número, será difícil verificar os resultados, portanto, anote-o.
		</p>
      </div>
      <div class="pop-ft tac">
          <a href="<?=$host_url?>/sus/unethicalResult" class="btn-Close btn btnBlue btn-round">
			Confirmar
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
    		alert('Concorde em coletar informações pessoais para denúncias antiéticas.');
    		$('#chAgree').focus();
			return false;
    	}
    */
		if( $("#password").val().trim() != $("#passwordRe").val().trim() ){
			alert('Os valores de senha e verificação de senha não são iguais.');
			return false;
		}
		if( !fm_check('fm') )	return false;

		if( confirm('Você quer reportar?') ){
			$("#fm [name=mode]").val('reportSubmit');
			$("#fm").submit();
		}
	}
  </script>
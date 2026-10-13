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
        <h3>Gestion de la durabilité</h3>
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
        <a href="<?=$host_url?>/sus/unethicalReport" class="backBtn">Retour de réclamation</a>

        <div class="unethicalReport">
        <div class="unethicalReportBox">
          <p class="text-style1">
			<b>
				La confidentialité du déclarant est absolument protégée et vous pouvez également le signaler via les méthodes suivantes à côté du site Web.
			</b>
		  </p>
		  <br /><br />
          <p class="num-text"><span>1. </span>E-mail : ethics@hyundaiwelding.com</p>
          <p class="num-text"><span>2.</span> Téléphone : +82-2-6230-6000 Informations ARS: Select Ethics Management Office</p>
          <p class="num-text"><span>3. </span>Rapport postal : Bureau de gestion de l'éthique au 17e étage du bâtiment WeWork 507 Teheran-ro, Gangnam-gu, Séoul</p>
          <p class="num-text"><span>4. </span>Rapport de visite : Rapport directement au personnel du Bureau de gestion de l'éthique</p>
      </div>
<!--
          <div class="unethicalReportBox">
            <p class="text-style1"><b>Consentement à collecter des informations personnelles pour un signalement contraire à l'éthique</b></p><br /><br />

            <p class="num-text"><span>1. </span>Nous collectons un minimum d'informations personnelles. Nous demandons votre consentement pour utiliser la collecte d'informations personnelles dans le but de vérifier les détails du rapport et de fournir le service de réponse aux résultats du rapport.</p>
            <p class="num-text">
				<span>2. </span>Informations personnelles que nous collectons
				<br />
				- Nom, numéro de téléphone, e-mail, mot de passe
			</p>
            <p class="num-text"><span>3. </span>La période de conservation et d'utilisation des informations personnelles est de 3 ans à compter de la date de déclaration.</p>
            <p class="num-text"><span>4. </span>Si vous refusez d'accepter de collecter des informations personnelles, vous ne pouvez pas utiliser de signalement contraire à l'éthique.</p>
            <div class="radioWrap">
              <label class="check"><input type="radio" name="chAgree" id="chAgree" value="Y"  class="radioStyle1" /> Inscription  <span class="checkMark"></span></label>
              <label class="check"><input type="radio" name="chAgree" value="N" class="radioStyle1" /> Annulation <span class="checkMark"></span></label>
            </div>
          </div>
-->
          <form id="fm" action="<?=$ActionUrl?>" method="post" enctype="multipart/form-data">
          <div class="unethicalReportForm">
            <h5 class="titStyle5"><b>Signaler</b></h5>
            <p class="text-style1">Si vous souhaitez faire une déclaration anonyme, vous n'avez pas besoin d'indiquer vos informations personnelles (nom, numéro de téléphone, e-mail).</p>
            <ul>
              <li>
                <p class="label">Nom</p>
                <div class="right">
                  <input type="text" class="inputStyle1" name="reporter" id="reporter" placeholder="Saisissez le nom du rédacteur" />
                </div>
              </li>
              <li>
                <p class="label">Numéro de téléphone</p>
                <div class="right">
                  <div class="tel">
                    <div>
                      <select class="selectStyle2" id="tel1" name="tell[0]">
                        <?=code_select_option('hp_number',0)?>
                      </select>
                    </div>
                    <div><input type="tel" id="tel2" name="tell[1]" class="inputStyle1" maxlength="9" placeholder="Saisissez le numéro de téléphone" /></div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">E-mail</p>
                <div class="right">
                  <div class="mail">
                    <div><input type="text" class="inputStyle1" id="email1" name="email[0]" maxlength="30" placeholder="Saisissez l'adresse email" /></div>
                    <div class="at">@</div>
                    <div><input type="text" class="inputStyle1" id="email2" name="email[1]" maxlength="30" placeholder="Saisissez l'adresse email" /></div>
                    <div>
                      <select class="selectStyle2" onchange="fnMail(this.value)">
		                  <option value="">Saisie directe</option>
		                  <?=code_select_option('EmailList',1)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
			  <li>
                <p class="label">Catégorie</p>
                <div class="right">
                  <div class="category">
                    <div>
                      <select class="selectStyle2" name="category">
						<?=code_select_option('report_category',6,$category)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">Titre</p>
                <div class="right">
                  <input type="text" name="title" id="title" class="inputStyle1 required" maxlength="100" placeholder="Saisissez le titre" />
                </div>
              </li>
              <li>
                <p class="label">Contenu</p>
                <div class="right">
                  <textarea name="content" id="content" rows="20" class="textareaStyle1 required" placeholder="Saisissez le contenu"></textarea>
                </div>
              </li>
              <li>
                <p class="label">Sélectionner le fichier joint</p>
                <div class="right">
                  <ul>
                    <li>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Sélectionner le fichier joint" disabled="disabled">
                        <label for="file1"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file1" name="fileupload[0]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Sélectionner le fichier joint" disabled="disabled">
                        <label for="file2"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file2" name="fileupload[1]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Sélectionner le fichier joint" disabled="disabled">
                        <label for="file3"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file3" name="fileupload[2]" class="upload-hidden">
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <p class="label">Mot de passe</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" name="password" id="password" maxlength="20" placeholder="Saisissez le mot de passe" />
                  <p class="c-gray">Saisissez au moins 8 chiffres et combinez des caractères anglais, numériques et spéciaux.</p>
                </div>
              </li>
              <li>
                <p class="label">Confirmer le mot de passe</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" id="passwordRe" maxlength="20" placeholder="Saisissez le mot de passe" />
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
				Pour vérifier les résultats du traitement, nous avons besoin du numéro de reçu émis après avoir rempli le contenu et du mot de passe que vous avez entré lors du signalement, veuillez donc l'enregistrer.
			</p>
            <button type="button" class="btn btn-round btnBlue layerBtn" onclick="fm_submit()">Inscription</button>
            <a href="<?=$host_url?>/sus/unethicalReport"><button type="button" class="btn btn-round btnLineBlue"">Annulation</button></a>
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
        <h5><b>Réclamation terminée</b></h5>
      </div>
      <div class="pop-body">
        <p class="text-style1">Reception number : <span class="c-blue" id="reportNo"></span></p><br /><br />

        <p class="text-style1 c-gray">
			Afin de vérifier le résultat, vous avez besoin du numéro de réception et du mot du passé lors de rédaction du rapport<br>Etant doonné qu'il est impossible de voir le résultat sans le numéro, veuillez l'enregistrer
		</p>
      </div>
      <div class="pop-ft tac">
          <a href="<?=$host_url?>/sus/unethicalResult" class="btn-Close btn btnBlue btn-round">
			Confirmer 
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
    		alert('Veuillez approuver la collecte de données personnelles pour réclamation de problèmes contraires à l`éthique.');
    		$('#chAgree').focus();
			return false;
    	}
*/
		if( $("#password").val().trim() != $("#passwordRe").val().trim() ){
			alert('Saisissez le mot de passe encore une fois');
			return false;
		}
		if( !fm_check('fm') )	return false;

		if( confirm('Continuez à réclamer') ){
			$("#fm [name=mode]").val('reportSubmit');
			$("#fm").submit();
		}
	}
  </script>
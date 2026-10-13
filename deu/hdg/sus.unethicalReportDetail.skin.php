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
		<h3>Nachhaltigkeitsmanagement</h3>
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
        <a href="<?=$host_url?>/sus/unethicalReport" class="backBtn">zur Hauptberichtsseite</a>

        <div class="unethicalReport">
          <div class="unethicalReportBox">
            <p class="text-style1"><b>Die Vertraulichkeit des Reporters ist absolut geschützt, und Sie können sie auch über die folgenden Methoden neben der Website melden.</b></p><br /><br />
            <p class="num-text"><span>1. </span>E-mail : ethics@hyundaiwelding.com</p>
            <p class="num-text"><span>2.</span> 82-2 6230-6000  ARS Information: Wählen Sie Ethics Management Office</p>
            <p class="num-text"><span>3. </span>Postbericht : Ethics Management Office im 17. Stock des WeWork Building 507 Teheran-ro, Gangnam-gu, Seoul</p>
            <p class="num-text"><span>4. </span>Besuchsbericht : Bericht direkt an die Mitarbeiter des Ethics Management Office</p>
          </div>
<!--
          <div class="unethicalReportBox">
            <p class="text-style1"><b>Zustimmung zur Erfassung persönlicher Daten für Berichte über Unethisches Verhalten</b></p><br /><br />

            <p class="num-text"><span>1. </span>Wir sammeln nur minimale persönliche Daten. Wir bitten um Einwilligung zur Verwendung der Erfassung personenbezogener Daten, um die Berichtsdetails zu überprüfen und den Dienst zur Beantwortung der Berichtsergebnisse bereitzustellen.</p>
            <p class="num-text"><span>2. </span>Persönliche Informationen, die wir sammeln<br />
              - Name, Telefonnummer, E-Mail, Passwort</p>
            <p class="num-text"><span>3. </span>Die Aufbewahrungs- und Nutzungsdauer für personenbezogene Daten beträgt 3 Jahre ab dem Datum der Meldung.</p>
            <p class="num-text"><span>4. </span>Wenn Sie sich weigern, der Erhebung personenbezogener Daten zuzustimmen, können Sie keine Berichterstattung verwenden.</p>
            <div class="radioWrap">
              <label class="check"><input type="radio" name="chAgree" id="chAgree" value="Y"  class="radioStyle1" /> Zustimmen <span class="checkMark"></span></label>
              <label class="check"><input type="radio" name="chAgree" value="N" class="radioStyle1" /> Nicht dafür <span class="checkMark"></span></label>
            </div>
          </div>
-->
          <form id="fm" action="<?=$ActionUrl?>" method="post" enctype="multipart/form-data">
          <div class="unethicalReportForm">
            <h5 class="titStyle5"><b>Melden</b></h5>
            <p class="text-style1">Wenn Sie eine anonyme Meldung wünschen, brauchen Sie keine persönlichen Daten (Name, Telefonnummer, E-Mail) anzugeben.</p>
            <ul>
              <li>
                <p class="label">Name</p>
                <div class="right">
                  <input type="text" class="inputStyle1" name="reporter" id="reporter" placeholder="Bitte Ihren Namen eingeben" />
                </div>
              </li>
              <li>
                <p class="label">Telefonnummer</p>
                <div class="right">
                  <div class="tel">
                    <div>
                      <select class="selectStyle2" id="tel1" name="tell[0]">
                        <?=code_select_option('hp_number',0)?>
                      </select>
                    </div>
                    <div><input type="tel" id="tel2" name="tell[1]" class="inputStyle1" maxlength="9" placeholder="Bitte Ihre Telefonnummer eingeben" /></div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">E-mail</p>
                <div class="right">
                  <div class="mail">
                    <div><input type="text" class="inputStyle1" id="email1" name="email[0]" maxlength="30" placeholder="Bitte Ihre E-Mail-Adresse eingeben" /></div>
                    <div class="at">@</div>
                    <div><input type="text" class="inputStyle1" id="email2" name="email[1]" maxlength="30" placeholder="Bitte Ihre E-Mail-Adresse eingeben" /></div>
                    <div>
                      <select class="selectStyle2" onchange="fnMail(this.value)">
		                  <option value="">Direkteingabe</option>
		                  <?=code_select_option('EmailList',1)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
			  <li>
                <p class="label">Kategorie</p>
                <div class="right">
                  <div class="category">
                    <div>
                      <select class="selectStyle2" name="category">
						<?=code_select_option('report_category',4,$category)?>
                      </select>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <p class="label">Titel</p>
                <div class="right">
                  <input type="text" name="title" id="title" class="inputStyle1 required" maxlength="100" placeholder="Bitte Titel eingeben" />
                </div>
              </li>
              <li>
                <p class="label">Inhalt</p>
                <div class="right">
                  <textarea name="content" id="content" rows="20" class="textareaStyle1 required" placeholder="Bitte Inhalt eingeben"></textarea>
                </div>
              </li>
              <li>
                <p class="label">Anhangdatei</p>
                <div class="right">
                  <ul>
                    <li>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Anhangdatei auswählen" disabled="disabled">
                        <label for="file1"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file1" name="fileupload[0]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Anhangdatei auswählen" disabled="disabled">
                        <label for="file2"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file2" name="fileupload[1]" class="upload-hidden">
                      </div>
                      <div class="filebox" style="width: 100%; padding-bottom: 10px;">
                        <input class="upload-name" value="Anhangdatei auswählen" disabled="disabled">
                        <label for="file3"><i class="ico ico-upload"></i></label>
                        <input type="file" id="file3" name="fileupload[2]" class="upload-hidden">
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <p class="label">Passwort</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" name="password" id="password" maxlength="20" placeholder="Bitte Passwort eingeben" />
                  <p class="c-gray">Geben Sie mindestens 8 Ziffern ein und kombinieren Sie Alphabet, Zahlen und Sonderzeichen.</p>
                </div>
              </li>
              <li>
                <p class="label">Passwort bestätigen</p>
                <div class="right">
                  <input type="password" class="inputStyle1 required" id="passwordRe" maxlength="20" placeholder="Bitte Ihr Passwort bestätigen" />
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
				Um das Verarbeitungsergebnis zu überprüfen, benötigen Sie die Registrierungsnummer, die nach Abschluss des Inhalts ausgegeben wurde, und das Passwort, das Sie bei der Berichterstellung eingegeben haben. Also bitte aufzeichnen.
			</p>
            <button type="button" class="btn btn-round btnBlue layerBtn" onclick="fm_submit()">Registrierung</button>
            <a href="<?=$host_url?>/sus/unethicalReport"><button type="button" class="btn btn-round btnLineBlue"">Stornierung</button></a>
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
        <h5><b>Bericht abgeschlossen.</b></h5>
      </div>
      <div class="pop-body">
        <p class="text-style1">Registrierungsnummer : <span class="c-blue" id="reportNo"></span></p><br /><br />

        <p class="text-style1 c-gray">Um das Ergebnis zu überprüfen benötigen Sie die Registrierungsnummer und das Passwort, das bei der Eingabe des Berichts geschrieben wurde.<br />Wenn Sie die Nummer und Ihr Passwort verlieren, ist es schwierig das Ergebnis zu überprüfen, also notieren Sie die bitte.</p>
      </div>
      <div class="pop-ft tac">
          <a href="<?=$host_url?>/sus/unethicalResult" class="btn-Close btn btnBlue btn-round">Bestätigen</a>
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
    		alert('Bitte stimmen Sie der Erhebung personenbezogener Daten für unethische Berichterstattung zu.');
    		$('#chAgree').focus();
			return false;
    	}
*/
		if( $("#password").val().trim() != $("#passwordRe").val().trim() ){
			alert('Die Werte für Kennwort und Kennwort bestätigung sind nicht identisch.');
			return false;
		}
		if( !fm_check('fm') )	return false;

		if( confirm('Möchten Sie es melden?') ){
			$("#fm [name=mode]").val('reportSubmit');
			$("#fm").submit();
		}
	}
  </script>
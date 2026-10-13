<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResult.skin.php
+ Description	: sus.unethicalResult.skin.php
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

    <div class="subContent unethicalResult">
      <div class="innerWrap">
        <div class="box">
          <div class="cellWrap">
            <div class="cell">
              <p class="text-style1">Paso 1</p>
              <h4 class="titStyle7"><b>Recibo de la denuncia</b></h4>
            </div>
            <div class="cell">
              <p class="text-style1">Paso 2</p>
              <h4 class="titStyle7"><b>Investigación</b></h4>
            </div>
            <div class="cell">
              <p class="text-style1">Paso 3</p>
              <h4 class="titStyle7"><b>Reunión de la Comisión de Personal </b></h4>
            </div>
            <div class="cell">
              <p class="text-style1">Paso 4</p>
              <h4 class="titStyle7"><b>Acción disciplinaria y notificación</b></h4>
            </div>
          </div>
          <p class="text-style1 c-gray">
Las denuncias no éticas se procesarán en el dicho orden.</p>
        </div>

        <div class="unethicalResultForm">
        <form name="fm" id="fm" method="post" action="<?=$ActionUrl?>">
          <h5 class="titStyle5"><b>Verificación de resultados de procesamiento</b></h5>
          <ul>
            <li>
              <p class="label">Número de recepción</p>
              <input type="text" class="inputStyle1 required" name="reportNo" id="reportNo" placeholder="Número de recibo" />
            </li>
            <li>
              <p class="label">Contraseña</p>
              <input type="password" class="inputStyle1 required" name="password" id="password" placeholder="Contraseña" />
            </li>
          </ul>
          <div class="tac"><button type="button" class="btn btnBlue btn-round" onclick="fm_submit()">Consulta</button></div>
			<input type="hidden" name="mode" value="" />
			<input type="hidden" name="token" value="" />
			<input type="hidden" name="ReturnUrl" value="<?=$host_url?>/sus/unethicalResultDetail" />
			<input type="hidden" name="url" value="<?=$url?>" />
			<input type="hidden" name="site" value="<?=$shost?>" />
			<input type="hidden" name="lang" value="<?=$schar?>" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- subWrap// -->

<script type="text/javaScript">
	//submit
	function fm_submit(){
		// token
		if( !token_check('fm') )	return false;

		//필수항목검수
		if( !fm_check('fm') )	return false;

		$("#fm [name=mode]").val('reportResultSubmit');
		$("#fm").submit();
	}
</script>
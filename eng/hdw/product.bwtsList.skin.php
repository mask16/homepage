<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsList.skin.php
+ Description	: product.bwtsList
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI WELDING</p>
			<h3>Business Introduction</h3>
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

	<div class="subContent">
      <div class="conPd">
        <h6 class="titStyle5" style="font-size:35px;" ><b>The Machinery Business Division of Hyundai Welding Co., Ltd develops eco-friendly marine equipment and provides total solutions to customers with optimal products and services by integrating cutting-edge ICT and AI technologies.</b></h6>
      </div>
      <div class="innerWrap">
        <ul class="c-bwtsProductList">
          <li class="bwtsProductList-hiballast">
            <a href="<?=$host_url?>/product/bwtsHiBallast">
              <img src="<?=$skin_url?>/img/content/logo_hiballast.png" alt="" />
              <p class="product-desc">Ballast Water Treatment System developed by HD Korea Shipbuilding & Offshore Engineering Co., Ltd</p> 
            </a>
          </li>
          <li class="bwtsProductList-ecoballast">
            <a href="<?=$host_url?>/product/bwtsEcoBallast">
              <img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" />
              <p class="product-desc">Ballast Water Treatment System developed by HD Korea Shipbuilding & Offshore Engineering Co., Ltd</p> 
            </a>
          </li>
          <li class="bwtsProductList-hiballastnf">
            <a href="<?=$host_url?>/product/bwtsHiBallastNF">
              <img src="<?=$skin_url?>/img/content/hiballast_nf.png" alt="" />
              <p class="product-desc">Ballast Water Treatment System developed by HD Korea Shipbuilding & Offshore Engineering Co., Ltd</p> 
            </a>
          </li>
          <li class="bwtsProductList-simul">
            <a href="<?=$host_url?>/product/bwtsHiQAMP">
              <img src="<?=$skin_url?>/img/content/logo_bwtsHiQAMP.png" alt="" />
              <p class="product-desc">Modular containerized shore power connection system</p> 
            </a>
          </li>
<!-- 추가 -->
          <li class="bwtsProductList-hiqfo">
            <a href="<?=$host_url?>/product/bwtsHiQFO">
              <img src="<?=$skin_url?>/img/content/logo_hiqfo.png" alt="" />
              <p class="product-desc">Fuel oil supply system</p> 
            </a>
          </li>
          <li class="bwtsProductList-simul">
            <a href="<?=$host_url?>/product/bwtsN2GEN">
              <img src="<?=$skin_url?>/img/content/logo_n2gen.png" alt="" />
              <p class="product-desc">Marine Inert Gas (Nitrogen) Supply system</p> 
            </a>
          </li>
<!--  -->
          <li class="bwtsProductList-simul">
            <a href="<?=$host_url?>/product/bwtsHiCon">
              <img src="<?=$skin_url?>/img/content/logo_hicon.png" alt="" />
              <p class="product-desc">Smart Controller Applied to Plant and Factory Automation in Various Industries</p> 
            </a>
          </li>
<!-- 추가 -->
          <li class="bwtsProductList-simul">
            <a href="<?=$host_url?>/product/bwtsHiQRMS">
              <img src="<?=$skin_url?>/img/content/logo_hiqrms.png" alt="" />
              <p class="product-desc">Web-based Solution that Collects and Analyzes BWTS Data for Efficient Management and Maintenance</p> 
            </a>
          </li>
 <!--  -->         
          <li class="bwtsProductList-hipowe">
            <a href="<?=$host_url?>/product/bwtsHiPower">
              <img src="<?=$skin_url?>/img/content/logo_hipower.png" alt="" />
              <p class="product-desc">Valve Operated by Electro-Hydraulic Actuator</p> 
            </a>
          </li>
          <li class="bwtsProductList-simul">
            <a href="<?=$host_url?>/product/bwtsHiSimul">
              <img src="<?=$skin_url?>/img/content/logo_simul.png" alt="" />
              <p class="product-desc">Training Simulation Equipment Providing Operational Experience of HiBallast System</p> 
            </a>
          </li>
          <li class="bwtsProductList-ecoballast">
            <a href="<?=$host_url?>/product/bwtsHabonim">
              <img src="<?=$skin_url?>/img/content/logo_habonim.png" alt="" />
              <p class="product-desc">A trusted brand with 75 years of excellence in industrial valve solutions</p> 
            </a>
          </li>
        </ul>
      </div>

    </div>
  </div>

<!--div id="popup01" style="display:; position:absolute; width:280px; height:30px; top:430px;  left: expression(document.body.clientWidth/2+-512); z-index:999">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2"><img src="b_1201162.jpg" width="1024" height="35" border="0" usemap="#Map" /></td>
    </tr>
  </table>
</div
<div id="popup01" style="position:absolute; width:95%; max-width:500px; top:4%; margin:2.5%;  z-index:999999999; border:1px solid #000">
  <table width="95" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" height="150px" valign="top"><a href="javascript:layer_hidden(1);"><img src="<?=$skin_url?>/img/content/email_banner.JPG" alt="" / style="width:100%;max-width:500px;"></a></td>
    </tr>
    <tr>
      <td height="30" align="left" bgcolor="#000000">&nbsp;&nbsp;<input type="checkbox" id="chk_open_1" name="chk_open_2" onClick="layer_close(1);" style="border:0px solid #000000;">
        <font color="#FFFFFF">Do Not Open Today.</font></td>
      <td height="30" align="right" bgcolor="#000000" style="text-align:right"><a href="javascript:layer_hidden(1);" style="color:#fff">Close.&nbsp;&nbsp;</a></td>
    </tr>
  </table>
</div>





<script language="javascript">
var allcookie = document.cookie;


if(allcookie.indexOf("comain_nolayer_1=true")==-1){
	document.all['popup01'].style.visibility = "";
} else {
	document.all['popup01'].style.visibility = "hidden";
}

function layer_close(idx) {
	if(document.getElementById("chk_open_"+idx).checked==true){
		var nextDay = new Date();
		nextDay.setDate(nextDay.getDate()+1);
		document.cookie = "comain_nolayer_"+idx+"=true;"
						+ "path=/;"
						+ "expires="+nextDay.toGMTString()+";";
	}

	document.all['popup0'+idx].style.visibility = "hidden";
	
}


function layer_hidden(idx) {
	document.all['popup0'+idx].style.visibility = "hidden";
	
}
</script>

-->

  <!-- subWrap// -->
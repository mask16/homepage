<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsEcoBallast.skin.php
+ Description	: product.bwtsEcoBallast
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
      <div class="innerWrap">
        <div class="btwsProduct btwsProduct-ecoballast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
EcoBallast is a Ballast Water Treatment System developed by Hyundai Heavy Industries Co., Ltd. (HHI) and Hyundai Welding Co., Ltd. is an authorized OEM company of HHI BWTS and covers sales, design, fabrication, commissioning, and training. EcoBallast is based on filtration and ultraviolet irradiation technologies, and it is composed of major equipment such as filter, UV reactor, CIP (Cleaning in Place), and system control unit.<br /><br />
The filter can significantly reduce the number of suspended solids in the ballast water and prevent the ingress of marine organisms bigger than 50μm into ballast tanks.
The UV reactor is specially designed for EcoBallast to reduce its installation space and to maximize its treatment efficiency, which employs a high-intensity, medium-pressure ultraviolet lamp.<br /><br />
For complete Ballast water treatment, the ballast water is treated at intake (ballasting) and once again at discharge (de-ballasting). In other words, the additional ballast water treatment is performed during deballasting in order to prevent the proliferation of marine organisms in the treated seawater during ballasting.<br /><br />
The CIP (Cleaning in-place) unit is an automatic cleaning device that cleans the quartz sleeves covering the UV-lamps after each ballasting or de-ballasting operation. It operates to prevent the degradation of UV lamps due to marine contaminants.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img//content/ecoballast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Operational Principle</th>
                  <td>Filter + UV</td>
                </tr>
                <tr>
                  <th>Average power consumption<br />(per 1,000㎥/h)</th>
                  <td>100kW</td>
                </tr>
                <tr>
                  <th>Treatment points</th>
                  <td>Ballasting & Deballasting</td>
                </tr>
                <tr>
                  <th>Features</th>
                  <td>Eco-friendly disinfection process (Non-Chemical)<br />Not affected by temperature or salinity of ballast water</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left">
              <img src="<?=$skin_url?>/img/content/ecoballast_btImg01.jpg" alt="" />
            </div>
            <div class="right">

            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsHiBallast.skin.php
+ Description	: product.bwtsHiBallast
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
        <div class="btwsProduct btwsProduct-hiBallast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hiballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              Hyundai Welding Co., Ltd. is an authorized OEM company of HHI BWTS and covers sales, design, fabrication, commissioning, and training.
The HiBallast system is based on indirect (side-stream) electrolysis technologies and it is composed of major equipment such as, filters, electrolysis unit, neutralization unit, and a TRO sensor unit.<br /><br />

The filter has an automatic back-flushing function and physically removes harmful marine organisms, larger than 50μm, infrom the ballast water.
In order to treat microorganisms smaller than 50μm that pass through the filter, a high concentration (but, less than 1,000 mg/L as Cl2) of hypochlorous acid is produced by indirect electrolysis and injected into the ballast water pipe of the ship.<br /><br />
If the ballast water is discharged without neutralization after the treatment, it may have a harmful effect on the marine environment. Therefore, the neutralization agent is injected to remove the remaining disinfectant in the ballast water before discharge.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hiBallast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Operational Principle</th>
                  <td>Filter + Electrolysis (Indirect (side stream) type)</td>
                </tr>
                <tr>
                  <th>Average power consumption<br />(per 1,000㎥/h)</th>
                  <td>During Ballasting 50kW<br />During Deballasting 1kW</td>
                </tr>
                <tr>
                  <th>Treatment point</th>
                  <td>Water treatment only during ballasting<br />Neutralization during deballasting</td>
                </tr>
                <tr>
                  <th>Features</th>
                  <td>Low power consumption<br />In the low salinity area, the electrolysis unit of HiBallast is possible to operate with seawater that is only 1% of the total ballast water capacity to be treated.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="btImg">
            <div class="left"><h6>Flow diagram for ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg01.jpg" alt="" /></div>
            <div class="right"><h6>Flow diagram for de-ballasting (typical)</h6><img src="<?=$skin_url?>/img/content/hiBallast_btImg02.jpg" alt="" /></div>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- subWrap// -->
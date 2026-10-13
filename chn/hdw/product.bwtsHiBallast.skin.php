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
		<h3>事业介绍</h3>
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

	<div class="subContent">
      <div class="innerWrap">
        <div class="btwsProduct btwsProduct-hiBallast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_hiballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              HiBallast是现代重工开发的船舶压舱水处理设备品牌，现代综合金属拥有制作HiBallast的执照。
			  <br /><br />
              间接式海水电解方式的 HiBallast由过滤器、电解装备、中和装备、TRO感应器等主要设备构成。
			  <br /><br />
              过滤器具有自动反向净化功能, 去除海水里的50微米以上的微生物和浮游物质。
			  <br /><br />
              为处理通过过滤器的不足50μm的微生物，以间接电解方式生产高浓度（但1000mg/l以下）的次氯酸，生成的杀菌剂去除海洋生物，满足管制条件。
			  <br /><br />
              水处理后，压舱水如没有经过中和过程后排出，会产生有害影响，故而在排出前注入中和剂，去除压舱水内残留的氧化剂后再排出。
            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hiBallast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>原理</th>
                  <td>过滤器 + 电解(间接式)</td>
                </tr>
                <tr>
                  <th>耗电量<br>(per 1,000㎥/h)</th>
                  <td>
					进行 Ballasting时 50kW
					<br>
					进行Deballasting时 1kW
				  </td>
                </tr>
                <tr>
                  <th>处理时间</th>
                  <td>
					只有进行ballasting时处理
					<br />
					进行deballasting时中和处理
				  </td>
                </tr>
                <tr>
                  <th>特征</th>
                  <td>
					低耗电量<br />
					在低盐区，仅用Ballast罐容量的1%的海水也可以驾驶。
				  </td>
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
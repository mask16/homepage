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
        <div class="btwsProduct btwsProduct-ecoballast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              EcoBallast是现代重工开发的船舶压舱水处理设备品牌，现代综合金属拥有制作Ecoballast的执照。
              使用过滤器和紫外线方式的 EcoBallast由过滤器、UV灯、清洁及控制等主要设备构成。
			  <br /><br />
              过滤设备可显著减少平衡水内的沉淀物量，防止50μm以上的海洋有机体的流入。
			  <br /><br />
              为EcoBallast系统特意设计的UV灯使用了高强度重压紫外线灯，减少了空间, 实现了效率最大化。
			  <br /><br />
              为了完整的水处理，ballasting和deballasting 运行时启动系统。这意味着考虑Ballasting时处理的海水内有机体增生，Deballasting时额外进行水处理。
			  <br /><br />
              CIP（Cleaning in-place）设备是ballasting和deballasting 运行时可清洁UV灯保护管外部生成的异物的自动清洗设备。这是为了防止因海水内污染物引起的UV灯性能下降而启动的设备。
            </div>
            <div class="right"><img src="<?=$skin_url?>/img//content/ecoballast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>原理</th>
                  <td>过滤器 + 紫外线</td>
                </tr>
                <tr>
                  <th>耗电量<br />(per 1,000㎥/h)</th>
                  <td>100kW</td>
                </tr>
                <tr>
                  <th>处理时间</th>
                  <td>Ballasting & Deballasting</td>
                </tr>
                <tr>
                  <th>特征</th>
                  <td>环保系统 (No chemical)<br />无温度/盐度影响</td>
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
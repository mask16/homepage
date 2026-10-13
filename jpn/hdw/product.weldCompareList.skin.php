<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.weldCompareList.skin.php
+ Description	: product.weldCompareList
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI WELDING</p>
		<h3>事業紹介</h3>
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
      <section class="productCompare">
        <div class="innerWrap">
          <div class="subSearchBox">
          <form name="searchForm" id="searchForm" method="get">
            <input type="text" name="stx" value="<?=$stx?>" placeholder="検索したいワードを入力してください"></input>
            <button type="submit"><i class="ico ico-search"></i></button>
          </form>
          </div>
          <div class="tableStyle1">
            <div class="tableHeader brdrBottom">
              <table class="thc">
                <colgroup>
                  <col width="10%">
                  <col width="10%">
                  <col width="10%">
                  <col width="10%">
                  <col width="10%">
                  <col width="10%">
                  <col width="10%">
                  <col width="10%">
                  <col width="10%">
                  <col width="10%">
                </colgroup>
                <thead>
                  <tr>
                    <th colspan="4" class="br-c">該当規格</th>
                    <th colspan="6">他社相当品</th>
                  </tr>
                  <tr>
                    <th>AWS</th>
                    <th>KS</th>
                    <th>JIS</th>
                    <th class="br-c">EN ISO</th>
                    <th>Hyundai</th>
                    <th>KISWEL</th>
                    <th>朝鮮線材</th>
                    <th>世亜ESAB</th>
                    <th>KOBE</th>
                    <th>LINCOLN</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
<?php for( $i = 0; $i < count($compare); $i++ ){?>
              <li>
                <div style="width: 10%;"><span class="mTit">AWS</span><?=$compare[$i]['aws']?></div>
                <div style="width: 10%;"><span class="mTit">KS</span><?=$compare[$i]['ks']?></div>
                <div style="width: 10%;"><span class="mTit">JIS</span><?=$compare[$i]['jis']?></div>
                <div style="width: 10%;"><span class="mTit">EN ISO</span><?=$compare[$i]['en']?></div>
                <div style="width: 10%;"><span class="mTit">Hyundai</span><a href="<?=$host_url?>/product/weldMaterialDetail?cate=<?=$compare[$i]['categoryL1']?>&cate2=<?=$compare[$i]['categoryL2']?>&productSeq=<?=$compare[$i]['productSeq']?>#toggleContent<?=$compare[$i]['productSeq']?>"><?=$compare[$i]['hyundai']?></a></div>
                <div style="width: 10%;"><span class="mTit">고려</span><?=$compare[$i]['korea']?></div>
                <div style="width: 10%;"><span class="mTit">조선</span><?=$compare[$i]['chosun']?></div>
                <div style="width: 10%;"><span class="mTit">세아ESAB</span><?=$compare[$i]['seahEsab']?></div>
                <div style="width: 10%;"><span class="mTit">KOBE</span><?=$compare[$i]['kobe']?></div>
                <div style="width: 10%;"><span class="mTit">LINCOLN</span><?=$compare[$i]['lincoln']?></div>
              </li>
<?php }?>
            </ul>
          </div>
          <div class="pagerWrap">
            <ul>
              <?=get_paging(5,$page,$total_page,'?'.$qstr.'&amp;page=')?>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
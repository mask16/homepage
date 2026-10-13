<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.record.skin.php
+ Description	: product.record
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

<section class="subVisual visualProduct">
	<div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI WELDING</p>
			<h3>Introdução de Negócios</h3>
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
      <section class="productRecord">
        <div class="innerWrap">
          <div class="subSearchBox">
          <form name="searchForm" id="searchForm" method="get">
            <input type="text" name="stx" value='<?=$stx?>' placeholder="Por favor digite um termo de pesquisa."></input>
            <button type="submit"><i class="ico ico-search"></i></button>
          </form>
          </div>
          <div class="tableStyle1">
            <div class="tableHeader">
              <table class="thc">
                <colgroup>
                  <col width="7%">
                  <col width="7%">
                  <col width="22%">
                  <col width="22%">
                  <col width="18%">
                  <col width="17%">
                  <col width="7%">
                </colgroup>
                <thead>
                  <tr>
                    <th>País</th>
                    <th>Organização solicitante</th>
                    <th>Nome do projeto</th>
                    <th>Conta</th>
                    <th>Welding Process</th>
                    <th>Item representativo</th>
                    <th>Observação</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
<?php for( $i = 0; $i < count($record); $i++ ){?>
              <li>
                <div><span class="mTit"></span><b><?=stripslashes($record[$i]['country'])?></b></div>
                <div><span class="mTit">Ordering Organization</span><b><?=stripslashes($record[$i]['ordering'])?></b></div>
                <div class="tal"><span class="mTit">Project Name</span><?=stripslashes($record[$i]['project'])?></div>
                <div class="tal"><span class="mTit">Account</span><?=stripslashes($record[$i]['business'])?><c:out value='${resultInfo.business}' escapeXml='false'/></div>
                <div class="tal"><span class="mTit">Welding Process</span><?=stripslashes($record[$i]['process'])?></div>
                <div><span class="mTit">Representative Item</span><?=stripslashes($record[$i]['item'])?></div>
                <div><span class="mTit">Note</span><?=stripslashes($record[$i]['content'])?></div>
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
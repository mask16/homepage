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
		<h3>Направление бизнеса</h3>
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
              Hyundai Welding Co., Ltd. является авторизованной OEM-компанией HHI BWTS и занимается продажами, проектированием, изготовлением, вводом в эксплуатацию и обучением.
			  <br /><br />
              Система HiBallast основана на технологиях непрямого (побочного) электролиза и состоит из основного оборудования, такого как фильтр, блок электролиза, блок нейтрализации и блок датчика TRO.
			  <br /><br />
              Фильтр имеет функцию автоматической обратной промывки и фильтрует микроорганизмы и организмы размером более 50 мкм в морской воде.
			  <br /><br />
              Для лечения микроорганизмов размером менее 50 мкм, которые проходят через фильтр, с помощью непрямого электролиза производится хлорноватистая кислота с высокой концентрацией (но менее 1000 мг / л в виде Cl2), которая вводится в трубопровод балластной воды судна.
			  <br /><br />
              Если после обработки балластные воды сбрасываются без нейтрализации, это может оказать вредное воздействие на морскую среду. Поэтому нейтрализующий агент вводится для удаления оставшегося дезинфицирующего средства в водяном балласте перед сбросом.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img/content/hiBallast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Принцип работы</th>
                  <td>фильтр + электролиз (непрямой (боковой поток) тип)</td>
                </tr>
                <tr>
                  <th>Средняя потребляемая мощность<br />(на 1000㎥ / ч)</th>
                  <td>во время балластировки 50 кВт<br>во время дебалластировки 1 кВт</td>
                </tr>
                <tr>
                  <th>Точка обработки</th>
                  <td>обработка воды только при балластировке<br />нейтрализация при дебалластировке</td>
                </tr>
                <tr>
                  <th>Особенности</th>
                  <td>
					Низкое энергопотребление
					<br />
					В зоне с низкой соленостью установка электролиза HiBallast может работать с морской водой, которая составляет только 1% от общего объема балластной воды, подлежащей очистке.
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
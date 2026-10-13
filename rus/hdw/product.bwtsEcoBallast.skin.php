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
        <div class="btwsProduct btwsProduct-ecoballast">
          <a href="<?=$host_url?>/product/bwtsList" class="backBtn">ALL PRODUCT</a>
          <h2 class="productLogo"><img src="<?=$skin_url?>/img/content/logo_ecoballast.png" alt="" /></h2>
          <div class="topImg">
            <div class="left text-style1">
              EcoBallast - это система очистки балластных вод, разработанная Hyundai Heavy Industries Co., Ltd. (HHI), а Hyundai Welding Co., Ltd. - авторизованной OEM-компанией HHI BWTS и охватывает продажи, проектирование, изготовление, ввод в эксплуатацию и обучение.
              EcoBallast основан на технологиях фильтрации и ультрафиолетового облучения и состоит из основного оборудования, такого как фильтр, УФ-реактор, CIP (очистка на месте) и блок управления системой.
			  <br /><br />
              Фильтр может значительно уменьшить количество взвешенных твердых частиц в балластной воде и предотвратить попадание морских организмов размером более 50 мкм в балластные цистерны.
			  <br /><br />
              УФ-реактор специально разработан для EcoBallast, чтобы уменьшить пространство для установки и максимизировать эффективность обработки, в котором используется ультрафиолетовая лампа высокой интенсивности и среднего давления.
			  <br /><br />
              Для полной очистки балластных вод балластные воды обрабатываются при приеме (балластировка) и еще раз при сбросе (дебалластировка). Другими словами, дополнительная обработка балластной воды выполняется во время дебалластировки, чтобы предотвратить распространение морских организмов в очищенной морской воде во время балластировки.
			  <br /><br />
              Устройство CIP (Очистка на месте) - это автоматическое устройство для очистки, которое очищает кварцевые рукава, покрывающие УФ-лампы, после каждой операции балластировки или дебалластировки. Он работает, чтобы предотвратить деградацию УФ-ламп из-за морских загрязнителей.
            </div>
            <div class="right"><img src="<?=$skin_url?>/img//content/ecoballast_topImg.jpg" alt="" /></div>
          </div>
          <div class="table">
            <table>
              <tbody>
                <tr>
                  <th>Принцип работы</th>
                  <td>фильтр + УФ</td>
                </tr>
                <tr>
                  <th>Средняя потребляемая мощность<br />(на 1000㎥ / ч)</th>
                  <td>100кВт</td>
                </tr>
                <tr>
                  <th>Точки обработки</th>
                  <td>балластировка и дебалластировка</td>
                </tr>
                <tr>
                  <th>Особенности</th>
                  <td>Экологичный процесс дезинфекции (нехимический)<br />Не зависит от температуры или солености водяного балласта</td>
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
<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.bwtsRndField.skin.php
+ Description	: product.bwtsRndField
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
      <section class="RnDField">
        <div class="conPd">
          <h5 class="titStyle5">
			<b>
				Следующие области являются областями, которые подразделение машинного оборудования Hyundai Welding постоянно исследует и развивает.
			</b>
		  </h5>
        </div>
        <div class="RnDFieldImg"></div>
        <div class="RnDFieldCon">
          <div class="conPd">
            <div class="">
              <h6 class="titStyle3"><b>НИОКР по BWTS и ее компонентам</b></h6>

              <p class="text-blit">Разработка установки электролиза для повышения эксплуатационной надежности и доступности BWTS.</p>
              <p class="text-blit">Разработка экологически чистых процессов и сопутствующих товаров для предотвращения загрязнения воды и воздуха.</p>
              <p class="text-blit">Оценка материала BWTS и практические исследования в области электрохимии</p>
              <p class="text-blit">Исследования по повышению производительности системы и оптимизации конструкции на основе анализа потоков</p>
              <p class="text-blit">Исследования по повышению качества экологичного судового оборудования (Hi-CON, Hi-Power-V)</p>
            </div>
            <div class="">
              <ul class="RnDFieldList">
                <li>
                  <p><b>Разработка электродного материала</b></p>
                  <div class="right">
                    <img src="<?=$skin_url?>/img/content/bwtsRnD_img01.jpg" />
                  </div>
                </li>
                <li>
                  <p><b>Разработка высокоэффективного электролизера.</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img02.jpg" />
                </div>
                </li>
                <li>
                  <p><b>Анализ жидкости и теплового потока</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img03.jpg" />
                  </div>

                </li>
                <li>
                  <p><b>3D моделирование</b></p>
                  <div class="right">
                  <img src="<?=$skin_url?>/img/content/bwtsRnD_img04.jpg" />
                  </div>

                </li>
              </ul>
            </div>

          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
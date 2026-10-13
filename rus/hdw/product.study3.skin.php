<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/product.study3.skin.php
+ Description	: product.study3
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
      <section class="productStudy3">
        <div class="conPd">
          <h5 class="titStyle5"><b>Направление развития и статус в Hyundai Welding Research Institute.</b></h5>
          <h6 class="titStyle1 c-gray"><p>Направление развития</p></h6>
          <div class="productStudy3Wrap brdr-b">
            <div>
              <h6 class="titStyle3"><b>Экологичность</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img01.png" alt="" /></div>
              <p class="text-blit">Сварочные материалы с малым дымовыделением</p>
              <p class="text-blit">Сварочные материалы с низким содержанием марганца</p>
              <p class="text-blit">Сварочные материалы с минимальным разбрызгиванием</p>
              <p class="text-blit">Самозащитная порошковая проволока</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Высокофункциональный</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img02.png" alt="" /></div>
              <p class="text-blit">Исключительные характеристики CTOD в криогенных условиях</p>
              <p class="text-blit">Сварочные материалы сверхвысокой интенсивности / высокпрочные для шельфовой промышленности</p>
              <p class="text-blit">Сварочные материалы с низким влагопоглощением и сверхнизким содержанием водорода</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Высокая эффективность</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img03.png" alt="" /></div>
              <p class="text-blit">Сварочные материалы для электрогазовой сварки</p>
              <p class="text-blit">Металлопорошковая проволока для высокоскоростной сварки</p>
            </div>
          </div>

          <div class="productStudy3Wrap">
            <div>
              <h6 class="titStyle3"><b>Разработки для новых марок стали</b></h6>
            </div>
            <div>
              <div><img src="<?=$skin_url?>/img/content/productStudy3_img04.png" alt="" /></div>
              <p class="text-blit">Разработан самозащитный EGW для заводских резервуаров-хранилищ.</p>
              <p class="text-blit">Разработана высокопрочная FCW</p>
              <p class="text-blit">Разработаны сварочные материалы для стали марок S500 / S550 / S690 для морских сооружений.</p>
              <p class="text-blit">Разработаны сварочные материалы, подходящие для новых сварочных процессов, таких как автоматизация / высокая эффективность / высокая скорость / облегчение веса.</p>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
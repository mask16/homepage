<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hds/product.product.skin.php
+ Description	: product.product
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI SUPERTECK</p>
		<h3>Introdução de Negócios</h3>
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
      <section class="steelProduct steelProductList">

        <div class="innerWrap">
          <div class="tabSliderWrap p0">
            <div class="swiper-container tabSlider swiper-container-initialized swiper-container-horizontal">
              <div class="swiper-wrapper">
                <div class="swiper-slide <?=($clCode=='')?'on':''?>"><a href="javascript:void(0);">Materiais Especiais de Soldagem</a></div>
                <div class="swiper-slide <?=($clCode=='2')?'on':''?>"><a href="javascript:void(0);">Materiais de soldagem não ferrosos</a></div>
                <div class="swiper-slide <?=($clCode=='3')?'on':''?>"><a href="javascript:void(0);">Outros materiais relacionados à soldagem</a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="steelProductWrap innerWrap">
          <div class="steelProductList steelProductList01" style="display:;">
              <ul>
                <li>
                  <div class="steelProductText">
                    <h5>Materiais de solda de baixa liga</h5>
                    <p class="text-style1">Aços de alta resistência, aços resistentes à fluência,Aços de tenacidade de baixa temperatura</p>
                    <p class="text-blit text-style1">ER80S-Ni1, 80S-D2, 80S-B2, 90S-BS, 100S-G, 110S-G, 90S-B9, 90S-G / EB2-B2,<br>EB2R, 3B3, EA2, EA2TIB, EF3</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct01.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Materiais de solda de liga de aço inoxidável</h5>
                    <p class="text-style1">Aços Ni-Cr-Mo. Aços inoxidáveis (Duplex, Super Duplex)</p>
                    <p class="text-blit text-style1">ER309MOL, 310, 312, 347, 307Si, 410, 430NLB, 2209, 2594, 385</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct02.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Materiais de solda de liga de níquel</h5>
                    <p class="text-style1">Inconel, Hastelloy</p>
                    <p class="text-blit text-style1">ERNi, NiCrFe-5, NiFeCr-1, NiFeCr-2, NiCrMo-3, NiCrMo-4, NiCrMo-10,
                      NiCrMo-14, NiCrCoMo-1, NiCr-3, NiMo-8, CuNi, Ni-1, NiCu-7</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct03.jpg" alt="" /></div>
                </li>
              </ul>
          </div>
          <!-- tab01 -->
          <div class="steelProductList steelProductList02" style="display:none;">
              <ul>
                <li>
                  <div class="steelProductText">
                    <h5>Materiais de solda de liga de alumínio</h5>
                    <p class="text-style1">Liga de alumínio</p>
                    <p class="text-blit text-style1">ER1070, 1080, 4043, 4047, 5087, 5183, 5356, 5554, 5556, 5754</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct04_1.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Materiais de soldagem de liga de cobre</h5>
                    <p class="text-style1">Liga de cobre</p>
                    <p class="text-blit text-style1">MIG & TIG :  ERCu, CuSi-A, CuSn-A, CuSn-C, CuAl-A1&A2&A3, </p>
                    <p class="text-style1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; CuNiAl, CuMnNiAl, CuNi </p>
                    <p class="text-blit text-style1">Eletrodos de vara : ECuSn-C, Cu, CuAl-A2, CuSi, CuNi</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct05.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Materiais de solda de liga de titânio</h5>
                    <p class="text-style1">Liga de titânio</p>
                    <p class="text-blit text-style1">ERTi-1, Ti-2, Ti-5, Ti-7, Ti-12</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct06.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Materiais de Brasagem</h5>
                    <p class="text-style1">Materiais de Brasagem</p>
                    <p class="text-blit text-style1">Alumínio, cobre, brasagem de prata e fluxo</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct07.jpg" alt="" /></div>
                </li>
              </ul>
          </div>
          <!-- tab02 -->
          <div class="steelProductList steelProductList03" style="display:none;">
              <ul>
                <li>
                  <div class="steelProductText">
                    <h5>Varas de goivagem</h5>
                    <p class="text-style1">Varas de goivagem</p>
                    <p class="text-blit text-style1">Hastes de goivagem com núcleo pontiagudo / articulado / plano / oco revestido de cobre DC</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct08.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Varetas de tungstênio</h5>
                    <p class="text-style1">Varetas de tungstênio</p>
                    <p class="text-blit text-style1">Tório-Tungstênio / Lantânio-Tungstênio / Cério-Tungstênio /
                    <p class="text-style1">&nbsp; &nbsp Zircônio-Tungstênio / Ítrio Tungstênio / Tungstênio Puro /
                    <p class="text-style1">&nbsp; &nbsp Eletrodo de Tungstênio Composto
					</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct09.jpg" alt="" /></div>
                </li>
                <li>
                  <div class="steelProductText">
                    <h5>Fio de Zinco</h5>
                    <p class="text-style1">Fio de Zinco</p>
                    <p class="text-blit text-style1">Fio de Zinco, Fio de Zinco AL, Fio Galvalum</p>
                  </div>
                  <div class="steelProductImg"><img src="<?=$skin_url?>/img/temp/steelProduct10.jpg" alt="" /></div>
                </li>

              </ul>
          </div>
          <!-- tab03 -->
        </div>

      </section>


    </div>
  </div>
  <!-- subWrap// -->

  <script>
    var swiper = new Swiper('.tabSlider', {
      slidesPerView: 'auto'
    });


    $('.tabSlider .swiper-slide').click(function() {
      $(this).addClass('on');
      $(this).siblings('.swiper-slide').removeClass('on');

      var tabIndex = $(this).index();

      $('.steelProductList').eq(tabIndex + 1).show();
      $('.steelProductList').eq(tabIndex + 1).siblings().hide();


    });
  </script>
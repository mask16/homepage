<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<script type="text/javaScript">
function fnTab(clCode){
	location.href="<?=$host_url?>/product/partner?clCode="+clCode;
}
</script>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI GLOVILLE</p>
		<h3>Nos activités</h3>
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
      <section class="globalPartner">
        <div class="innerWrap">
          <div class="tabSliderWrap">
            <div class="swiper-container tabSlider swiper-container-initialized swiper-container-horizontal">
              <div class="swiper-wrapper">
                <div class="swiper-slide <?=($clCode=='')?'on':''?>"><a href="javascript:fnTab('');">America</a></div>
                <div class="swiper-slide <?=($clCode=='2')?'on':''?>"><a href="javascript:fnTab('2');">Asia</a></div>
                <div class="swiper-slide <?=($clCode=='3')?'on':''?>"><a href="javascript:fnTab('3');">Europe</a></div>
                <div class="swiper-slide <?=($clCode=='4')?'on':''?>"><a href="javascript:fnTab('4');">Austrailia</a></div>
                <div class="swiper-slide <?=($clCode=='5')?'on':''?>"><a href="javascript:fnTab('5');">etc</a></div>
              </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"></div>
            <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
          </div>

<?php if( $clCode == '2' ){?>
          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/11.png"></div>
              <span class="titStyle5"><b>JAPAN</b></span>
            </div>
            <p class="titStyle3">Konapon Co., Ltd.</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Tokyo</div>
                <div><span class="mTit">Tel</span>3-5812-2350</div>
                <div><span class="mTit">Fax</span>3-5812-2351~2</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
              <li>
                <div><span class="mTit">Area</span>Osaka</div>
                <div><span class="mTit">Tel</span>6244-1715</div>
                <div><span class="mTit">Fax</span>6244-1716</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table -->

          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/2.png"></div>
              <span class="titStyle5"><b>CHINA</b></span>
            </div>
            <p class="titStyle3">Matrix Global Logistics</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Shanghai Kunshan</div>
                <div><span class="mTit">Tel</span>512-5738-1203</div>
                <div><span class="mTit">Fax</span>512-5738-1201</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>

            <p class="titStyle3">Samyoung Trans</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit"></span>Shanghai</div>
                <div><span class="mTit"></span>21-6855-6911</div>
                <div><span class="mTit"></span>6855-6256~7</div>
                <div><span class="mTit"></span>-</div>
              </li>

            </ul>

            <p class="titStyle3">Qingdao Xindongxin Shipping Agency</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit"></span>Qingdao</div>
                <div><span class="mTit"></span>532-666-0163</div>
                <div><span class="mTit"></span>532-666-0178</div>
                <div><span class="mTit"></span>-</div>
              </li>

            </ul>
          </div>
          <!-- /table  -->


          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/31.png"></div>
              <span class="titStyle5"><b>SINGAPORE</b></span>
            </div>
            <p class="titStyle3">Lotango Forwarder PTE Ltd.</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Pantech Industrial Complex</div>
                <div><span class="mTit">Tel</span>6271-3084</div>
                <div><span class="mTit">Fax</span>6278-5662</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table -->

          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/4.png"></div>
              <span class="titStyle5"><b>INDONESIA</b></span>
            </div>
            <p class="titStyle3">PT. Zimmoah Marin Trans</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Kemerdekaan</div>
                <div><span class="mTit">Tel</span>62-21-47876-6502</div>
                <div><span class="mTit">Fax</span>62-21-4786-6503</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table -->


          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/12.png"></div>
              <span class="titStyle5"><b>PHILIPPINES</b></span>
            </div>
            <p class="titStyle3">Sky Plus Logistics</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Manila</div>
                <div><span class="mTit">Tel</span>632-820-9032</div>
                <div><span class="mTit">Fax</span>632-820-9036</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table -->


          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/32.png"></div>
              <span class="titStyle5"><b>MALAYSIA</b></span>
            </div>
            <p class="titStyle3">Asia Pacific ExprAsia Pacific Express</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Selangor Darul Ehsan</div>
                <div><span class="mTit">Tel</span>603-3165-8181</div>
                <div><span class="mTit">Fax</span>603-315-8787</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table -->
<?php }else if( $clCode == '3' ){?>
          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/33.png"></div>
              <span class="titStyle5"><b>U.K</b></span>
            </div>
            <p class="titStyle3">Sea Trex Int’l Logistics</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>New Malden surrey</div>
                <div><span class="mTit">Tel</span>20-8605-0500</div>
                <div><span class="mTit">Fax</span>20-8605-0501</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table -->


          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/35.png"></div>
              <span class="titStyle5"><b>GERMANY</b></span>
            </div>
            <p class="titStyle3">ECLS</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Hamburg</div>
                <div><span class="mTit">Tel</span>40-361-2290</div>
                <div><span class="mTit">Fax</span>40-361-229</div>
                <div><span class="mTit">Note</span>-</div>
              </li>

            </ul>
          </div>
          <!-- /table -->

          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/36.png"></div>
              <span class="titStyle5"><b>NETHERLAND</b></span>
            </div>
            <p class="titStyle3">Nado B.V.</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Schiphol</div>
                <div><span class="mTit">Tel</span>31-654-278-0000</div>
                <div><span class="mTit">Fax</span>31-20-337-0404</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table  -->


          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/34.png"></div>
              <span class="titStyle5"><b>FRANCE</b></span>
            </div>
            <p class="titStyle3">FC Logistique</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Roissy CDG</div>
                <div><span class="mTit">Tel</span>33-2-3521-6086</div>
                <div><span class="mTit">Fax</span>33-1-4947-0508</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table  -->


          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/37.png"></div>
              <span class="titStyle5"><b>AUSTRIA</b></span>
            </div>
            <p class="titStyle3">Euronet Cargo Logistics GMBH</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Objekt</div>
                <div><span class="mTit">Tel</span>43-1-7007-32140</div>
                <div><span class="mTit">Fax</span>43-1-7007-32144</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table  -->


          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/38.png"></div>
              <span class="titStyle5"><b>SLOVAKIA</b></span>
            </div>
            <p class="titStyle3">Lotango Forwarder PTE Ltd.</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Pantech Industrial Complex</div>
                <div><span class="mTit">Tel</span>6271-3084</div>
                <div><span class="mTit">Fax</span>6278-5662</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table  -->


          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/39.png"></div>
              <span class="titStyle5"><b>CZECH</b></span>
            </div>
            <p class="titStyle3">Euko Logistics</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Praha</div>
                <div><span class="mTit">Tel</span>420-724-170-003</div>
                <div><span class="mTit">Fax</span>420-724-170-006</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table  -->


          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/40.png"></div>
              <span class="titStyle5"><b>POLAND</b></span>
            </div>
            <p class="titStyle3">Euko Logistics</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Warszawa</div>
                <div><span class="mTit">Tel</span>4822-676-1796</div>
                <div><span class="mTit">Fax</span>4822-676-1799</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table  -->
<?php }else if( $clCode == '4' ){?>
          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/17.png"></div>
              <span class="titStyle5"><b>AUSTRAILIA</b></span>
            </div>
            <p class="titStyle3">P&L PTY Ltd.</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Sydney</div>
                <div><span class="mTit">Tel</span>2-9700-1188</div>
                <div><span class="mTit">Fax</span>2-9700-0001</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table -->
<?php }else if( $clCode == '5' ){?>
          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/0.png"></div>
           <!--    <span class="titStyle5"><b>Other regions partnership 合作</b></span>-->
            </div>
            <!-- <p class="titStyle3"></p> -->
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span> </div>
                <div><span class="mTit">Tel</span> </div>
                <div><span class="mTit">Fax</span> </div>
                <div><span class="mTit">Note</span> </div>
              </li>
            </ul>
          </div>
          <!-- /table -->
<?php }else{?>
          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/1.png"></div>
              <span class="titStyle5"><b>US</b></span>
            </div>
            <p class="titStyle3">Quality Express Inc.</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Chicago</div>
                <div><span class="mTit">Tel</span>847-718-9891</div>
                <div><span class="mTit">Fax</span>847-718-9801</div>
                <div><span class="mTit">Note</span>Head Quarter</div>
              </li>
              <li>
                <div><span class="mTit">Area</span>Los Angeles</div>
                <div><span class="mTit">Tel</span>310-375-2783</div>
                <div><span class="mTit">Fax</span>310-375-2803</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
              <li>
                <div><span class="mTit">Area</span>N.Y & New Jersey</div>
                <div><span class="mTit">Tel</span>718-632-7880</div>
                <div><span class="mTit">Fax</span>718-632-7889</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
              <li>
                <div><span class="mTit">Area</span>Sanfrancisco</div>
                <div><span class="mTit">Tel</span>650-737-0177</div>
                <div><span class="mTit">Fax</span>: 650-737-0677</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
              <li>
                <div><span class="mTit">Area</span>Houston</div>
                <div><span class="mTit">Tel</span>281-442-4898</div>
                <div><span class="mTit">Fax</span>281-442-5151</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
              <li>
                <div><span class="mTit">Area</span>Miami</div>
                <div><span class="mTit">Tel</span>305-392-9950</div>
                <div><span class="mTit">Fax</span>305-392-9949</div>
                <div><span class="mTit">Note</span>-</div>
              </li>

            </ul>
          </div>
          <!-- /table -->

          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/16.png"></div>
              <span class="titStyle5"><b>CANADA</b></span>
            </div>
            <!-- <p class="titStyle3"></p> -->
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Ontario</div>
                <div><span class="mTit">Tel</span>905-789-1431</div>
                <div><span class="mTit">Fax</span>905-789-1432</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>
          </div>
          <!-- /table -->

          <div class="tableStyle1">
            <div class="titrow">
              <div class="circle"><img src="<?=$skin_url?>/img/content/128px/10.png"></div>
              <span class="titStyle5"><b>MEXICO</b></span>
            </div>
            <p class="titStyle3">Seahawk Logistech</p>
            <div class="tableHeader">
              <table class="thl">
                <colgroup>
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                  <col width="25%">
                </colgroup>
                <thead>
                  <tr>
                    <th>Area</th>
                    <th>Tel</th>
                    <th>Fax</th>
                    <th>Note</th>
                  </tr>
                </thead>
              </table>
            </div>
            <!-- tableHeader// -->
            <ul class="tableList">
              <li>
                <div><span class="mTit">Area</span>Juarez</div>
                <div><span class="mTit">Tel</span>52-55-5514-2299</div>
                <div><span class="mTit">Fax</span>52-55-5514-2199</div>
                <div><span class="mTit">Note</span>-</div>
              </li>
            </ul>

          </div>
          <!-- /table  -->
<?php }?>

        </div>
      </section>
  </div>
  <!-- subWrap// -->
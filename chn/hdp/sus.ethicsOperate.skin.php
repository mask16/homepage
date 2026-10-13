<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.ethicsOperate.skin.php
+ Description	: sus.ethicsOperate
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
		<p>HYUNDAI PNS</p>
		<h3>可持续经营</h3>
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
      <section class="susWrap susOperate">

        <div class="innerWrap">
          <div class="tabSliderWrap p0">
            <div class="swiper-container tabSlider swiper-container-initialized swiper-container-horizontal">
              <div class="swiper-wrapper">
                <div class="swiper-slide on"><a href="javascript:void(0);">伦理经营室组织图</a></div>
                <div class="swiper-slide"><a href="javascript:void(0);">实践活动</a></div>
                <div class="swiper-slide"><a href="javascript:void(0);">伦理咨询</a></div>
              </div>
            </div>
          </div>
        </div>


        <div class="susOperateWrap">
          <div class="susOperate susOperate01">
            <div class="conPd">
              <p class="text-style1">
				<b>
					韩国现代综合金属为了体现BAESCOM，认识到透明、公正的伦理经营的重要性，为了实践这一点，于2020年4月新设了"伦理经营室"。
				</b>
			  </p>
              <ul class="susOperate01-list">
                <li>
                  <span class="bedge">代表理事</span>
                  <div class="cellWrap">
                    <div class="cell tac">
                      <p><b>伦理特别委员会</b></p>
                    </div>
                    <div class="cell">
                      <div class="arrow"></div>
                    </div>
                    <div class="cell tac">
                      <p><b>人事管理委员会<br>（惩戒/奖励）</b></p>
                    </div>
                  </div>
                </li>
                <li><span class="bedge">伦理经营室室长</span></li>
                <li><span class="bedge">伦理经营室组员</span></li>
              </ul>
            </div>
          </div>
          <!-- susOperate01// -->
          <div class="susOperate susOperate02">
            <div class="conPd">
              <p class="text-style1">
				<b>
					韩国现代综合金属为了体现BAESCOM，认识到透明、公正的伦理经营的重要性，为了实践这一点，于2020年4月新设了"伦理经营室"。
				</b>
			  </p>
            </div>
            <div class="innerWrap">
              <ul class="susOperate02List">
                <li>
                  <div>
                    <h6>伦理经营实践承诺</h6>
                    <p>所有员工都为熟悉和实践伦理经营而提交伦理经营实践承诺书。</p>
                  </div>
                </li>
                <li>
                  <div>
                    <h6>伦理经营职员教育及宣传</h6>
                    <p>为树立员工的伦理价值观，<br>实施持续教育。</p>
                  </div>
                </li>
                <li>
                  <div>
                    <h6>伦理经营规范及实践指南修订</h6>
                    <p>对伦理经营宪章、<br>规范及实践指南及时修改及制定专门职务的具体行为标准。 </p>
                  </div>
                </li>
                <li style="display: none;">
                  <div>
                    <h6>선물 반송제도 운영</h6>
                    <p>이해관계자로부터 부득이하게 받은 선물을 반송하거나 사회복지단체에 기증합니다.</p>
                  </div>
                </li>
                <li>
                  <div>
                    <h6>运营非伦理行为举报中心</h6>
                    <p>为预防非伦理行为，落实伦理性企业文化，实行举报及奖励制度。</p>
                  </div>
                </li>

              </ul>

            </div>
          </div>
          <!-- susOperate02// -->
          <div class="susOperate susOperate03">
            <div class="conPd">
              <p class="text-style1">
				  <b>
				  韩国现代综合金属为了体现BAESCOM，认识到透明、公正的伦理经营的重要性，为了实践这一点，于2020年4月新设了"伦理经营室"。
				  </b>
			  </p>
            </div>

            <div class="innerWrap">
              <div class="susOperate03Box">
                <h6>伦理咨询</h6>
                <p class="text-style1">
					在工作中对伦理经营感到好奇或面临伦理困境时，请通过伦理咨询专用窗口进行答复。
					关于非伦理性事项或举报相关事项，请利用“举报”项目。
				</p>

                <ul class="susOperate03List">
					<li><span><b>邮箱 </b></span> ethics@hyundaiwelding.com</li>
					<li><span><b>电话 </b></span> 82-2 6230-6000 ARS指南: 选择伦理经营室</li>
					<li><span><b>FAX  </b></span> 82-2 598-8467</li>
					<li><span><b>邮政举报 </b></span> 首尔江南区德黑兰路507 WeWork大厦 17楼 伦理经营室</li>
                </ul>

              </div>
            </div>

          </div>
          <!-- susOperate03// -->
        </div>



      </section>
    </div>
  </div>
  <!-- subWrap// -->

  <script>
    var swiper = new Swiper('.tabSlider', {
      slidesPerView: 'auto',
      spaceBetween: 0
    });


    $('.tabSlider .swiper-slide').click(function() {
      $(this).addClass('on');
      $(this).siblings('.swiper-slide').removeClass('on');

      var tabIndex = $(this).index();

      $('.susOperate').eq(tabIndex + 1).show();
      $('.susOperate').eq(tabIndex + 1).siblings().hide();


    });
  </script>
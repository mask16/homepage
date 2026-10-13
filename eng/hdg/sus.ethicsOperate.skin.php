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
        <p>HYUNDAI GLOVILLE</p>
        <h3>Sustainable Management</h3>
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
                <div class="swiper-slide on"><a href="javascript:void(0);">Organization Chart of the Ethics Management Office</a></div>
                <div class="swiper-slide"><a href="javascript:void(0);">Activities</a></div>
                <div class="swiper-slide"><a href="javascript:void(0);">Ethics Consulting</a></div>
              </div>
            </div>
          </div>
        </div>


        <div class="susOperateWrap">
          <div class="susOperate susOperate01">
            <div class="conPd">
              <p class="text-style1">
				<b>
					In April 2020, Hyundai Welding established the Ethics Management Office as a dedicated department to recognize and implement the importance of transparent and fair ethical management in order to implement BESCOM.
				</b>
			  </p>
              <ul class="susOperate01-list">
                <li>
                  <span class="bedge">Representative Director</span>
                  <div class="cellWrap">
                    <div class="cell tac">
                      <p>
						<b>Special Committee<br>on Ethics</b>
					  </p>
                    </div>
                    <div class="cell">
                      <div class="arrow"></div>
                    </div>
                    <div class="cell tac">
                      <p>
						<b>Personnel Management Committee</b>
						<br />
						(Punishment/Praise)
					  </p>
                    </div>
                  </div>
                </li>
                <li><span class="bedge">Head of Ethics Management Office</span></li>
                <li><span class="bedge">Staff of Ethics Management Office</span></li>
              </ul>
            </div>
          </div>
          <!-- susOperate01// -->
          <div class="susOperate susOperate02">
            <div class="conPd">
              <p class="text-style1">
				<b>
					In April 2020, Hyundai Welding established the Ethics Management Office as a dedicated department to recognize and implement the importance of transparent and fair ethical management in order to implement BESCOM.
				</b>
			  </p>
            </div>
            <div class="innerWrap">
              <ul class="susOperate02List">
                <li>
                  <div>
                    <h6>A Pledge to Practice Ethics Management</h6>
                    <p>
						All executives and employees submit a pledge of ethics management practice for ethical management.
					</p>
                  </div>
                </li>
                <li>
                  <div>
                    <h6>Education and Promotion of Ethical Management Employees</h6>
                    <p>
						Continuous education is provided to organize ethical values of employees.
					</p>
                  </div>
                </li>
                <li>
                  <div>
                    <h6>Revision of Standards For Ethical Management and Practice Guideline</h6>
                    <p>
						Specific standards for revision are prepared to meet the current ethical management charter, norms, and practice guidelines.
					</p>
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
                    <h6>Operation of The Report Center For Unethical Practices</h6>
                    <p>
						In order to prevent unethical practices and establish an ethical corporate culture, we operate a reporting and reward system.
					</p>
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
					In April 2020, Hyundai Welding established the Ethics Management Office as a dedicated department to recognize and implement the importance of transparent and fair ethical management in order to implement BESCOM.
				</b>
			  </p>
            </div>

            <div class="innerWrap">
              <div class="susOperate03Box">
                <h6>Ethics Counseling</h6>
                <p class="text-style1">
					If you have any questions or ethical dilemmas about ethical management during your work, please tell us through the ethics consultation window and we will answer them as soon as possible.
					<br>
					Please use reporting for any unethical matters or information.
				</p>

                <ul class="susOperate03List">
                  <li><span><b>E-mail </b></span> ethics@hyundaiwelding.com</li>
                  <li><span><b>Telephone </b></span> +82-2-6230-6000 ARS Information: Select Ethics Management Office</li>
                  <li><span><b>FAX </b></span> +82-2-598-8467</li>
                  <li><span><b>Postal Counseling </b></span> 17F WeWork Building 507 Teheran-ro, Gangnam-gu, Seoul</li>
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
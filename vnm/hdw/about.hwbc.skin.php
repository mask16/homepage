<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/about.hwbc.skin.php
+ Description	: about.hwbc
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>
<script>
      $(document).ready(function () {

        setInterval(function () {
          var active = $('li.active');
          active.removeClass('active');
          if (active.next('li').length == 0) {
            active.parent('ul').find('li:first').addClass('active');
          } else {
            active.next('li').addClass('active');
          }
        }, 1000);

        var hVisual = $('.subVisual').outerHeight(),
          hSec01 = $('.aboutHwbc01').outerHeight(),
          hSec02 = $('.aboutHwbc02').outerHeight(),
          hSec03 = $('.aboutHwbc03').outerHeight(),
          hTop = hVisual + hSec01 + hSec02 + 100,
          hTop2 = hVisual + hSec01 + hSec02 + hSec03;

        $(window).scroll(function () {
          if ($(document).scrollTop() > hTop) {
            $('.aboutHwbc03Circle').addClass('move');
          } else {
            $('.aboutHwbc03Circle').removeClass('move');
          }

          if ($(document).scrollTop() > hTop) {
            $('.aboutHwbc04-right').addClass('move');
          } else {
            $('.aboutHwbc04-right').removeClass('move');
          }
        });

        var nav = $(".leftFloating ul li");
        var contents = $(".aboutHwbc");

        nav.click(function (e) {
          e.preventDefault();
          var target = $(this);
          var index = target.index();
          //alert(index);
          var section = contents.eq(index);
          var offset = section.offset().top;
          //alert(offset);
          $(".offset_top").text(offset);

          $("html,body").animate({
            scrollTop: offset
          }, 600);
        });

        $(window).scroll(function () {
          var wScroll = $(this).scrollTop();

          $(".scroll_top").text(wScroll);

          if (wScroll >= contents.eq(0).offset().top) {
            nav.removeClass("on");
            nav.eq(0).addClass("on");
          }
          if (wScroll >= contents.eq(1).offset().top) {
            nav.removeClass("on");
            nav.eq(1).addClass("on");
          }
          if (wScroll >= contents.eq(3).offset().top) {
            nav.removeClass("on");
            nav.eq(3).addClass("on");
          }
        });
      });
</script>

<section class="subVisual visualAbout">
	<div class="innerWrap">
		<div class="visualText">
        <p>HYUNDAI WELDING</p>
			<h3>giới thiệu công ty</h3>
		</div>
	</div>
</section>

<div class="subWrap">

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

	<div class="subContent pb0">
		<section class="leftFloating" id="leftFloating">
			<ul>
				<li class="on">
					<a href="#aboutHwbc01">About</a>
				</li>
				<li>
					<a href="#aboutHwbc02">Preface</a>
				</li>
				<li style="display:none;">
					<a href="#aboutHwbc03">Preface</a>
				</li>
				<li>
					<a href="#aboutHwbc04">Values</a>
				</li>
			</ul>
		</section>
		<div class="floatingRight aboutWrap">
			<section class="aboutHwbc aboutHwbc01 conPd" id="aboutHwbc01">
				<div class="subTitleArea">
					<h3 class="titStyle6">
						HWBC Xây dựng và ý nghĩa
					</h3>
				</div>
			<div class="aboutHwbcCon">
				<p class="text-style1">
					Để đạt được sự phát triển và ổn định của công ty bằng cách chủ động ứng phó với môi trường kinh doanh phức tạp khi cạnh tranh ngày càng gay gắt trên toàn cầu ngoài thị trường trong nước, tất cả các giám đốc điều hành và nhân viên của chúng ta phải có một bản chất thống nhất trong hoạt động và quản lý của công ty. Định nghĩa là có hệ thống được thành lập và các giám đốc điều hành và nhân viên nên sử dụng điều này làm cơ sở để ra quyết định. Khi giám đốc điều hành và nhân viên điều hành công ty theo các quan điểm và lợi ích khác nhau, mục đích cơ bản và phương hướng hoạt động của công ty là khác nhau, vì vậy không chỉ giao tiếp mà còn phải ra quyết định đúng . thậm chí Bạn sẽ không thể đạt được .

				</p>
				<ul class="aboutHwbcImg01">
					<li class="aboutHwbcImgCircle active aboutHwbcImgCircle01"></li>
					<li class="aboutHwbcImgCircle aboutHwbcImgCircle02"></li>
					<li class="aboutHwbcImgCircle aboutHwbcImgCircle03"></li>
					<li class="aboutHwbcImgCircle aboutHwbcImgCircle04"></li>
				</ul>
			</div>
			</section>
			<!-- aboutHwbc01// -->

			<section class="aboutHwbc aboutHwbc02 conPd" id="aboutHwbc02">
				<div class="subTitleArea">
					<h3 class="titStyle5">Theo đuổi sự thịnh vượng chung với các đối tác kinh doanh</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
						  Các giám đốc điều hành và nhân viên vừa là cộng sự kinh doanh, đồng thời là nòng cốt và cơ quan chính của công ty, theo đuổi sự thịnh vượng chung của các doanh nghiệp, do đó làm tăng sự hài lòng của nhân viên và thực hiện công việc của họ với niềm tin rằng cũng có thể phát triển của cá nhân.<br><br>
			  Công ty tiếp tục coi trọng khách hàng, được khách hàng lựa chọn và cùng phát triển.<br><br>
			  Công ty làm cho nhân viên cảm thấy được khen thưởng và xứng đáng với thành tích của họ thông qua công việc, và nhân viên đóng góp vào sự phát triển của công ty.<br>
			  Công ty cũng thực hiện các trách nhiệm xã hội của doanh nghiệp để cùng xã hội phát triển thịnh vượng.<br><br>
			  Theo đó, giá trị của sự thịnh vượng chung được tạo ra cho xã hội của khách hàng, nhân viên, cổ đông và công ty đóng góp vào sự phát triển của xã hội và hạnh phúc của nhân loại thông qua tăng trưởng bền vững và phát triển vĩnh viễn.
					</p>
					<div class="aboutHwbcImg02">
						<span class="aboutHwbcImg02Dot"></span>
					</div>
				</div>
			</section>
			<!-- aboutHwbc02// -->

			<section class="aboutHwbc aboutHwbc03 conPd" id="aboutHwbc03">
				<div class="subTitleArea">
					<h3 class="titStyle5">
					Triển khai BESCOM thông qua CIPP
					</h3>
				</div>
				<div class="aboutHwbcCon">
					<p class="text-style1">
					   Để công ty nhận ra giá trị chung của các đối tác kinh doanh trong một môi trường kinh doanh cạnh tranh vô hạn, công ty phải liên tục tối đa hóa giá trị của mình thông qua việc triển khai BESCOM (khả năng quản lý tốt nhất và tạo ra giá trị mà một công ty Best Company có thể nhận ra).
			  <br><br>
			  Vì mục tiêu này, các giám đốc điều hành và nhân viên đóng góp vào sự phát triển của công ty bằng cách thể hiện năng lực của họ thông qua việc thực hiện CIPP (Thực hành đam mê tưởng tượng sáng tạo). Nó được định nghĩa là lòng dũng cảm của các giám đốc điều hành và nhân viên, và môi trường mà lòng dũng cảm của các giám đốc điều hành và nhân viên có thể được hiển thị là rất quan trọng đối với việc thực hiện CIPP.
			  <br><br>
			  Để đến được với BESCOM, không thể trong chốc lát mà đạt đến hoàn cảnh hạn chế về nhân lực và vật lực như hiện nay, vì vậy chúng tôi không ngừng nỗ lực cải tiến và nâng cao mục tiêu với mục tiêu đầy tham vọng là vươn tới công ty tốt nhất.
			  <br><br>
			  Các giám đốc điều hành và nhân viên can đảm biết cách lắng nghe ý kiến ​​của người khác mà đôi khi họ không muốn nghe và tối đa hóa khả năng làm việc nhóm thông qua văn hóa thảo luận đầu cuối, thực hiện mọi điều họ nói dựa trên sự tôn trọng và tin tưởng lẫn nhau, và động viên Đồng thời, là thành viên và trung tâm của đối tác, chúng tôi đóng góp vào sự thịnh vượng chung của doanh nhân.
            </p>

					<div class="aboutHwbc03Circle">
						<span class="dot dot01"></span>
						<span class="dot dot02"></span>

						<div class="aboutHwbc03Circle01">
							<h5>
								<b>CIPP</b>
							</h5>
							<p>Sự can đảm của các giám đốc điều<br>hành và nhân viên để giành chiến<br>thắng trong cuộcchiến giữa các công<br>ty bằng cách say mê thực<br>hành trí tưởng tượng sáng tạo của họ</p>
						</div>
						<div class="aboutHwbc03Circle02">
							<h5>
								<b>BESCOM</b>
							</h5>
							<p>Hiện thực hóa công ty để công ty<br>tạo ra những giá trị chung<br>với các bênliên quan của doanh<br>nghiệp trong một môi trường<br>kinh doanh cạnh tranh<br>không giới hạn</p>
						</div>
					</div>
				</div>
			</section>
			<!-- aboutHwbc02// -->

			<section class="aboutHwbc aboutHwbc04 conPd" id="aboutHwbc04">
				<div class="aboutHwbc04Con">
					<div class="aboutHwbc04-left">
						<div class="aboutHwbc04-leftContent">
							<h4>HWBC’s Values</h4>
							<p>Những thay đổi lớn trong công ty bắt đầu từ<br>những thay đổi nhỏ trong nhân viên</p>
						</div>
					</div>
					<div class="aboutHwbc04-right">
						<div class="circle01"></div>
						<div class="circle02">
							<p>cùng thịnh</br>vượng</p>
						</div>
						<div class="circle03">
							<p>CIPP</p>
						</div>
						<div class="circle04">
							<p>Nhân viên</p>
						</div>
						<div class="circle05">
							<p>BESCOM</p>
						</div>
						<div class="circle06">
							<p>HWBC</p>
						</div>
					</div>
				</div>
			</section>
			<!-- aboutHwbc04// -->
		</div>
		<!-- aboutWrap// -->
	</div>
	<!-- subContent// -->
</div>
<!-- subWrap// -->
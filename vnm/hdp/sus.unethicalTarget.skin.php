<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalResultDetail.skin.php
+ Description	: sus.unethicalResultDetail.skin.php
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI PNS</p>
        <h3>khã năng quản lý bền vững</h3>
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
      <section class="susWrap">
        <div class="conPd">
          <div class="subTitleArea">
            <p class="text-style1"><b>Nhân viên phải báo cáo theo Bộ Quy tắc Đạo đức và Hướng dẫn Thực hành Quản lý Đạo đức, nhưng nếu không được quy định trong văn bản hoặc nếu có khả năng xảy ra các lập luận mâu thuẫn để giải thích, hãy hỏi Văn phòng Quản lý Đạo đức và thực hiện theo cách giải thích. Công ty vận hành một hệ thống báo cáo và báo cáo nội bộ thông qua nhiều kênh khác nhau để quản lý đạo đức có thể được thực hành một cách trung thực và điều này dựa trên một báo cáo nặc danh.</b></p>
          </div>
        </div>

        <div class="innerWrap">
          <ul class="unethicalTargetList">
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail1">
                <span class="titStyle7"><b>Tham ô tiền công và nhận tiền</b></span>
                <span class="text-style2">Chấp nhận tiền công của công ty hoặc nhận tiền hoặc hàng hóa hoặc giải trí từ các bên liên quan bên ngoài liên quan đến công việc</span>
                <span class="text-style2">Nếu bị phát hiện tham ô tiền công hoặc nhận tiền, có thể xem xét các cáo buộc hình sự và cách chức để xem xét số tiền đó có quá nhiều hay không và công ty có bị thất thoát hay không.</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail2">
                <span class="titStyle7"><b>Quấy rối nơi làm việc</b></span>
                <span class="text-style2">Hành động gây đau đớn về thể xác hoặc tinh thần cho các nhân viên khác bằng cách sử dụng vị trí cấp trên ở nơi làm việc hoặc làm xấu đi môi trường làm việc thông qua bạo lực hoặc ngôn từ lăng mạ.</span>
                <span class="text-style2">Có thể bị xem xét kỷ luật đến cách chức tùy theo mức độ nghiêm trọng của trường hợp khi phát hiện hành vi bắt nạt tại nơi làm việc.</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail3">
                <span class="titStyle7"><b>Quấy rối tình dục tại nơi làm việc</b></span>
                <span class="text-style2">Một hành động khiến đối phương cảm thấy bị sỉ nhục hoặc ghê tởm về tình dục bằng cách sử dụng vị trí ở nơi làm việc hoặc bằng lời nói tình dục hoặc nhu cầu tình dục liên quan đến công việc, v.v.</span>
                <span class="text-style2">Ngay cả khi hành vi quấy rối tình dục do rượu vô tình xảy ra tại một bữa tiệc tối, hành động kỷ luật có thể được xem xét trên nguyên tắc không khoan nhượng vì bất kỳ lý do gì.</span>
              </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail4">
                <span class="titStyle7"><b>Báo cáo hành vi phi đạo đức khác</b></span>
                <span class="text-style2">Vi phạm quy tắc chuẩn mực đạo đức và hướng dẫn thực hành</span>
                <span class="text-style2">Các hành động vi phạm Quy tắc Đạo đức và Nguyên tắc Thực hành hoặc các hành động khác bị coi là bất hợp pháp hoặc phi đạo đức</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->

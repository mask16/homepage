<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/sus.unethicalReport.skin.php
+ Description	: sus.unethicalReport
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualSus">
    <div class="innerWrap">
      <div class="visualText">
        <p>HYUNDAI WELDING</p>
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

    <div class="subContent unethicalMain">
      <div class="innerWrap">
        <div class="unethicalTit">
          <h3>Theo đuổi sự trung thực,</br>công bằng và chính trực.</h3>
          <!-- <p class="text-style1">‘기업윤리’를 최우선 가치로 생각하며, 투명하고 공정하며<br />합리적인 업무 수행을 추구하는 경영정신</p> -->
        </div>

        <ul class="unethicalList">
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=1">
              <span class="tit">Báo cáo về việc tham ô tiền công và việc nhận tiền</span>
              <span class="text">Báo cáo về việc tham ô tiền công và việc nhân viên của Hyundai Welding nhận tiền, hàng hóa và chiêu đãi</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=2">
              <span class="tit">Báo cáo quấy rối nơi làm việc</span>
              <span class="text">Báo cáo khi nhân viên khác tại nơi làm việc gây ra nỗi đau về thể xác hoặc tinh thần hoặc khi họ bị bạo lực hoặc lạm dụng ngôn từ</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=3">
              <span class="tit">Báo cáo quấy rối tình dục tại nơi làm việc</span>
              <span class="text">Báo cáo những hành vi khiến đối phương cảm thấy bị sỉ nhục hoặc ghê tởm về tình dục bằng lời nói tình dục hoặc nhu cầu tình dục tại nơi làm việc</span>
            </a>
          </li>
          <li>
            <a href="<?=$host_url?>/sus/unethicalReportDetail?category=4">
              <span class="tit">Báo cáo hành vi phi đạo đức khác</span>
              <span class="text">Báo cáo các hành vi phi đạo đức khác Báo cáo các hành vi vi phạm các chuẩn mực quản lý đạo đức và hướng dẫn thực hành</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- subWrap// -->
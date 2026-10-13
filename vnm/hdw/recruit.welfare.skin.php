<?php
/***************************************************************
+ Page Name		: /skin/dc/kor/hdw/recruit.welfare.skin.php
+ Description	: recruit.welfare
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualRecruit">
    <div class="innerWrap">
      <div class="visualText">
      <p>HYUNDAI WELDING</p>
        <h3>thông tin tuyển dụng</h3>
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
      <div class="recruitWelfare">
        <div class="conPd">
          <h5 class="titStyle5"><b>Phúc Lợi Nhân Viên</b></h5>
          <p class="text-style1">Mức lương cao nhất trong ngành khơi dậy động lực làm việc của nhân viên và duy trì cuộc sống ổn định để tăng hiệu quả công việc.</p>

          <ul class="recruitWelfareList">
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg01.png" />
              <p><b>Hỗ trợ học phí cho con</b></p>
              <p>Hỗ trợ học phí mẫu giáo, trung học cơ sở và trung học phổ thông, cao đẳng nghề và đại học 4 năm</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg02.png" />
              <p><b> hỗ trợ đám hỷ điếu </b></p>
              <p>Chi phí chúc mừng và chia buồn, thanh toán kỳ nghỉ chúc mừng và chia buồn, và hỗ trợ cho các sản phẩm chúc mừng</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg03.png" />
              <p><b>vận hành nhà ăn bên trong </b></p>
              <p>Vận hành nhà ăn trong nhà máy, hỗ trợ tiền ăn tại trụ sở chính và từng văn phòng</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg04.png" />
              <p><b>Hỗ trợ quỹ nhà ở</b></p>
              <p>Hỗ trợ quỹ nhà khi thuê, mua nhà</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg05.png" />
              <p><b>Hoạt động của xe buýt đưa đón</b></p>
              <p>Dịch vụ xe buýt cho từng khóa học khi đi làm (hoạt động tại Pohang Works)</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg06.png" />
              <p><b>Hoạt động ký túc xá</b></p>
              <p>Nhà máy Pohang cung cấp chỗ ở cho người độc thân</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg07.png" />
              <p><b>Hỗ trợ chi phí nghỉ hè</b></p>
              <p>Hỗ trợ chi phí nghỉ hè cho người lao động</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg08.png" />
              <p><b>Hỗ trợ chi phí bảo dưỡng xe</b></p>
              <p>giám đốc điều hành trở lên</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg09.png" />
              <p><b>Thanh toán quà tặng</b></p>
              <p>Tết nguyên đán, lễ trung thu, ngày lễ lao động, kỷ niệm thành lập, sinh nhật</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg10.png" />
              <p><b>Hỗ trợ chi phí y tế</b></p>
              <p>Hỗ trợ chi phí y tế trong trường hợp ốm đau hoặc thương tật</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg11.png" />
              <p><b>thưởng phục vụ lâu dài</b></p>
              <p>thưởng phục vụ lâu dài</p>
            </li>
            <!-- <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg12.png" />
              <p><b>상가 지원</b></p>
              <p>상가소모품 지원</p>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- subWrap// -->

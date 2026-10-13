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
		<p>HYUNDAI PNS</p>
		<h3>招聘信息</h3>
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
          <h5 class="titStyle5"><b>优点</b></h5>
          <p class="text-style1">通过同行业最高水平的工资，激发成员欲望，维持生活稳定，提高工作效率。 </p>

          <ul class="recruitWelfareList">
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg01.png" />
              <p><b>子女学费支援</b></p>
              <p>幼儿园、初中、高中、专科大学、四年制大学学费支援</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg02.png" />
              <p><b>红白喜事支援</b></p>
              <p>本人及家人等的礼金、休假支付及丧葬用品支援</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg03.png" />
              <p><b>内部食堂运营</b></p>
              <p>工厂内部食堂运营，总公司及各事务所提供餐费支援</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg04.png" />
              <p><b>住房资金支援</b></p>
              <p>全租及购房时提供住宅资金支援</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg05.png" />
              <p><b>运营上班巴士</b></p>
              <p>上班时按路线运行上班巴士（在浦项工厂运行）</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg06.png" />
              <p><b>宿舍运营</b></p>
              <p>浦项工厂提供单身宿舍</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg07.png" />
              <p><b>夏季休假费补贴</b></p>
              <p>支援职工夏季休假费</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg08.png" />
              <p><b>车辆维护费支援</b></p>
              <p>次长以上</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg09.png" />
              <p><b>支付礼物</b></p>
              <p>春节，中秋，劳动节，创立纪念日，生日</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg10.png" />
              <p><b>医疗费支援</b></p>
              <p>本人疾病，伤害医疗费补贴</p>
            </li>
            <li>
              <img src="<?=$skin_url?>/img/content/recruit_welfareImg11.png" />
              <p><b>长期工龄奖励</b></p>
              <p>支付金戒指</p>
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

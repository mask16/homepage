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
		<p>HYUNDAI WELDING</p>
		<h3>持続可能経営</h3>
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
      <section class="susWrap">
        <div class="conPd">
          <div class="subTitleArea">
            <p class="text-style1">
				<b>
					役職員は倫理綱領及び倫理経営実践指針に従って申告するにあたり、本文に明示されてなかったり、解釈に対する主張の対立の可能性がある場合、倫理経営室に問い合わせを行いその解釈に従う会社は倫理経営が誠実に実践されるよう、様々なルートを通して内部の通報、申告制度を運営し、実名申告を原則とする。
				</b>
			</p>
          </div>
        </div>

        <div class="innerWrap">
          <ul class="unethicalTargetList">
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail1">
                <span class="titStyle7"><b>公金横領及び、金品の受取り</b></span>
                <span class="text-style2">職務と関連して会社の公金を横領したり、外部の利害関係者から金品もしくは供応を受取る行為</span>
                <span class="text-style2">公金の横領及び金品の受取が摘発された場合、金額の過多、会社の損失額などを考慮し刑事告発及び解任を検討出来る。</span>

			  </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail2">
                <span class="titStyle7"><b>職場内ハラスメント</b></span>
                <span class="text-style2">-職場内の地位や職位を用いて他の職員に身体的、精神的苦痛を与えたり、暴力や暴言などで業務環境を悪化させる行為</span>
                <span class="text-style2">-職場内ハラスメントが摘発された場合、事案の重大さによっては解任まで懲戒を考慮する事が出来る</span>
			  </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail3">
                <span class="titStyle7"><b>職場内セクハラ</b></span>
                <span class="text-style2">職場内の地位を利用して業務などと関連し、性的な言動や要求を持って相手に性的屈辱感や嫌悪感を抱かせた行為</span>
                <span class="text-style2">会食の場で飲酒によるセクハラが偶発的に発生した場合でも、理由に関係なく不寛容の原則によって懲戒を考慮することが出来る。</span>
			  </a>
            </li>
            <li>
              <a href="<?=$host_url?>/sus/unethicalTargetDetail4">
                <span class="titStyle7"><b>その他の非倫理行為の申告</b></span>
                <span class="text-style2">倫理綱領規範及び、実践の指針を違反した事項</span>
                <span class="text-style2">倫理綱領及び実践指針に違反する行為又は、その他の不法的だったり非倫理的なものであると判断される行為倫理経営違反行為に対する申告対象</span>
			  </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->

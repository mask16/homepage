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


    <div class="subContent unethicalResultDetail">
      <div class="innerWrap">
        <div class="subTitleArea">
          <h5 class="titStyle5"><b>Processing result check</b></h5>
        </div>
        <div class="unethicalResultDetailTable">
          <div class="th">
            <table>
              <colgroup>
                <col width="109px">
                <col width="*">
              </colgroup>
              <tr>
                <th><b>Writer</b></th>
                <td>
                  <span><?=stripslashes($Info['reporter'])?></span>
                  <span><?=stripslashes($Info['tell'])?></span>
                  <span><?=stripslashes($Info['email'])?></span>
                </td>
              </tr>
              <tr>
                <th>Date</th>
                <td><?=substr($Info['regDt'],0,10)?></td>
              </tr>
            </table>
          </div>
          <div class="tbody">
            <h5 class="titStyle7"><?=stripslashes($Info['title'])?><c:out value='${resultInfo.title}' escapeXml='false' /></h5>
            <div><?=nl2br(stripslashes($Info['content']))?></div>
          </div>

          <div class="th">
            <table>
              <colgroup>
                <col width="109px">
                <col width="*">
              </colgroup>
              <tr>
                <th><b>Attachment File</b></th>
                <td>
					<?php if( $Info['file1'] ){?><a href="<?=$fileUrl?>/<?=stripslashes($Info['file1'])?>" target="_blank"  class="text-link"><span><?=stripslashes($Info['file1'])?></span></a><?php }?>
                	<?php if( $Info['file2'] ){?><a href="<?=$fileUrl?>/<?=stripslashes($Info['file2'])?>" target="_blank"  class="text-link"><span><?=stripslashes($Info['file2'])?></span></a><?php }?>
					<?php if( $Info['file3'] ){?><a href="<?=$fileUrl?>/<?=stripslashes($Info['file3'])?>" target="_blank"  class="text-link"><span><?=stripslashes($Info['file3'])?></span></a><?php }?>
                </td>
              </tr>
            </table>
          </div>

          <div class="step">
            <p class="text-style1"><b>Current progress</b></p>
            <ul>
<?php for( $i = 0; $i < count($status_code); $i++ ){?>
				<li class="<?=($Info['status']==$status_code[$i]['code_key'])?'on':''?>"><?=code_array('report_status',1,$status_code[$i]['code_key']) ?></li>
<?php }?>
            </ul>
          </div>

          <div class="tfooter">
            <a href="<?=$host_url?>/sus/unethicalResult"><button type="button" class="btn btnBlue btn-round">Confirm</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- subWrap// -->

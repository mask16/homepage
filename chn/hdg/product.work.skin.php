<?php
/***************************************************************
+ Page Name		:
+ Description	:
***************************************************************/
if( !defined('_GNUBOARD_') )	EXIT;
?>

  <section class="subVisual visualProduct">
    <div class="innerWrap">
		<div class="visualText">
			<p>HYUNDAI GLOVILLE</p>
			<h3>事业介绍</h3>
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
      <section class="businessGloville innerWrap">
        <div class="conPd">

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>管制</b></h6>
              <p class="titStyle5">HYUNDAI<br/>Visibility</p>
            </div>
            <div>
              <p class="">通过与船运公司(Liner)的有机信息交流，实时追踪货物</p>
              <p class="">出港和到达基点的准确日程管理</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>专营服务</b></h6>
              <p class="titStyle5">HYUNDAI<br/>SQM</p>
              <b class="c-gray">service quality management</b>
            </div>
            <div>
              <p class="">运营各客户公司的业务专门组</p>
              <p class="">各客户每周服务质量评价(SQI, KPI Report)</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>物流安全</b></h6>
              <p class="titStyle5">HYUNDAI<br/>SSM</p>
              <b class="c-gray">security & safety management</b>
            </div>
            <div>
              <p class="">运营保安指南及专门小组</p>
              <p class="">实施定期保安教育</p>
            </div>
          </div>

          <div class="businessWorkWrap">
            <div class="list">
              <h6 class="titStyle3"><b>售后服务</b></h6>
              <p class="titStyle5">HYUNDAI<br/>CCM</p>
              <b class="c-gray">claim & complaint management</b>
            </div>
            <div>
              <p class="">紧急事故处理程序/现场出动/巡回访问货主公司</p>
              <p class="">顾客满意度调查及不满事项分析/改善</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- subWrap// -->
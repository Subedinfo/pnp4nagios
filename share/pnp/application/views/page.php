<div class="pagebody">
    <table class="body"><tr><td colspan="2" valign="top">
	<?php if (!empty($header)) {
     		echo $header;
	} ?>
	</tr></td>
	<tr><td>
    <div class="left ui-widget-content ui-corner-all">
	<?php if (!empty($graph_content)) {
     		echo $graph_content;
	} ?>
    </div>
    </td><td valign="top">
	<div class="right ui-widget-content ui-corner-all">
	<?php if (!empty($search_box)) {
     		echo $search_box;
	} ?>

	<?php if (!empty($icon_box)) {
     		echo $icon_box;
	} ?>

	<?php if (!empty($timerange_box)) {
     		echo $timerange_box;
	} ?>

	<?php if (!empty($pages_box)) {
     		echo $pages_box;
	} ?>

	<?php if (!empty($service_box)) {
     		echo $service_box;
	} ?>
	<?php if (!empty($logo_box)) {
     		echo $logo_box;
	} ?>
	</div>
    </td></tr>
	<td><tr colspan="2">
    <div class="left w99 cb ui-corner-all">
	<?php if (!empty($footer)) {
     		echo $footer .  Kohana::lang('core.stats_footer');
	} ?>
    </div>
	</td></tr></table>
</div>

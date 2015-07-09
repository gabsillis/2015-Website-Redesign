<div id="page-content" style="font-size:1.5em;background-color:#4775D1;height:100%">
<style>
h3 {
	background-color: #001D55;
	color: #FBFBFB;
	margin-bottom: 0px;
}
p {
	margin: 0px;
}
a {
	text-decoration: none;
	color: #1F5C1F;
}
</style>
<br />
Current members: Please check the <a href="http://robodogs.org/forums">forums</a> <u>daily</u>.<br />
The calendar may be used as a suppliment to, <b><u>not</u></b> a replacement for, the forums.
<object style="border: solid; margin: 8px 2px; position: absolute; right: 0px; top: 195" data="http://www.google.com/calendar/embed?title=Public%20Calendar&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;src=robodogs.org_mjjoqm31ubpi5e9hinbn1bhsbc%40group.calendar.google.com&amp;ctz=America%2FNew_York" width="650" height="600"><a onclick="window.open(this.href,'_blank');return false;" href="http://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;src=robodogs.org_mjjoqm31ubpi5e9hinbn1bhsbc%40group.calendar.google.com&amp;ctz=America%2FNew_York">Public Calendar</a></object>
<?php $args = array(
	'posts_per_page'   => 5000,
	'category'         => 2
);
$posts_array = get_posts( $args );
?>
<div id="members-info">
<h2>Current team members</h2>
<?php for($i = 0; $i < sizeof($posts_array); $i++) : ?>
<h3><?php print(apply_filters( 'the_title', $posts_array[$i]->post_title )); ?></h3>
<?php print(apply_filters( 'the_content', $posts_array[$i]->post_content)); ?>
<?php endfor; ?>
</div>
<h2>Tonight's dinner is pizza.</h2>
</div>
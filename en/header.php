<?php
/*
Template Name: header.php
*/
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
	</head>

	<body>
		<div class='banner-container'>
			<div id='banner'>

<?php
	$home_url = home_url();

	$getupdates_url = $home_url . "/index.php/getupdates";
	$resources_url = $home_url . "/index.php/resources";
	$team_url = $home_url . "/index.php/team";
	$events_url = $home_url . "/index.php/events";

	if (is_page('getupdates'))
	{
		echo '<div class="logo can-click" onclick="window.location.href=\'' . $home_url . '\';">EOSREAL</div><div id="banner-updates" class="section-block updates section-active">GET UPDATES</div><div id="banner-resources" class="section-block resources can-click" onmouseout="$(\'#banner-resources\').removeClass(\'section-active\');" onmousemove="$(\'#banner-resources\').addClass(\'section-active\');" onclick="window.location.href=\'' . $resources_url . '\';">RESOURCES</div><div id="banner-team" class="section-block team can-click" onmouseout="$(\'#banner-team\').removeClass(\'section-active\');" onmousemove="$(\'#banner-team\').addClass(\'section-active\');" onclick="window.location.href=\'' . $team_url . '\';">OUR TEAM</div><div id="banner-event" class="section-block event can-click" onmouseout="$(\'#banner-event\').removeClass(\'section-active\');" onmousemove="$(\'#banner-event\').addClass(\'section-active\');" onclick="window.location.href=\'' . $events_url . '\';">EVENTS</div>';
	}
	else if (is_page('resources'))
	{
		echo '<div class="logo can-click" onclick="window.location.href=\'' . $home_url . '\';">EOSREAL</div><div id="banner-updates" class="section-block updates can-click" onmouseout="$(\'#banner-updates\').removeClass(\'section-active\');" onmousemove="$(\'#banner-updates\').addClass(\'section-active\');" onclick="window.location.href=\'' . $getupdates_url . '\';">GET UPDATES</div><div id="banner-resources" class="section-block resources section-active">RESOURCES</div><div id="banner-team" class="section-block team can-click" onmouseout="$(\'#banner-team\').removeClass(\'section-active\');" onmousemove="$(\'#banner-team\').addClass(\'section-active\');" onclick="window.location.href=\'' . $team_url . '\';">OUR TEAM</div><div id="banner-event" class="section-block event can-click" onmouseout="$(\'#banner-event\').removeClass(\'section-active\');" onmousemove="$(\'#banner-event\').addClass(\'section-active\');" onclick="window.location.href=\'' . $events_url . '\';">EVENTS</div>';
	}
	else if (is_page('team'))
	{
		echo '<div class="logo can-click" onclick="window.location.href=\'' . $home_url . '\';">EOSREAL</div><div id="banner-updates" class="section-block updates can-click" onmouseout="$(\'#banner-updates\').removeClass(\'section-active\');" onmousemove="$(\'#banner-updates\').addClass(\'section-active\');" onclick="window.location.href=\'' . $getupdates_url . '\';">GET UPDATES</div><div id="banner-resources" class="section-block resources can-click" onmouseout="$(\'#banner-resources\').removeClass(\'section-active\');" onmousemove="$(\'#banner-resources\').addClass(\'section-active\');" onclick="window.location.href=\'' . $resources_url . '\';">RESOURCES</div><div id="banner-team" class="section-block team section-active">OUR TEAM</div><div id="banner-event" class="section-block event can-click" onmouseout="$(\'#banner-event\').removeClass(\'section-active\');" onmousemove="$(\'#banner-event\').addClass(\'section-active\');" onclick="window.location.href=\'' . $events_url . '\';">EVENTS</div>';
	}
	else if (is_page('events'))
	{
		echo '<div class="logo can-click" onclick="window.location.href=\'' . $home_url . '\';">EOSREAL</div><div id="banner-updates" class="section-block updates can-click" onmouseout="$(\'#banner-updates\').removeClass(\'section-active\');" onmousemove="$(\'#banner-updates\').addClass(\'section-active\');" onclick="window.location.href=\'' . $getupdates_url . '\';">GET UPDATES</div><div id="banner-resources" class="section-block resources can-click" onmouseout="$(\'#banner-resources\').removeClass(\'section-active\');" onmousemove="$(\'#banner-resources\').addClass(\'section-active\');" onclick="window.location.href=\'' . $resources_url . '\';">RESOURCES</div><div id="banner-team" class="section-block team can-click" onmouseout="$(\'#banner-team\').removeClass(\'section-active\');" onmousemove="$(\'#banner-team\').addClass(\'section-active\');" onclick="window.location.href=\'' . $team_url . '\';">OUR TEAM</div><div id="banner-event" class="section-block event section-active">EVENTS</div>';
	}
	else 
	{
		echo '<div class="logo can-click" onclick="window.location.href=\'' . $home_url . '\';">EOSREAL</div><div id="banner-updates" class="section-block updates can-click" onmouseout="$(\'#banner-updates\').removeClass(\'section-active\');" onmousemove="$(\'#banner-updates\').addClass(\'section-active\');" onclick="window.location.href=\'' . $getupdates_url . '\';">GET UPDATES</div><div id="banner-resources" class="section-block resources can-click" onmouseout="$(\'#banner-resources\').removeClass(\'section-active\');" onmousemove="$(\'#banner-resources\').addClass(\'section-active\');" onclick="window.location.href=\'' . $resources_url . '\';">RESOURCES</div><div id="banner-team" class="section-block team can-click" onmouseout="$(\'#banner-team\').removeClass(\'section-active\');" onmousemove="$(\'#banner-team\').addClass(\'section-active\');" onclick="window.location.href=\'' . $team_url . '\';">OUR TEAM</div><div id="banner-event" class="section-block event can-click" onmouseout="$(\'#banner-event\').removeClass(\'section-active\');" onmousemove="$(\'#banner-event\').addClass(\'section-active\');" onclick="window.location.href=\'' . $events_url . '\';">EVENTS</div>';
	}
?>
			</div>
		</div>
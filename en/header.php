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
				<div class="logo">EOSREAL</div>
				<div id="banner-updates" class="section-block updates" onmouseout="$('#banner-updates').removeClass('section-active');" onmousemove="$('#banner-updates').addClass('section-active');">GET UPDATES</div> 
				<div id="banner-resources" class="section-block resources" onmouseout="$('#banner-resources').removeClass('section-active');" onmousemove="$('#banner-resources').addClass('section-active');">RESOURCES</div> 
				<div id="banner-team" class="section-block team" onmouseout="$('#banner-team').removeClass('section-active');" onmousemove="$('#banner-team').addClass('section-active');">OUR TEAM</div> 
				<div id="banner-event" class="section-block event" onmouseout="$('#banner-event').removeClass('section-active');" onmousemove="$('#banner-event').addClass('section-active');">EVENTS</div> 
			</div>
		</div>
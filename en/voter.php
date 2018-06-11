<?php
/*
Template Name: voter.php
 */
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<!--<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
		<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
	</head>

	<body>
		<div class='banner-container'>
			<div id='banner'>

<?php
	$home_url = home_url();

	echo '<div class="logo can-click" onclick="window.location.href=\'' . $home_url . '\';">EOSREAL</div>';

	echo get_theme_root();
?>
			</div>
		</div>

		<div id="voter">
			
		</div>

	</body>
</html>
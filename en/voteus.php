<?php
/*
Template Name: voteus.php
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
		<div class='voteus-banner-container'>
			<div id='voteus-banner'>

<?php
	$home_url = home_url();

	echo '<div class="voteus-logo can-click" onclick="window.location.href=\'' . $home_url . '\';"></div>';
?>
			</div>
		</div>

		<div id="voteus">
			<div class="background">
				<div class="wrap">
					<div class="bg-title-text" style="font-weight: bold; color: rgb(255, 255, 255); font-size: 36px; position:relative; padding-top: 95px;">投票工具上我们的名字是</div>
					<div class="bg-title-text" style="font-weight: bold; color: rgb(255, 255, 255); font-size: 60px; position:relative; padding-top: 5px;">eosrealbpcsg</div>
					<div class="bg-title-text" style="font-weight: bold; color: rgb(255, 255, 255); font-size: 80px; position:relative; padding-top: 20px;">我们是完全独立的超级节点</div>
					<div class="bg-title-text" style="color: rgb(144, 237, 216); font-size: 40px; position:relative; padding-top: 20px; line-height: 1.6;">我们遵循最高的道德和信息披露要求<br/>我们的团队分布世界各地<br/>我们在世界中拥有丰富的职业经验:</div>
					<div class="bg-title-text" style="color: rgb(255, 255, 255); font-size: 30px; position:relative; padding-top: 5px;">合规 / 国际事务 / 心理学 / 金融</div>
					<div class="bg-title-text" style="color: rgb(144, 237, 216); font-size: 40px; position:relative; padding-top: 20px;">我们为EOS治理做出了重要贡献</div>
					<div class="bg-title-text" style="color: rgb(255, 255, 255); font-size: 30px; position:relative; padding-top: 120px; opacity: 0.6;">EOSREAL</div>
					<div class="vote-button"><span class="bg-title-text" style="color: rgb(255, 255, 255); font-size: 32px; position:absolute; top: 25px; left: 95px;">VOTE</span></div>
				</div>
			</div>

			<div id="custom">
			</div>
		</div>

		<div id="voteus-footer">
		<div class="wrap">
			<div class="logo">EOSREAL</div>
			<div class="right-text">eos@eosreal.com | Terms of Use | Privacy Policy</div>

			<div class="hype-line-icon link1" onclick="window.location.href='https://steemit.com/@eosreal-io';"></div>
			<div class="hype-line-icon link2" onclick="window.location.href='https://t.me/joinchat/G6-t7RKGUdGWu-Q8MA5IKg';"></div>
			<div class="hype-line-icon link3" onclick="window.location.href='https://twitter.com/EOSREAL_IO';"></div>
			<div class="hype-line-icon link4"></div>
			<div class="hype-line-icon link5" onclick="window.location.href='https://medium.com/@EOSREAL_IO';"></div>
		</div>
	</div>
</body>
</html>
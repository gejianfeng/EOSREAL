<?php
/*
Template Name: votersite.php
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

	echo '<div class="logo can-click" onclick="window.location.href=\'' . $home_url . '\';">EOSREAL</div>'
?>
			</div>
		</div>

		<div id="votersite">
			<div class="wrap">
				<div class="title-container">
					<div class="title1">投票门户名称</div>
					<div class="title2">URL</div>
					<div class="line"></div>
				</div>

				<div class="cell-container">
					<div class="celltext1">EOS.PRODUCER.VOTE</div>
					<div class="celltext2"><a href="http://eos.producer.vote/">http://eos.producer.vote/</a></div>
					<div class="line"></div>
				</div>

				<div class="cell-container">
					<div class="celltext1">EOSeoul's Voting Portal</div>
					<div class="celltext2"><a href="http://vote.eostat.io">http://vote.eostat.io</a></div>
					<div class="line"></div>
				</div>

				<div class="cell-container">
					<div class="celltext1">EOSphere Voting Portal</div>
					<div class="celltext2"><a href="https://eosvoter.eosphere.io/">https://eosvoter.eosphere.io/</a></div>
					<div class="line"></div>
				</div>

				<div class="cell-container">
					<div class="celltext1">Liberty Block's Voting Portal</div>
					<div class="celltext2"><a href="http://vote.libertyblock.io">http://vote.libertyblock.io</a></div>
					<div class="line"></div>
				</div>

				<div class="cell-container">
					<div class="celltext1">Liquid EOS's Voting Portal (from Bancor)</div>
					<div class="celltext2"><a href="http://vote.liquideos.com">http://vote.liquideos.com</a></div>
					<div class="line"></div>
				</div>

				<div class="cell-container">
					<div class="celltext1">Pomelo (wallet+voting) by MEET.ONE,EOSIO.SG, EOS Cannon, EOS Nation</div>
					<div class="celltext2"><a href="http://meet.one/pomelo">http://meet.one/pomelo</a></div>
					<div class="line"></div>
				</div>

				<div class="cell-container">
					<div class="celltext1">Bitfinex Voting Portal</div>
					<div class="celltext2"><a href="https://support.bitfinex.com/hc/en-us/articles/360005324573-EOS-Block-Producer-Ballot">https://support.bitfinex.com/hc/en-us/articles/360005324573-EOS-Block-Producer-Ballot</a></div>
					<div class="line"></div>
				</div>

				<div class="cell-container">
					<div class="celltext1">Greymass Wallet &amp; Voting Portal</div>
					<div class="celltext2"><a href="https://github.com/greymass/eos-voter/blob/master/README.md">https://github.com/greymass/eos-voter/blob/master/README.md</a></div>
					<div class="line"></div>
				</div>

				<div class="cell-container">
					<div class="celltext1">EOS Canada's Wallet and Voting (command line voting tool and wallet)</div>
					<div class="celltext2"><a href="https://www.eoscanada.com/en/tools/eosc">https://www.eoscanada.com/en/tools/eosc</a></div>
					<div class="line"></div>
				</div>

				<div class="title-container">
				</div>
			</div>
		</div>

	</body>
</html>
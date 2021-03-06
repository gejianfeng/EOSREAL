<?php
/*
Template Name: index.php
*/
?>

<?php get_header(); ?>

<div id="index">
	<div class="bg-wrap">
		<div class="bg-container">
			<div class="background bg0"></div>
			<div class="background bg1" style="display: none;"></div>
			<div class="background bg2" style="display: none;"></div>
			<div class="background bg3" style="display: none;"></div>
			<div class="background bg4" style="display: none;"></div>
			<div class="background bg5" style="display: none;"></div>
		</div>
	</div>
	<div class="wrap content">
		<div class="logo"></div>
		<div class="sub-title">The most powerful infrastructure for<br/>decentralized applications</div>
		<div class="arrow"></div>
		<div class="wxframe" style="display: none;"></div>
		<div class="wxframeclose" style="display: none;" onclick="closeWeixinIcon();">CLOSE</div>
		<div class="bar">
			<div id="btn-email" class="bar-button email-inactive" onmouseout="$('#btn-email').removeClass('email-active'); $('#btn-email').addClass('email-inactive');" onmousemove="$('#btn-email').removeClass('email-inactive'); $('#btn-email').addClass('email-active');" onclick="window.location.href='mailto:eos@eosreal.com';"></div>

			<div class="bar-split" style="left: 135px;"></div>

			<div id="btn-twitter" class="bar-button twitter-inactive" onmouseout="$('#btn-twitter').removeClass('twitter-active'); $('#btn-twitter').addClass('twitter-inactive');" onmousemove="$('#btn-twitter').removeClass('twitter-inactive'); $('#btn-twitter').addClass('twitter-active');" onclick="window.location.href='https://twitter.com/EOSREAL_IO';"></div>

			<div class="bar-split" style="left: 260px;"></div>

			<div id="btn-wechat" class="bar-button wechat-inactive" onmouseout="$('#btn-wechat').removeClass('wechat-active'); $('#btn-wechat').addClass('wechat-inactive');" onmousemove="$('#btn-wechat').removeClass('wechat-inactive'); $('#btn-wechat').addClass('wechat-active');" onclick="showWeixinIcon();"></div>

			<div class="bar-split" style="left: 385px;"></div>


			<div id="btn-weibo" class="bar-button weibo-inactive" onmouseout="$('#btn-weibo').removeClass('weibo-active'); $('#btn-weibo').addClass('weibo-inactive');" onmousemove="$('#btn-weibo').removeClass('weibo-inactive'); $('#btn-weibo').addClass('weibo-active');" onclick="window.location.href='https://www.weibo.com/u/6527955391?topnav=1&wvr=6&topsug=1';"></div>

			<div class="bar-split" style="left: 510px;"></div>

			<div id="btn-telegram" class="bar-button telegram-inactive" onmouseout="$('#btn-telegram').removeClass('telegram-active'); $('#btn-telegram').addClass('telegram-inactive');" onmousemove="$('#btn-telegram').removeClass('telegram-inactive'); $('#btn-telegram').addClass('telegram-active');" onclick="window.location.href='https://t.me/joinchat/G6-t7RKGUdGWu-Q8MA5IKg';"></div>

			<div class="bar-split" style="left: 635px;"></div>

			<div id="btn-medium" class="bar-button medium-inactive" onmouseout="$('#btn-medium').removeClass('medium-active'); $('#btn-medium').addClass('medium-inactive');" onmousemove="$('#btn-medium').removeClass('medium-inactive'); $('#btn-medium').addClass('medium-active');" onclick="window.location.href='https://medium.com/@EOSREAL_IO';"></div>

			<div class="bar-split" style="left: 760px;"></div>

			<div id="btn-steemit" class="bar-button steemit-inactive" onmouseout="$('#btn-steemit').removeClass('steemit-active'); $('#btn-steemit').addClass('steemit-inactive');" onmousemove="$('#btn-steemit').removeClass('steemit-inactive'); $('#btn-steemit').addClass('steemit-active');" onclick="window.location.href='https://steemit.com/@eosreal-io'"></div>

			<div class="bar-split" style="left: 885px;"></div>

			<div id="btn-youtube" class="bar-button youtube-inactive" onmouseout="$('#btn-youtube').removeClass('youtube-active'); $('#btn-youtube').addClass('youtube-inactive');" onmousemove="$('#btn-youtube').removeClass('youtube-inactive'); $('#btn-youtube').addClass('youtube-active');" onclick="window.location.href='https://www.youtube.com/channel/UCDa2gIsEQway1DPNjMYar8g?view_as=subscriber';"></div>
		</div>
	</div>
</div>

<script type="text/javascript">

var currentIdx = 0;
var animCnt = 0;

function SwitchBackground()
{
	var nextIdx = (currentIdx + 1) % 6;

	var nextObjectSelector = '.bg' + nextIdx;
	var currentObjectSelector = '.bg' + currentIdx;

	animCnt = 2;

	$(nextObjectSelector).css({"left": "1920px"});
	$(nextObjectSelector).show();

	$(nextObjectSelector).animate({left:'0px'}, 750, "linear", function(){
		currentIdx++;

		animCnt--;
		CheckAnim();
	});

	$(currentObjectSelector).animate({left:'-1920px'}, 750, "linear", function(){
		$(currentObjectSelector).hide();

		animCnt--;
		CheckAnim();
	});
}

function CheckAnim()
{
	if (animCnt == 0)
	{
		setTimeout("SwitchBackground()", 5000);
	}
}

function showWeixinIcon()
{
	$(".wxframe").show();
	$(".wxframeclose").show();
}

function closeWeixinIcon()
{
	$(".wxframe").hide();
	$(".wxframeclose").hide();
}

$(document).ready(function() {
	SwitchBackground();
});

</script>

</body>
</html>
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
?>
			</div>
		</div>

		<div id="voter">
			<div class="wrap">
				<div class="title-container">
					<div class="title1">EOS Voter</div>
					<div class="title-line"></div>
					<div class="title2">目前连接到**eos主网**网络。<br/>链ID=aca 376f 206b 8fc 25a 6ed 44dbdc 66547c 36c 363c 33a 119ffbef 943642f 0e906。<br/><span id="total_voter"></span>张票投票支持启动该链 
					</div>
					<div class="title-button" onclick="showVoterSite();">投票门户列表</div>
				</div>

				<div class="search-container" style="display: none;">
					<div class="search-title">搜索</div>
					<div class="search-icon"></div>
				</div>

				<div class="context-container">
					<div class="context-title-container">
						<div class="context-title">超级节点</div>
						<div class="context-title-line"></div>
					</div>
					
					<div class="context-sub-title-container">
						<div class="context-sub-title" style="left: 205px;">超级节点</div>
						<div class="context-sub-title" style="left: 855px;">目前总投票数</div>
						<!--<div class="context-sub-title" style="left: 1205px;">国家</div>-->
						<div class="context-sub-title" style="left: 1400px;">信息</div>
					</div>

					<div id="dynamic">

					</div>

					<div class="placeholder"></div>
				</div>

				<div class="placeholder"></div>
			</div>
		</div>

	</body>

<script type="text/javascript">

<?php
	$path = get_theme_root();
	$path .= "/EOSREAL/producers1.json";
	$myfile = fopen($path, "r") or die("fail to read file");
	$data = fread($myfile,filesize($path));
	fclose($myfile);

	$jo = json_decode($data);
	
	echo "var data = JSON.parse('" . json_encode($jo) . "');";
?>

function showVoterSite()
{
<?php
	$root_url = home_url();
	$target_url = $home_url . "/index.php/votersite";

	echo 'window.location.href=\'' . $target_url . '\';';
?>
}

window.onload=function (){
	if (data == null || typeof(data) == "undefined") {
		return;
	}

	var total = +data.total_producer_vote_weight;

	var total_show = total / 3719520000;
	var total_formatted = number_format(total_show, 0, '.', ',');
	$("#total_voter").html(total_formatted);

	var count = data.rows.length;

	var htmlCode = "";

	for (var i = 0; i < count; ++i) {
		var idx = (i + 1) < 10 ? "0" + (i + 1) : i.toString();
		var o = data.rows[i];
		var name = o.owner;
		var url = o.url;
		var val = +o.total_votes;
		var val1 = val / 3719520000;
		val1 = val1.toFixed(0);
		var val1_formatted = number_format(val1, 0, '.', ',');
		var val2 = val / total * 100;
		val2 = val2.toFixed(2);
		val2 = val2.toString() + "%";

		htmlCode += "<div class='dynamic-container'>";
		htmlCode += "<div class='dynamic-text' style='left: 26px;'>" + idx + "</div>";
		htmlCode += "<div class='dynamic-text' style='left: 185px;'>" + name + "</div>";
		htmlCode += "<div class='dynamic-text' style='left: 835px;'>" + "<span style='color: rgb(198, 125, 11);'>" + val1_formatted + "</span> " + val2 + "</div>";
		//htmlCode += "<div class='dynamic-text' style='left: 1185px;'>KR</div>";
		htmlCode += "<div class='dynamic-text' style='left: 1380px;'>" + url + "</div>";
		htmlCode += "</div>";
	}

	$("#dynamic").html(htmlCode);
}

function number_format(number, decimals, dec_point, thousands_sep) {
    /*
    * 参数说明：
    * number：要格式化的数字
    * decimals：保留几位小数
    * dec_point：小数点符号
    * thousands_sep：千分位符号
    * */
    number = (number + '').replace(/[^0-9+-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.ceil(n * k) / k;
        };
 
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    var re = /(-?\d+)(\d{3})/;
    while (re.test(s[0])) {
        s[0] = s[0].replace(re, "$1" + sep + "$2");
    }
 
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

</script>
</html>
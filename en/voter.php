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
				<select id="language">
					<option value="0" selected>中文</option>
					<option value="1">Englinsh</option>
					<option value="2">한국어.</option>
				</select>
			</div>
		</div>

		<div id="voter">
			<div class="wrap">
				<div class="title-container">
					<div class="title1">EOS Voter</div>
					<div class="title-line"></div>
					<div id="text1" class="title2">目前连接到**eos主网**网络。<br/>链ID=aca 376f 206b 8fc 25a 6ed 44dbdc 66547c 36c 363c 33a 119ffbef 943642f 0e906。<br/><span id="total_voter"></span>张票投票支持启动该链 
					</div>
					<div id="text2" class="title-button" onclick="showVoterSite();">投票门户列表</div>
				</div>

				<div class="search-container" style="display: none;">
					<div id="text3" class="search-title">搜索</div>
					<div class="search-icon"></div>
				</div>

				<div class="context-container">
					<div class="context-title-container">
						<div id="text4" class="context-title">超级节点</div>
						<div class="context-title-line"></div>
					</div>
					
					<div class="context-sub-title-container">
						<div id="text5" class="context-sub-title" style="left: 205px;">超级节点</div>
						<div id="text6" class="context-sub-title" style="left: 855px;">目前总投票数</div>
						<!--<div class="context-sub-title" style="left: 1205px;">国家</div>-->
						<div id="text7" class="context-sub-title" style="left: 1400px;">信息</div>
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

	$path = get_theme_root();
	$path .= "/EOSREAL/Producers-total.txt";
	$myfile = fopen($path, "r") or die("fail to read file");
	$data = fread($myfile,filesize($path));
	fclose($myfile1);
	
	echo "var producers_total = +'" . $data . "';";
?>

var language = 0;

var template1 = [
	"本浏览器由EOSREAL(eosrealbpcsg)开发。EOSREAL是EOS治理方面的重要贡献者。我们拥有多文化背景、高专业水平，并且认同去中心化的价值理念。<br/>现在已经有{0}个EOS代币进行了投票。<br/>参与投票代币数量需达到150,000,000个方能正式启动超级节点竞选机制，确认当选的21个超级节点。<br/>目前的投票代币数量达到了启动要求数量的{1}%。<br/>每一个EOS代币最多可投出30张选票，目前已进行投票的EOS代币共投出{2}张选票，平均每个EOS代币选择支持{3}个超级节点。",
	"This voter monitor is developed by EOSREAL(eosrealbpcsg). EOSREAL is a key contributor to EOS governance. We are multicultural, professional and appreciate the value of decentralization.<br/>Currently, {0} EOS tokens have voted. <br/>The BP voting mechanism will be formally initated to elect 21 BPs when 150,000,000 EOS tokens have voted.<br/>Current voting EOS tokens have reached {1}% of tokens needed for initiation.<br/>Each EOS token can vote for no more than 30 BPCs. The EOS tokens voted have altogether give out {2} votes, and each EOS token on average now votes {3} BPCs.",
	"본 투표 모니터는 EOSREAL(eosrealbpcsg)가 개발했습니다. EOSREAL는 EOS 가버넌스에 중요한 공헌을 바쳤습니다. 우리는 다문화, 전문적이며 decentralization의 가치를 지지합니다.<br/>지금까지 이미 {0}개 EOS 토컨이 투표에 참여했습니다.<br/>투표에 참여한 토컨이 150,000,000개에 도달해야  블록프로듀서 경선 메커니즘을 정식으로 시작하고 당첨된 21개 블록프로듀서를 확인할 수 있습니다."
];

var text1 = [
];

var text2 = [
	"投票门户站点",
	"Vote Portal",
	"투표 포토 사이트"
];

var text3 = [
	"搜索",
	"Search",
	"Search"
];

var text4 = [
	"超级节点",
	"BPC",
	"BPC"
];

var text6 = [
	"目前总投票数",
	"Current Vote",
	"지금까지 총 투표수"
];

var text7 = [
	"信息",
	"Information",
	"정보"
];


function showVoterSite()
{
<?php
	$root_url = home_url();
	$target_url = $home_url . "/index.php/votersite";

	echo 'window.location.href=\'' . $target_url . '\';';
?>
}

window.onload=function () {
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
		htmlCode += "<div class='dynamic-text' style='left: 1380px;'><a href='" + url + "'>" + url + "</a></div>";
		htmlCode += "</div>";
	}

	$("#dynamic").html(htmlCode);

	$("#language").change(function() {
		var val = $(this).children('option: selected').val();
		var selectValue = +val;

		if (selectValue == language) {
			return;
		}

		language = selectValue;
		reloadLanguage();
	});

	reloadLanguage();
}

function number_format(number, decimals, dec_point, thousands_sep)
{
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

function reloadLanguage()
{
	$("#text2").html(text2[language]);
	$("#text3").html(text3[language]);
	$("#text4").html(text4[language]);
	$("#text5").html(text4[language]);
	$("#text6").html(text6[language]);
	$("#text7").html(text7[language]);
}

</script>
</html>
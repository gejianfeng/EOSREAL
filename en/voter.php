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
				<select id="language" class="language_option">
					<option value="0" selected="selected">中文</option>
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
					<div id="text1" class="title2"></div>
					<div id="text2" class="title-button" onclick="showVoterSite();">投票门户列表</div>
				</div>

				<div class="search-container">
					<div id="text3" class="search-title">搜索</div>
					<div class="search-icon"></div>
					<input id="search" class="input-box" type="text" style="left: 80px; top: 10px; position:absolute; width: 1640px; height: 35px">
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

var language = 0;

var total_producer_vote_weight = 0;

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

function canCalculate()
{
	if (data == null || typeof(data) == "undefined" || producers_total == null || typeof(producers_total) == "undefined") {
		return false;
	}
	else {
		return true;
	}
}

window.onload=function () {
	$("#language").change(function() {
		var val = $("#language").val();
		var selectValue = +val;

		if (selectValue == language) {
			return;
		}

		language = selectValue;
		reloadLanguage();
		
		if (canCalculate())
		{
			reloadText1();
		}
	});

	$("#search").on("input",function(e){
		//获取input输入的值
		var inputVal = e.delegateTarget.value;

		if (canCalculate())
		{
			if (inputVal == '')
			{
				showList(data.rows);
			}
			else
			{
				var list = [];

				for (var i = 0; i < data.rows.length; ++i)
				{
					var o = data.rows[i];

					if (o.owner.indexOf(inputVal) != -1)
					{
						list.push(o);
					}
				}

				showList(list);
			}

		}
	});

	reloadLanguage();

	if (canCalculate())
	{
		total_producer_vote_weight = +data.total_producer_vote_weight;

		var val1 = number_format(producers_total, 0, '.', ',');
		
		var val2 = producers_total / 150000000;
		val2 = val2.toFixed(0);
		val2 = number_format(val2, 2, '.', ',');

		var val3 = total_producer_vote_weight / 3719520000;
		val3 = number_format(val3, 0, '.', ',');

		var val4 = total_producer_vote_weight / 3719520000 / 150000000;
		val4 = val4.toFixed(0);
		val4 = number_format(val4, 0, '.', ',');

		text1.push(template1[0].format(val1, val2, val3, val4));
		text1.push(template1[1].format(val1, val2, val3, val4));
		text1.push(template1[2].format(val1));

		reloadText1();

		showList(data.rows);
	}
}

String.prototype.format = function(args) {
    var result = this;
    if (arguments.length > 0) {    
        if (arguments.length == 1 && typeof (args) == "object") {
            for (var key in args) {
                if(args[key]!=undefined){
                    var reg = new RegExp("({" + key + "})", "g");
                    result = result.replace(reg, args[key]);
                }
            }
        }
        else {
            for (var i = 0; i < arguments.length; i++) {
                if (arguments[i] != undefined) {
　　　　　　　　　　　　var reg= new RegExp("({)" + i + "(})", "g");
                    result = result.replace(reg, arguments[i]);
                }
            }
        }
    }
    return result;
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

function showList(list)
{
	var count = list.length;

	var htmlCode = "";

	for (var i = 0; i < count; ++i) {
		var idx = (i + 1) < 10 ? "0" + (i + 1) : i.toString();
		var o = list[i];
		var name = o.owner;
		var url = o.url;
		var val = +o.total_votes;
		var val1 = val / 3719520000;
		val1 = val1.toFixed(0);
		var val1_formatted = number_format(val1, 0, '.', ',');
		var val2 = val / total_producer_vote_weight * 100;
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

function reloadText1()
{
	$("#text1").html(text1[language]);
}

<?php
	$path = get_theme_root();
	$path .= "/EOSREAL/producers-total.txt";
	$myfile = fopen($path, "r") or die("fail to read file");
	$data = fread($myfile,filesize($path));
	fclose($myfile1);

	$data = substr($data, 0, strlen($data) - 1);
	
	echo "var producers_total = parseInt('" . $data . "');";

	$path = get_theme_root();
	$path .= "/EOSREAL/producers1.json";
	$myfile = fopen($path, "r") or die("fail to read file");
	$data = fread($myfile,filesize($path));
	fclose($myfile);

	$jo = json_decode($data);
	
	echo "var data = JSON.parse('" . json_encode($jo) . "');";
?>

</script>
</html>
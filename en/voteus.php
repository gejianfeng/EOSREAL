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
					<div class="bg-title-text" style="font-weight: bold; color: rgb(255, 255, 255); font-size: 27px; position:relative; padding-top: 40px;">投票工具上我们的名字是</div>
					<div class="bg-title-text" style="font-weight: bold; color: rgb(255, 255, 255); font-size: 45px; position:relative; padding-top: 5px;">eosrealbpcsg</div>
					<div class="bg-title-text" style="font-weight: bold; color: rgb(255, 255, 255); font-size: 60px; position:relative; padding-top: 20px;">我们是完全独立的超级节点</div>
					<div class="bg-title-text" style="color: rgb(144, 237, 216); font-size: 30px; position:relative; padding-top: 10px; line-height: 1.6;">我们遵循最高的道德和信息披露要求<br/>我们的团队分布世界各地<br/>我们在世界中拥有丰富的职业经验:</div>
					<div class="bg-title-text" style="color: rgb(255, 255, 255); font-size: 22px; position:relative; padding-top: 5px;">合规 / 国际事务 / 心理学 / 金融</div>
					<div class="bg-title-text" style="color: rgb(144, 237, 216); font-size: 30px; position:relative; padding-top: 20px;">我们为EOS治理做出了重要贡献</div>
					<div class="bg-title-text" style="color: rgb(255, 255, 255); font-size: 24px; position:relative; padding-top: 70px; opacity: 0.6;">EOSREAL</div>
					<div class="vote-button"><span class="bg-title-text" style="color: rgb(255, 255, 255); font-size: 18px; position:absolute; top: 15px; left: 68px;">VOTE</span></div>
				</div>
			</div>

			<div class="custom">
				<div class="wrap">
					<div class="section" style="margin-top: 40px; height: 500px;">
						<div class="section-title"><b>EOSREAL’s 30 BP Picks with Thousands of Hours Work</b></div>
						<div class="section-content">It took hundreds of hours to understand a company or a blockchain, so as to understand Block Producer candidates. EOSREAL team members have traveled 100,000 miles, meeting half hundred BPCs, spending thousands hours working with them on finalizing constitutions, building community code repository, uniting together to launch the mainnet.<br/><br/>We have been long thinking to write this recommendation list. It is exact the list EOSREAL casts its own 30 votes.<br/><br/>The independence of BPs and diversification of locations, jurisdictions and even religions are essential to the whole EOS network/community security, but we should not lower the standards if we have choice (maybe we should set up mechanism to bring in diversified new BPs). <b>Our current list includes 7 China (including 2 HK), 4 US, 3 Canada, 3 Korea, 6 Europe, 1 Argentina, 1 Brazil, 1 Guatemala, 1 Kenya and 5 others.</b><br/><br/>The values to select BPs evolve from time to time with the growth of EOS and the community. At the current stage, we value 4 dimensions of BPCs: <b>community effort, technical skills, governance contribution, and global cohesion</b> , then we average out the total score. The first 3 are self-explainable. The global cohesion to bring people together is a must for launching this global largest decentralized project.<br/><br/>We found our list is generally in line with the current voting result with one issue casting EOSREAL out of 100 — Voters vote way more on technology side than governance side (<b>cry me, we are the first and largest ‘GOVERNED’ blockchain!</b>)</div>
					</div>
					<div class="section" style="margin-top: 60px; height: 1632px;">
						<div class="section-title"><b>EBlock Producer Candidate List</b></div>
						<div class="section-content" style="line-height: 3;">
							<table width="1049" style="border-collapse: collapse;">
								<tbody>
									<tr style="border-bottom: 1px solid #eee;">
										<td width="120">BPC List</td>
										<td width="114">Code</td>
										<td width="102">Location</td>
										<td width="101">Community</td>
										<td width="102">Technology</td>
										<td width="107">Governance</td>
										<td width="87">Cohesion</td>
										<td width="62"> Total</td>
										<td width="73">Ranking</td>
										<td width="130" style="line-height: 1.5 !important;">Voting<br/>Ranking</td>
										<td width="51">Delta</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Canada</td>
										<td>eoscanadacom</td>
										<td>Canada</td>
										<td>3</td>
										<td>5</td>
										<td>5</td>
										<td>5</td>
										<td>4.50</td>
										<td>1</td>
										<td>1</td>
										<td>0</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS New York</td>
										<td>eosnewyorkio</td>
										<td>US</td>
										<td>5</td>
										<td>4</td>
										<td>5</td>
										<td>4</td>
										<td>4.50</td>
										<td>1</td>
										<td>4</td>
										<td>-3</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOSREAL</td>
										<td>eosrealbpcsg</td>
										<td>Singapore</td>
										<td>3</td>
										<td>2</td>
										<td>5</td>
										<td>5</td>
										<td>3.75</td>
										<td>3</td>
										<td>100</td>
										<td>-97</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Nation</td>
										<td>eosnationftw</td>
										<td>Canada</td>
										<td>4</td>
										<td>4</td>
										<td>3</td>
										<td>3</td>
										<td>3.50</td>
										<td>4</td>
										<td>22</td>
										<td>-18</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Dublin</td>
										<td>eosdublinwow</td>
										<td>Europe</td>
										<td>3</td>
										<td>4</td>
										<td>2</td>
										<td>5</td>
										<td>3.50</td>
										<td>4</td>
										<td>34</td>
										<td>-30</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>Cryptolion</td>
										<td>cryptolions1</td>
										<td>Europe</td>
										<td>1</td>
										<td>5</td>
										<td>5</td>
										<td>3</td>
										<td>3.50</td>
										<td>4</td>
										<td>29</td>
										<td>-25</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Asia</td>
										<td>eosasia11111</td>
										<td>Hong Kong</td>
										<td>3</td>
										<td>4</td>
										<td>1</td>
										<td>5</td>
										<td>3.25</td>
										<td>7</td>
										<td>21</td>
										<td>-14</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>HelloEOS</td>
										<td>helloeoscnbp</td>
										<td>China</td>
										<td>4</td>
										<td>2</td>
										<td>2</td>
										<td>3</td>
										<td>2.75</td>
										<td>8</td>
										<td>27</td>
										<td>-19</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOSYS</td>
										<td>eosyskoreabp</td>
										<td>Korea</td>
										<td>4</td>
										<td>3</td>
										<td>2</td>
										<td>2</td>
										<td>2.75</td>
										<td>8</td>
										<td>5</td>
										<td>3</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Café</td>
										<td>eoscafeblock</td>
										<td>Canada</td>
										<td>4</td>
										<td>3</td>
										<td>2</td>
										<td>2</td>
										<td>2.75</td>
										<td>8</td>
										<td>8</td>
										<td>0</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Tribe</td>
										<td>eostribeprod</td>
										<td>US</td>
										<td>4</td>
										<td>3</td>
										<td>2</td>
										<td>2</td>
										<td>2.75</td>
										<td>8</td>
										<td>28</td>
										<td>-20</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS 42</td>
										<td>eos42freedom</td>
										<td>Europe</td>
										<td>3</td>
										<td>3</td>
										<td>3</td>
										<td>1</td>
										<td>2.50</td>
										<td>12</td>
										<td>20</td>
										<td>-8</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Sw/eden</td>
										<td>eosswedenorg</td>
										<td>Europe</td>
										<td>3</td>
										<td>5</td>
										<td>1</td>
										<td>1</td>
										<td>2.50</td>
										<td>12</td>
										<td>9</td>
										<td>3</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Gravity</td>
										<td>eosisgravity</td>
										<td>China</td>
										<td>5</td>
										<td>2</td>
										<td>1</td>
										<td>2</td>
										<td>2.50</td>
										<td>12</td>
										<td>12</td>
										<td>0</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Cannon</td>
										<td>eoscannonchn</td>
										<td>China</td>
										<td>4</td>
										<td>2</td>
										<td>2</td>
										<td>2</td>
										<td>2.50</td>
										<td>12</td>
										<td>13</td>
										<td>-1</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>SHEOS</td>
										<td>sheos21sheos</td>
										<td>Europe</td>
										<td>3</td>
										<td>2</td>
										<td>2</td>
										<td>3</td>
										<td>2.50</td>
										<td>12</td>
										<td>17</td>
										<td>-5</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOSLaoMao</td>
										<td>eoslaomaocom</td>
										<td>Japan</td>
										<td>2</td>
										<td>4</td>
										<td>2</td>
										<td>2</td>
										<td>2.50</td>
										<td>12</td>
										<td>30</td>
										<td>-18</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>HKEOS</td>
										<td>hkeoshkeosbp</td>
										<td>Hong Kong</td>
										<td>1</td>
										<td>5</td>
										<td>1</td>
										<td>3</td>
										<td>2.50</td>
										<td>12</td>
										<td>46</td>
										<td>-34</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Argentina</td>
										<td>argentinaeos</td>
										<td>Argentina</td>
										<td>3</td>
										<td>4</td>
										<td>1</td>
										<td>1</td>
										<td>2.25</td>
										<td>19</td>
										<td>18</td>
										<td>1</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOSeoul</td>
										<td>eoseouldotio</td>
										<td>Korea</td>
										<td>2</td>
										<td>4</td>
										<td>1</td>
										<td>2</td>
										<td>2.25</td>
										<td>19</td>
										<td>7</td>
										<td>12</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Node One</td>
										<td>eosnodeonebp</td>
										<td>Korea</td>
										<td>2</td>
										<td>2</td>
										<td>2</td>
										<td>3</td>
										<td>2.25</td>
										<td>19</td>
										<td>11</td>
										<td>8</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Detroit</td>
										<td>eosiodetroit</td>
										<td>US</td>
										<td>3</td>
										<td>2</td>
										<td>3</td>
										<td>1</td>
										<td>2.25</td>
										<td>19</td>
										<td>43</td>
										<td>-24</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOSBixin</td>
										<td>eosbixinboot</td>
										<td>China</td>
										<td>1</td>
										<td>4</td>
										<td>1</td>
										<td>2</td>
										<td>2.00</td>
										<td>23</td>
										<td>32</td>
										<td>-9</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>eosBlockSmith</td>
										<td>blocksmithio</td>
										<td>US</td>
										<td>1</td>
										<td>4</td>
										<td>2</td>
										<td>1</td>
										<td>2.00</td>
										<td>23</td>
										<td>36</td>
										<td>-13</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOS Shenzhen</td>
										<td>eoshenzhenio</td>
										<td>China</td>
										<td>1</td>
										<td>4</td>
										<td>1</td>
										<td>1</td>
										<td>1.75</td>
										<td>25</td>
										<td>59</td>
										<td>-34</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>eosMeso</td>
										<td>eosmesodotio</td>
										<td>Guatemala</td>
										<td>1</td>
										<td>2</td>
										<td>2</td>
										<td>2</td>
										<td>1.75</td>
										<td>25</td>
										<td>87</td>
										<td>-62</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOSNairobi</td>
										<td>eosnairobike</td>
										<td>Africa</td>
										<td>4</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1.75</td>
										<td>25</td>
										<td>65</td>
										<td>-40</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>EOSIO.SG</td>
										<td>eosiosg11111</td>
										<td>Singapore</td>
										<td>1</td>
										<td>4</td>
										<td>1</td>
										<td>1</td>
										<td>1.75</td>
										<td>25</td>
										<td>99</td>
										<td>-74</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>eosRio</td>
										<td>eosriobrazil</td>
										<td>Brazil</td>
										<td>1</td>
										<td>4</td>
										<td>1</td>
										<td>1</td>
										<td>1.75</td>
										<td>25</td>
										<td>23</td>
										<td>2</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>BitSpace</td>
										<td>bitspacenode</td>
										<td>Europe</td>
										<td>3</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1.50</td>
										<td>30</td>
										<td>50</td>
										<td>-20</td>
									</tr>
									<tr style="border-bottom: 1px solid #eee;">
										<td>TOTAL</td>
										<td>30</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>150</td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="section" style="margin-top: 60px; height: 600px;">
						<div class="section-title"><b>Voting Guide</b></div>
						<div class="section-content">We also know that there are a lot of good BPs who have contributed a lot but may not be included in this list. We feel obliged to list some of them here, and will contact them to give a more comprehensive review as soon as possible:<br/><br/>eos.store (eosstorebest); eosDAC (eosdacserver); Blockgenic (blockgenicbp); huobipool (eoshuobipool); Bitfinex (bitfinexeos1); EOS Authority (eosauthority); EOSphere (eosphereiobp); Cypherglass (cypherglasss); LiquidEOS (eosliquideos); Tokenika (tokenika4eos); EOS Amsterdam (eosamsterdam); EOS Beijing (eosbeijingbp); EOS Wenzhou (eoswenzhoubp); EOS Galaxy (eosgalaxybp1); (eosflytomars); EOS Union (eosunion1111); JEDA (jedaaaaaaaaa); Greymass (teamgreymass); MEET.ONE (eosiomeetone); OracleChain (oraclegogogo); EOS Silicon Valley (eossv12eossv); EOS ONO (eosonoeosono)<br/><br/>Our member, MAO of EOSREAL, has over 20 years financial modeling, securities quant and fundamental analysis experience. The Quantamental analysis technology he built got recognized by global most prestigious financial institutes and blockchain communities. It usually takes around a few hundred hours to understand a business or a token by not only reading their filings, but also talking to the team, joining into the community, using their products and services, reading their codes, seeing their customers and suppliers and looking for data to understand their fundamentals. EOSREAL team has members who worked for Deloitte and KPMG as public accountant and are going to publish more neutral analysis on BPCs as well as other voting related matters.<br/><br/>Our independency can be proved by what we have been doing and current very low votes received (0.1% votes at this moment) as all of our members believe to bring more value to EOS community by working than campaigning.</div>
					</div>
				</div>
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
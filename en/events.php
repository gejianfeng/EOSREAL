<?php
/*
Template Name: events.php
 */
?>

<?php get_header(); ?>

<div id="event">
	<div class="wrap">
		<div id="date-frame">
			<div class="day-of-week">Thursday</div>
			<div class="day">12</div>
			<div class="date">April 2018</div>
			<div class="time">7:00PM</div>
		</div>
		<div id="event-content">
			<div class="title">EOS Blockchain &amp; Beers #2： Ainsworth in Chelsea</div>
			<div class="icon"></div>
			<div class="author">Hosted by Lilian, and 3 others</div>
			<div class="image"></div>
			<div class="content">
				<div style="font-size: 18px;">Details</div>
				<div style="margin-top: 18px; line-height:2;">&bull;What we'll do<br/>Join us for a casual meetup at the Ainsworth in Chelesa hosted by fellow EOS New Yorkers, Scott Minter, and Marc Abi-Samra! We will have a space reserved for everyone to meet and discuss all things EOS over some casual drinks</div>
				<div style="margin-top: 25px; line-height:2;">&bull;What to bring<br/>Your go-get-em attitude and award-winning smiles</div>
				<div style="margin-top: 25px; line-height:2;">&bull;Important to know<br/>Ask the Hostess for EOS New York when you arrive <br/>al drinks</div>
			</div>
			<div id="location-frame">
				<div class="time-icon"></div>
				<div class="main-info" style="top: 25px;">Thursday, April 12, 2018</div>
				<div class="main-info" style="top: 50px;">7:00 PM to 9:00 PM</div>
				<div class="location-icon"></div>
				<div class="main-info" style="top: 83px;">The Anisworth (Chelsea)</div>
				<div class="sub-info">122W 26TH SH . New York,NY</div>
			</div>
			<div class="register-text">Registrate Now!</div>
			<div class="register-button">YES</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$('.register-button').click(function() {
		window.location.href='https://www.eventbrite.com/o/eosreal-17208878778';
	});
});
</script>

<?php get_footer(); ?>
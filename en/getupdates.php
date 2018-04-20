<?php
/*
Template Name: getupdates.php
 */
?>

<?php get_header(); ?>

<div id="getupdates">
	<div class="background">
		<div class="wrap">
			<div class="frame">
				<div class="frame-title main" style="top: 40px; left: 30px;">Subscribe</div>

				<div class="field-title main" style="top: 130px; left: 30px;">Name</div>
				<input id="fname" class="input-box" type="text" style="left: 30px; top: 170px; position:absolute; width: 292px; height: 44px"/>
				<input id="lname" class="input-box" type="text" style="left: 335px; top: 170px; position:absolute; width: 292px; height: 44px"/>

				<div class="field-title sub" style="top: 220px; left: 30px;">First Name</div>
				<div class="field-title sub" style="top: 220px; left: 335px;">Last Name</div>

				<div class="field-title main" style="top: 250px; left: 30px;">Email Address</div>
				<input id="mail" class="input-box" type="text" style="left: 30px; top: 290px; position:absolute; width: 594px; height: 44px"/>

				<div class="button">SUBMIT</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
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

<?php
	$home_url = home_url();
	$subscribe_url = $home_url . "/?na=s";
	
	echo '<form method="post" onsubmit="return ValidSubmit();" action="' . $subscribe_url . '">';
?>

				<div class="frame-title main" style="top: 40px; left: 30px;">Subscribe</div>

				<div class="field-title main" style="top: 130px; left: 30px;">Name</div>
				<input id="name" name="nn" class="input-box" type="text" style="left: 30px; top: 170px; position:absolute; width: 594px; height: 44px"/>
				<div id="name-check" class="field-title check" style="top: 220px; left: 30px;">Name is not filled.</div>

				<div class="field-title main" style="top: 250px; left: 30px;">Email Address</div>
				<input id="mail" name="ne" class="input-box" type="text" style="left: 30px; top: 290px; position:absolute; width: 594px; height: 44px"/>
				<div id="mail-check" class="field-title check" style="top: 345px; left: 30px;">Email is not filled.</div>

				<input id="submit" name="submit" class="subscribe-submit" type="submit" value="SUBMIT">

				<input type="hidden" name="nr" value="widget">
				<input type="hidden" name="nl[]" value="0">

<?php
	echo '</form>';
?>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

function ValidSubmit()
{
	var ret = true;

	if ($("#name").val() == "")
	{
		$("#name-check").show();
		ret = false;
	}

	if ($("#mail").val() == "")
	{
		$("#mail-check").show();
		ret = false;
	}
	return ret;
}

</script>

<?php get_footer(); ?>
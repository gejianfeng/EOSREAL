<?php
/*
Template Name: resources.php
 */
?>

<?php get_header(); ?>

<div id="resources">
	<div class="wrap">
		<div class="container">
			<div class="title">blog</div>
			<div class="list-container">

<?php
	$news_query = new WP_Query('category_name=news');

	$count = 0;

	if ($news_query->have_posts()):
		while($news_query->have_posts()):
			$news_query->the_post();
			$title_value = $post->post_title;

			$margin_top_val = $count * 102;

			echo '<div class="block" style="margin-top:' . $margin_top_val . 'px;">';
			echo '<div class="news-title">' . $title_value . '</div>';
			
			/* start date container */
			echo '<div class="news-date-container">';
			echo '<div class="news-line"></div>';
			echo '<div class="news-date">';
			echo date('M', get_the_time('U'));
			the_time(' jS Y');
			echo '</div>';
			echo '</div>';
			/* end date container */

			/* start content container */
			echo '<div class="news-content-container">';
			echo '<div class="news-content">';
			the_content('Learn more');
			echo '</div>';
			echo '</div>';
			/* end content container */
			
			echo '</div>';

			$count++;
		endwhile;
	endif;

	wp_reset_query();
?>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
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
	$home_url = home_url();

	$news_query = new WP_Query('category_name=news');

	$count = 0;

	if ($news_query->have_posts()):
		while($news_query->have_posts()):
			$news_query->the_post();
			$title_value = $post->post_title;

			$margin_top_val = $count * 102;

			$article_link = $home_url . "/index.php/news?id=" . $post->ID;
			echo '<div class="block" style="margin-top:' . $margin_top_val . 'px;">';
			echo '<div class="news-title"><a href="' . $article_link . '">' . $title_value . '</a></div>';
			
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
			the_content('<a href="' . $article_link . '">Learn more</a>', false);
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
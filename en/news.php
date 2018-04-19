<?php
/*
Template Name: news.php
 */
?>

<?php get_header(); ?>

<?php 
	$article_id = $_GET['id'];
	$bFound = false;

	$news_query = new WP_Query('category_name=news');

	if ($news_query->have_posts()):
		while($news_query->have_posts()):
			$news_query->the_post();
			if ($article_id == $post->ID)
			{
				$bFound = true;
				
				$news_query->the_post();
				echo $post->post_title;

				break;
			}
		endwhile;
	endif;

	wp_reset_query();
?>

<?php get_footer(); ?>
<?php
/*
Template Name: news.php
 */
?>

<?php get_header(); ?>

<?php
	$home_url = home_url();
	$comment_url = $home_url . "/wp/wp-comments-post.php";

	$article_id = $_GET['id'];
	$bFound = false;

	$news_query = new WP_Query('category_name=news');

	if ($news_query->have_posts()):
		while($news_query->have_posts()):
			$news_query->the_post();
			if ($article_id == $post->ID)
			{
				$bFound = true;
				
				/* page body with article*/
				echo '<div id="news">';
				echo '<div class="wrap">';
				echo '<div class="container">';
				echo '<div class="article-title">' . $post->post_title . '</div>';
				echo '<div class="article-date">';
				echo date('M', get_the_time('U'));
				the_time(' jS Y');
				echo '</div>';
				echo '<div class="article-content">';
				echo $post->post_content;
				echo '</div>';
				
				echo '<div class="article-comment">';
				echo '<div class="comment-form-title">Comment(' . get_comments_number($post->ID) . ')</div>';
				echo '<form class="comment-form" action="' . $comment_url . '" method="post" id="commentform" novalidate>';
				echo '<textarea class="comment-box"></textarea>';
				echo '</form>';
				echo '</div>';
				
				echo '</div>';
				echo '</div>';
				echo '</div>';

				break;
			}
		endwhile;
	endif;

	if ($bFound == false)
	{
		/* page body for no article */
		echo '<div id="tbc">';
		echo '<div class="inner-wrap">';
		echo '<div class="content">Article Not Found</div>';
		echo '</div>';
		echo '</div>';
	}

	wp_reset_query();
?>

<?php get_footer(); ?>
<?php
/*
 Template Name: News Post Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="pageContent">

	<div class="gridWrap">
	<!-- Article Content Goes Here -->

		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); $url = $thumb['0']; ?>
		<div class="featureImageWrap" style="background-image:url(<?=$url?>);">
			
		</div>

		<div class="newsContent">

		<h1 class="page-title"><?php the_title(); ?></h1>

		<section class="entry-content cf" itemprop="articleBody">
			
				<?php the_content(); ?>
			
		</section>

		</div>	

		<?php endwhile; else : ?>

		<article id="post-not-found" class="hentry cf">
			<header class="article-header">
				<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			</header>
			<section class="entry-content">
				<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			</section>
			<footer class="article-footer">
				<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
			</footer>
		</article>

		<?php endif; ?>




	</div>

</section>




<div style="clear: both;"></div>


<?php get_footer(); ?>

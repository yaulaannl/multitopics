<?php
/**
 * The template for displaying all single posts.
 *
 * @package Multitopics
 */
get_header(); ?>

<!-- BLOG CONTENT
================================================== -->
<div class="container blog-container">
	<div class="row" id="primary">

		<main id="content" class="col-sm-10 col-sm-offset-1">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

					
				<?php /* the_post_navigation(); */ ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->
</div><!-- container --> 

<?php get_footer(); ?>

<?php
/**
 * Category file
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Multitopics
 */


$cat_id = get_cat_id(single_cat_title("",false));
//Need plugin: Advanced Custom Fields
$topic_header_image   = get_field('topic_header_image','category_'.$cat_id);
$header_text   = get_field('header_text','category_'.$cat_id);

get_header(); ?>

	<section class="header-image parallax-bg" data-type="background" data-speed="2"
		style="<?php echo $topic_header_image ?>"	

	>
		<div class="header-text">
		<h1 class="page-title"><?php echo $header_text; ?> </h1>
		</div>
        </section>


	<!-- BLOG CONTENT
        ================================================== -->
        <div class="container blog-container">
		<div class="row" id="primary">
			<main id="content" class="col-sm-10 col-sm-offset-1" role="main">
				<?php if ( have_posts() ) : ?>

					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						
						<?php   
							
							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>	

			</main><!-- #main -->
			

		</div><!-- #primary -->
	</div> <!-- container -->


<!-- MODAL for post
================================================== -->
<div class="modal fade" id="postModal">
        <div class="modal-dialog modal-lg">
                <div class="modal-content">
		</div> <!-- modal content -->
	</div> <!-- modal dialog -->
</div>	


	<?php get_footer(); ?>

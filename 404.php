<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Multitopics
 */

get_header(); ?>

<section id="error-404">
	<div class="container">

                <div class="row">

                        <main class="col-sm-8 col-sm-offset-2">

                                <div class="error-404 not-found">
					<h1>

				<?php if(get_locale() == 'zh_TW') : ?>
					尋文啓示:
				<?php else : ?>	
					Have You Seen Me?
				<?php endif; ?>

						
					</h1>
                                        <div class="error-404-img-window">
						<img class="error-404-img"  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/not_found.png" alt="404 not found">
					</div><!-- .page-content -->
					<h1>
				<?php if(get_locale() == 'zh_TW') : ?>
					不好意思, 此文不見了.
				<?php else : ?>	
					Sorry, Page Not Found.
				<?php endif; ?>

					</h1>

                                </div><!-- .error-404 -->

                        </main><!-- #content -->

                </div><!-- #primary -->

        </div><!-- .container -->
	
</section>

<?php get_footer(); ?>

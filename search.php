<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Multitopics
 */


get_header(); 

//for locale
if(get_locale() == 'zh_TW'){
  $my_search_txt =  '%s 的搜尋結果:';
}else{
  $my_search_txt =  'Search Results for: %s:';
}

?>
<section class="header-image parallax-bg section-bg" data-type="background" data-speed="2" style="<?php echo $topic_header_image ?>">
	<div class="header-text">
		<h1 class="page-title"> 
			<?php printf( $my_search_txt, '<span>' . get_search_query() . '</span>' ); ?> 
		</h1>
	</div>
</section>

<!-- BLOG CONTENT   ================================================== -->
<div class="container blog-container">
  <div class="row" id="primary">
	<main id="content" class="col-sm-10 col-sm-offset-1" role="main">
		<?php if ( have_posts() ) : ?>  
		  <?php while ( have_posts() ) : the_post(); ?>
		    <?php if( $post->post_type=='page' ) continue; /*ignore page */ ?>	
                    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		  <?php endwhile; ?>
                  <?php the_posts_navigation(); ?>
		<?php else : ?>                                                                                                           <?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</main><!-- #main --> 

  </div><!-- #primary -->
</div> <!-- container -->

<?php get_footer(); ?>

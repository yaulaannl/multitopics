<?php                                                                                                                                                        //Advanced Custom Fields. Required: Advanced Custom Fields Plugin
$latest_bg_style   = get_field('latest_bg_style');
$latest_posts_section_title = get_field('latest_posts_section_title');
?>
<section id="new-posts-head" class="topic-image parallax-bg" data-type="background" data-speed="2"                                                                                             style="<?php echo $latest_bg_style ?>"

  >
  <div class="topic-text">
        <h1><?php echo $latest_posts_section_title; ?></h1>
  </div> <!-- project-head -->
</section>



<section id="new-posts">
	<div class="container">
		<!-- only show this section if there is at least one post -->
		<?php $loop = new WP_Query( array( 'post_type' => 'post', 'orderby' => 'post_id', 'order' => 'DSC' ) ); ?>
		<?php if ( $loop->have_posts() ) : ?>

			<?php $count = 0 ?>
			<?php while ( $loop->have_posts() && $count < 3  ) : $loop->the_post(); ?>
				<div class="row newpost-list">
					<a href="<?php echo esc_url(get_permalink()); ?>"	
						<span class="link-spanner"></span>
					</a>
					<h3>
					<div class="col-sm-3">
						<!-- category  -->
						<?php
							$cats= get_the_category();
							echo $cats[0] ->cat_name; 
						?>
					</div>
					<div class="col-sm-3">
						<?php echo get_the_date(); ?>	
						
					</div>	
					<div class="col-sm-6">
	
						<?php /*the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); */ ?>
						<?php the_title(); ?>						
					</div><!-- column 4--> 
					</h3>
				</div> <!-- row -->

			<?php  $count = $count + 1; ?>  
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>

			
		<?php endif; ?>	

        </div><!-- container -->

</section>

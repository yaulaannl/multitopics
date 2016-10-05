<main id="content" class="col-sm-10 col-sm-offset-1 modal-post-content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		<header class="entry-header">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

			<?php /* post details */  ?>
			<?php if ( 'post' === get_post_type() ) : ?>                                                                                                                         <div class="post-details">
					<i class="fa fa-user"></i> <?php the_author(); ?>
					<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>

					<i class="fa fa-folder"></i> <?php the_category(', ') ?>
					<i class="fa fa-tags"></i> <?php the_tags(); ?>
					
					<?php /*
					<div class="post-comments-badge">
						<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( 0, 1, '%'); ?></a>
					</div><!-- post-comments-badge -->
					*/ ?>					

					<?php edit_post_link( 'Edit', '<div><i class="fa fa-pencil"></i> ', '</div>'  ); ?>
				</div><!-- post-details -->

			<?php endif; ?>

		</header><!-- .entry-header -->

		<?php if ( has_post_thumbnail() ) { // check for feature image ?>
		<div class="post-image single-post-img-window">
			<?php the_post_thumbnail(); ?>
			<a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );  ?>"  > <!-- link -->
                                <span class="link-spanner"></span>                                                                                                                   </a>	
		</div><!-- post-image -->
		<?php } ?>

		<div class="post-body">
			<?php the_content(); ?>
		</div><!-- post-body -->			


		<?php /* the_post_navigation(); */?>
		<?php /*
		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
		*/ ?>		

	<?php endwhile; else:  // End of the loop. ?>
        <?php endif; ?>

</main><!-- #main -->


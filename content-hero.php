<?php
//Advanced Custom Fields. Required: Advanced Custom Fields Plugin
$hero_section_title = get_field('hero_section_title');
$hero_section_text = get_field('hero_section_text');
?>

<!-- HERO
================================================== -->
<section id="hero">
		<div id="video-wrap container" class="video-wrap">
            		<!-- <video preload="metadata" autoplay loop id="my-video"> -->
			<!--
			<video preload="metadata" autoplay loop id="my-video">
                		<source src="<?php bloginfo('stylesheet_directory'); ?>/assets/video/lily.mp4">
            		</video>
			-->

			<div class="hero-content-overlay">
				<div class="row">
					<div class="hero-head col-sm-6 col-sm-offset-3">
						<h1><?php echo $hero_section_title; ?></h1>
						<p><?php echo $hero_section_text; ?></p>
					</div>
					

                		</div><!-- row -->
        		</div><!-- container -->

			</div>
		</div><!-- video-wrap --> 
</section><!-- hero -->





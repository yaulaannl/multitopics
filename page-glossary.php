<?php
/*
        Template Name: My Glossary Page                                                          

                                       */

//Need plugin: Advanced Custom Fields
$topic_header_image   = get_field('topic_header_image');
$header_text   = get_field('header_text');

get_header(); ?>


<section class="header-image parallax-bg" data-type="background" data-speed="2"
                style="<?php echo $topic_header_image ?>"                                                                       
        >                                                                                                                                       <div class="header-text">
                <h1 class="page-title"><?php echo $header_text; ?> </h1>
                </div>
</section>

<section id="my-glossary">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<?php /*Doing short code*/ ?>
			<?php echo do_shortcode('[glossary_atoz /]'); ?>			
		</div>
	</div>

</section> <!-- my glossary -->

<?php get_footer(); ?>

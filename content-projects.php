<?php
//Advanced Custom Fields. Required: Advanced Custom Fields Plugin
$topics_bg_style   = get_field('topics_bg_style');

$topics_section_title = get_field('topics_section_title');

$topic_iot_title = get_field('topic_iot_title');
$topic_iot_text = get_field('topic_iot_text');

$topic_cycling_title = get_field('topic_cycling_title');
$topic_cycling_text = get_field('topic_cycling_text');

$topic_web_title = get_field('topic_web_title');
$topic_web_text = get_field('topic_web_text');

$topic_beer_life_title = get_field('topic_beer_life_title');
$topic_beer_life_text = get_field('topic_beer_life_text');
?>
<section id="topics" class="topic-image parallax-bg" data-type="background" data-speed="2"
                style="<?php echo $topics_bg_style ?>"     

  >
  <div class="topic-text">
  	<h1><?php echo $topics_section_title; ?></h1>
  </div> <!-- project-head -->
</section>

<section id="project">
  <div class="container">
	<div class="project-body">
		<div class="row">
			<div class="col-sm-6">
				<div class="project-block">

					<!-- link block to corresponding pages -->		
					<a href="/index.php?cat=5">
						<span class="link-spanner"></span>
					</a>

					<div class="block-img-window">
						<img class="block-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/home_topic_iot.png" alt="Project">
					</div>
					<h3><?php echo $topic_iot_title; ?></h3>
					<p><?php echo $topic_iot_text; ?></p>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="project-block">
					<!-- link block to corresponding pages -->		
					<a href="/index.php?cat=6">
						<span class="link-spanner"></span>
					</a>

					<div class="block-img-window">
						<img class="block-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/home_topic_cycling.png" alt="Project">
					</div>
					<h3><?php echo $topic_cycling_title; ?></h3>
					<p><?php echo $topic_cycling_text; ?></p>
				</div>
			</div>
		</div> <!-- row 1 -->

		<div class="row">
			<div class="col-sm-6">
				<div class="project-block">

					<!-- link block to corresponding pages -->		
					<a href="/index.php?cat=8">
						<span class="link-spanner"></span>
					</a>

					<div class="block-img-window">
						<img class="block-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/home_topic_web.png" alt="Project">
					</div>
					<h3><?php echo $topic_web_title; ?></h3>
					<p><?php echo $topic_web_text; ?></p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="project-block">

					<!-- link block to corresponding pages -->		
					<a href="/index.php?cat=7">
						<span class="link-spanner"></span>
					</a>

					<div class="block-img-window">
						<img class="block-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/home_topic_beer.png" alt="Project">
					</div>
					<h3><?php echo $topic_beer_life_title; ?></h3>
					<p><?php echo $topic_beer_life_text; ?></p>
				</div>
			</div>
		</div> <!-- row 1 -->
	</div> <!-- project-body -->
  </div><!-- container -->
</section>









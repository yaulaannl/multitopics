<?php
/**
 * @package Pharmacate                                                                                                   */
$my_post_url = get_permalink();
$my_post_title = urlencode($post->post_title); //title set to url friendly
$fb_share_url = 'http://www.facebook.com/sharer.php?u=' . $my_post_url;
$gl_share_url = 'https://plus.google.com/share?url=' . $my_post_url;
$ln_share_url = 'http://www.linkedin.com/shareArticle?mini=true&url=' . $my_post_url;
$tr_share_url = 'https://twitter.com/share?url=' . $my_post_url . '&text=' . $my_post_title; 

?>

<!-- social sharing icons -->
<div class="my-social-share-wrap">

  <a class="fa-stack fa-lg social-icons" href="<?php echo $fb_share_url; ?>" target="_blank" >
	<i class="fa fa-circle fa-stack-2x iconbg-fb"></i>
	<i class="fa fa-facebook fa-stack-1x"></i>
	<span class="social-counter fb-counter">
		<?php echo my_get_shares($post->ID); ?>
	</span>
  </a>

  <a class="fa-stack fa-lg social-icons" href="<?php echo $gl_share_url; ?>" target="_blank" >
	<i class="fa fa-circle fa-stack-2x iconbg-gl"></i>
	<i class="fa fa-google-plus fa-stack-1x"></i>
  </a>

  <a class="fa-stack fa-lg social-icons" href="<?php echo $ln_share_url; ?>" target="_blank" >
	<i class="fa fa-circle fa-stack-2x iconbg-ln"></i>
	<i class="fa fa-linkedin fa-stack-1x"></i>
  </a>

  <a class="fa-stack fa-lg social-icons" href="<?php echo $tr_share_url; ?>" target="_blank" >
	<i class="fa fa-circle fa-stack-2x iconbg-tr"></i>
	<i class="fa fa-twitter fa-stack-1x"></i>
  </a>

</div> <!-- my-social-share-wrap -->



<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Multitopics
 */

?>


<?php wp_footer(); ?>


<!-- SIGN UP SECTION
================================================== -->
<section id="signup" data-type="background" data-speed="6" class="section-bg" 
	style="
	background: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('/wp-content/themes/multitopics/assets/img/wp_footer.jpg');
	background-repeat: repeat;
        background-position: center 0px;
	background-size: cover;
	"
>
        <div class="container">
                <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
				<button class="btn btn-success btn-lg btn-block btn-footer" data-toggle="modal" data-target="#myModal">

				<?php if(get_locale() == 'zh_TW') : ?>
					訂閱我的電子報
				<?php else : ?>	
                                        Subscribe My Newsletter
				<?php endif; ?>


                                </button>
                        </div><!-- end col -->
                </div><!-- row -->
        </div><!-- container -->
</section><!-- signup -->


<!-- FOOTER
================================================== -->
<footer>
        <div class="container">
                <div class="col-sm-3">
			<a href="https://github.com/yaulaannl" class="fa fa-lg fa-github"></a>
			<a href="https://www.facebook.com/modernblackhand/" class="fa fa-lg fa-facebook"></a>
                </div><!-- end col -->
                <div class="col-sm-6">
                        <?php
                                wp_nav_menu( array(

                                        'theme_location'        => 'footer',
                                        'container'                     => 'nav',
                                        'menu_class'            => 'list-unstyled list-inline'

                                ) );
                        ?>
                </div><!-- end col -->
                <div class="col-sm-3">
                        <p class="pull-right"> &copy; <?php echo date('Y'); ?>  <?php bloginfo('name'); ?></p>
                </div><!-- end col -->
        </div><!-- container -->
</footer>


<!-- modal: search
================================================== -->
<div class="modal fade modal-footer" id="mySearch">
  <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-sm">
                <div class="modal-content">
			<?php get_search_form(); ?>	
                </div><!-- modal-content -->
        </div><!-- modal-dialog -->
  </div>
</div><!-- modal -->


<!-- modal: subscribe
================================================== -->
<div class="modal fade modal-footer" id="myModal">
        <div class="modal-dialog modal-sm">
                <div class="modal-content">

                        <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">
				<?php if(get_locale() == 'zh_TW') : ?>
					只需輸入您的姓名和電子郵件就可接收我們的最新文章：	
				<?php else : ?>	
					Simply enter your name and email to receive our latest posts:
				<?php endif; ?>
				</h4>
                        </div><!-- modal-header -->

                        <div class="modal-body">

				<!--==================== Form Location ========================= -->
				<?php echo do_shortcode('[mc4wp_form id="33"]'); ?>
				<!--==================== Form Location ========================= -->

                        </div><!-- modal-body -->

                                <hr>

                                <p class="modal-disclaim">
				<?php if(get_locale() == 'zh_TW') : ?>
				通過提供您的電子郵件，你同意接受不定期的推薦郵件和電子報。我們沒有垃圾郵件。只有好東西。我們尊重您的隱私權, 你可以隨時取消訂閱。	
				<?php else : ?>	
By providing your email you consent to receiving occasional promotional emails &amp; newsletters. No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.
				<?php endif; ?>
				</p>

                </div><!-- modal-content -->
        </div><!-- modal-dialog -->
</div><!-- modal -->

<!-- MODAL for post                                                                                                                                          ================================================== -->                                                                                                       <div class="modal fade" id="postModal">                                                                                                                              <div class="modal-dialog modal-lg">                                                                                                                                  <div class="modal-content">                                                                                                                                  </div> <!-- modal content -->                                                                                                                        </div> <!-- modal dialog -->                                                                                                                         </div>





<!-- BOOTSTRAP CORE JAVASCRIPT
         Placed at the end of the document so the pages
         load faster!
================================================== -->


<!-- jQuery library -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- main javascript theme file -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>




</body>
</html>

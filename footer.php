<!-- Footer -->
	<section id="footer" class="peopletop">
		<div class="container">
			<div class="row text-left text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 desktoppadding">
					<?php dynamic_sidebar( 'footer_1' ); ?>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<?php dynamic_sidebar( 'footer_2' ); ?>
					<button data-toggle="modal" data-target="#squarespaceModal" class="buttonwhite">Sign up Now</button>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
				<h5>Navigation</h5>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1', 'container_class' => 'col-xs-12 col-sm-6 col-md-6 nopadding', 'menu_class' => 'list-unstyled quick-links' ) ); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2', 'container_class' => 'col-xs-12 col-sm-6 col-md-6 nopadding', 'menu_class' => 'list-unstyled quick-links' ) ); ?>
				</div>
			</div>
			<br><br/>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
				<ul class="list-unstyled list-inline social">
						<li class="list-inline-item"><a href="https://www.facebook.com/1Akvo"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/akvo/staff"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://github.com/akvo"><i class="fa fa-github"></i></a></li>
						<li class="list-inline-item"><a href="http://www.youtube.com/user/Akvofoundation"><i class="fa fa-youtube"></i></a></li>
						<li class="list-inline-item"><a href="mailto:info@akvo.org" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
					<p class="text-center"><?php dynamic_sidebar( 'footer_creative_commons_text' ); ?></p>
					<br/><a href="#">Privacy Policy</a>  |  <a href="#">Sitemap</a>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->

	<!-- End /footer -->
	
	<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<?php dynamic_sidebar( 'newsletter_modal' ); ?>
  </div>
</div>

<!-- apply modal -->
<div class="modal fade" id="squarespaceModalApply" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
		<?php dynamic_sidebar( 'apply_modal' ); ?>
  </div>
</div>
<!-- end apply modal -->

<!-- video modal -->
<div class="modal fade" id="squarespaceModalVideo" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<?php dynamic_sidebar( 'video_modal' ); ?>
	</div>
  </div>
</div>
<!-- end video modal -->


</div>
<!-- end mainbody -->
<?php wp_footer(); ?>

</body></html>
<!-- TO BE INCLUDED IN THE STYLES -->
<style>
	body.single-microstory iframe{
		margin-left: auto;
		margin-right: auto;
		display: block;
	}
	a.buttonblack{
		font-size: 20px!important;
	}
	
	
	/*.statistics .col.stat */
</style>
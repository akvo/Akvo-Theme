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
	/* MICROSTORY */
	body.single-microstory .so-widget-sow-editor, 
	body.single-microstory .narrow-row{
		max-width: 1000px;
		margin-left: auto;
		margin-right: auto;
		padding: 50px 20px;
		box-sizing: border-box;
	}
	
	body.single-microstory iframe{
		margin-left: auto;
		margin-right: auto;
		display: block;
	}
	
	
	/* LIST OF STAFF */
	.akvo-custom-posts.new_staffs li.post .imgWrapper img{
		width: 100%;
		height: auto;
		-webkit-filter: grayscale(100%);
		filter: grayscale(100%);
	}
	.akvo-custom-posts.new_staffs li.post:hover .imgWrapper img{
		-webkit-filter: none;
		filter: none;
	}
	.akvo-custom-posts.new_staffs li.post .fa{ padding: 10px; }
	
	/* OVERRIDE SOW */
	.so-widget-sow-editor h3.widget-title{
		color: #4E4A47;	
		font-size: 5rem;
		line-height: 1.4;
		margin: 20px 0;
	}
	.so-widget-sow-editor .siteorigin-widget-tinymce h4{
		color: #4E4A47 !important;	
		font-family: 'Roboto Condensed', sans-serif !important;
		font-weight: 300 !important;
		line-height: 30px;
		font-size: 24px;
		margin-top: 20px;
		margin-bottom: 10px;
	}
	
	a.buttonblack{
		font-size: 20px!important;
	}
	
	.massivetitle{
		font-size: 5rem !important;
	}
</style>
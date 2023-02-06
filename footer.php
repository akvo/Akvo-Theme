<!-- Footer -->
	<section id="footer" class="peopletop">
		<div class="container">
			<div id="prefooter" class="text-left text-xs-center text-sm-left text-md-left">
				<?php dynamic_sidebar( getWidgetLangID( 'prefooter', '-' ) ); ?>
			</div>
			<br><br/>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<ul class="list-unstyled list-inline social">
						<li class="list-inline-item"><a href="https://www.linkedin.com/company/akvo/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/akvo" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.facebook.com/1Akvo" target="_blank"><i class="fab fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="http://www.youtube.com/user/Akvofoundation" target="_blank"><i class="fab fa-youtube"></i></a></li>
						<li class="list-inline-item"><a href="https://github.com/akvo" target="_blank"><i class="fab fa-github"></i></a></li>
						<li class="list-inline-item"><a href="https://akvo.org/contact-us/" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
					<p class="text-center"><?php dynamic_sidebar( getWidgetLangID( 'footer_creative_commons_text' ) ); ?></p>
				</div>
				</hr>
			</div>
		</div>
	</section>
	<!-- ./Footer -->

	<div class="modal fade" id="main-menu-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="btn btn-default btn-close" data-dismiss="modal">&times;</button>
					<?php
						wp_nav_menu( array(
							'theme_location' 		=> getWidgetLangID( 'header-menu', '-' ),
							'menu_id' 					=> 'menu-main',
							'menu_class' 				=> 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						) );
					?>
					<div class='space-two'>
						<?php do_action('icl_language_selector'); ?>
						<?php get_search_form();?>
					</div>
					<ul class="list-inline social">
						<li class="list-inline-item"><a href="https://www.linkedin.com/company/akvo/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/akvo" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.facebook.com/1Akvo" target="_blank"><i class="fab fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="http://www.youtube.com/user/Akvofoundation" target="_blank"><i class="fab fa-youtube"></i></a></li>
						<li class="list-inline-item"><a href="https://github.com/akvo" target="_blank"><i class="fab fa-github"></i></a></li>
						<li class="list-inline-item"><a href="https://akvo.org/contact-us/" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="search-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<form method="GET" action="<?php bloginfo('url');?>">
		        <input type="search" name="s" value="" autocomplete="off" placeholder="type keyword(s) here">
		        <button type="submit" class="btn btn-primary">Search</button>
			    </form>
				</div>
			</div>
		</div>
	</div>

	<!-- End /footer -->
<?php /*

<!-- line modal -->

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
*/?>

</div>
<!-- end mainbody -->
<?php wp_footer(); ?>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-NJXGk7R+8gWGBdutmr+/d6XDokLwQhF1U3VA7FhvBDlOq7cNdI69z7NQdnXxcF7k" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;700&family=Roboto+Condensed:wght@300;400;700&family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/1891949.js"></script>
<!-- End of HubSpot Embed Code -->

</body></html>
<!-- TO BE INCLUDED IN THE STYLES -->
<style>
	/* OVERRIDING HERO WIDGET */
	.sow-slider-base .sow-slider-pagination, .sow-slider-base .sow-slide-nav{ display: none !important; }
	.sow-slider-base .sow-slider-image-wrapper{ padding-left: 15px; padding-right: 15px; max-width: none !important; width: 1170px !important; bottom: 20px;}
	.sow-slider-base .sow-slider-image-wrapper .carousel-caption{ text-align: left; left: auto; right: auto; bottom: 8%; }
	body.single-microstory iframe{ margin-left: auto; margin-right: auto; display: block; }

	#navbar .hubspot-btn a[href]{
		border: #03AD8C solid 1px !important; font-size: 16px; background-color: #03AD8C !important; padding: 15px 25px;
		display: inline-block; text-decoration: none; line-height: 24px;
	}
	#navbar .hubspot-btn a[href] span{ color: #ffffff !important; }

	/* REMOVE THE DUPLICATE CSS FROM CUSTOMISE */
	p a{ color: #000; padding-bottom: 2px; border-bottom: 1px solid #e04d95!important; text-decoration: none!important; }
	#footer  ul.menu li{ margin-bottom: 10px;}
</style>

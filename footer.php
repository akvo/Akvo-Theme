<!-- Footer -->
	<section id="footer" class="peopletop">
		<div class="container">
			<div class="row text-left text-xs-center text-sm-left text-md-left">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-2 footer1">
					<?php dynamic_sidebar( 'footer_1' ); ?>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-2 footer2">
					<?php dynamic_sidebar( 'footer_2' ); ?>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-2 footer3">
					<?php dynamic_sidebar( 'footer_3' ); ?>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-2 footer4">
					<?php dynamic_sidebar( 'footer_4' ); ?>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-2 footer5">
					<?php dynamic_sidebar( 'footer_5' ); ?>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-2 footer6">
					<?php dynamic_sidebar( 'footer_6' ); ?>
				</div>
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
					<p class="text-center"><?php dynamic_sidebar( 'footer_creative_commons_text' ); ?></p>
				</div>
				</hr>
			</div>
		</div>
	</section>
	<!-- ./Footer -->

	<!-- End /footer -->
<?php /*
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
*/?>

</div>
<!-- end mainbody -->
<?php wp_footer(); ?>

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

	#footer ul.menu{ padding-left: 0; }
</style>

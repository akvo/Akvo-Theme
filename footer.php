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
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Sign up for Our Newsletter</h3>
		</div>
		<div class="modal-body">
			
            <!-- content goes here -->
			<form action="#" class="newsletterform">
						<div class="input-group">
							<input class="signup name left modalinput" name="Fname" id="Fname" type="text" placeholder="First Name" required>
							<input class="signup name right modalinput" name="Lname" id="Lname" type="text" placeholder="Last Name" required>
							<input class="signup email modalinput" name="email" id="email" type="email" placeholder="Your Email" required>
							<select class="articlesdropdown selectpicker" data-style="btn-primary">
      <option>Role</option>
      <option>Manager</option>
      <option>Director</option>
  </select>
					<div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">GDPR Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget congue justo, eu elementum ex. Nam dictum diam at leo sollicitudin imperdiet. Donec volutpat, quam a bibendum tristique, diam dolor lobortis dolor, a fermentum felis turpis a felis. Nam eget risus id quam dignissim porta eget et nisi. </label>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck2">
    <label class="form-check-label" for="exampleCheck2">Other Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget congue justo, eu elementum ex. Nam dictum diam at leo sollicitudin imperdiet. Donec volutpat, quam a bibendum tristique, diam dolor lobortis dolor, a fermentum felis turpis a felis. Nam eget risus id quam dignissim porta eget et nisi. </label>
  </div>
							<button class="button" type="submit">Sign Up</button>
						</div>
			</form>

		</div>
	</div>
  </div>
</div>

<!-- apply modal -->
<div class="modal fade" id="squarespaceModalApply" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Apply to Work for Akvo</h3>
		</div>
		<div class="modal-body">
			
            <!-- content goes here -->
			<form action="#" class="newsletterform">
						<div class="input-group">
							<input class="signup name left modalinput" name="Fname" id="Fname" type="text" placeholder="First Name" required>
							<input class="signup name right modalinput" name="Lname" id="Lname" type="text" placeholder="Last Name" required>
							<input class="signup email modalinput" name="email" id="email" type="email" placeholder="Your Email" required>
							<select class="articlesdropdown selectpicker" data-style="btn-primary">
      <option selected disabled>Select Job to Apply for</option>
      <option>Copywriter - Europe</option>
      <option>C# Programmer - APAC</option>
      <option>Marketing Executive - West Africa</option>
  </select>
  <br/>
							<label class="form-check-label" for="letterupload">Upload your Covering Letter<input type="file" name="image" id="letterupload"  required /></label>
							<label class="form-check-label" for="cvupload">Upload your CV<input type="file" name="image" id="cvupload"  required /></label>
	<br/>						
					<div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">GDPR Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget congue justo, eu elementum ex. Nam dictum diam at leo sollicitudin imperdiet. Donec volutpat, quam a bibendum tristique, diam dolor lobortis dolor, a fermentum felis turpis a felis. Nam eget risus id quam dignissim porta eget et nisi. </label>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck2">
    <label class="form-check-label" for="exampleCheck2">Other Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget congue justo, eu elementum ex. Nam dictum diam at leo sollicitudin imperdiet. Donec volutpat, quam a bibendum tristique, diam dolor lobortis dolor, a fermentum felis turpis a felis. Nam eget risus id quam dignissim porta eget et nisi. </label>
  </div>
							<button class="button" type="submit">Send Your Application</button>
						</div>
			</form>

		</div>
	</div>
  </div>
</div>
<!-- end apply modal -->

<!-- video modal -->
<div class="modal fade" id="squarespaceModalVideo" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">Get to know us in two minutes</h3>
		</div>
		<div class="modal-body">
		<div class="video"><iframe src="https://www.youtube.com/embed/QVAF2l3JP3I?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe></div>
		</div>
	</div>
  </div>
</div>
<!-- end video modal -->


</div>
<!-- end mainbody -->
<?php wp_footer(); ?>

</body></html>
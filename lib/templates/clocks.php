<!-- World -->
<div class="fullwidth bg-light-gray  paddingtop paddingbottom">
	<div class="container counter">
		<h2 class="paddingbottom massivetitle"><?php _e( $atts['title'] );?></h2>
		<div class="row text-center">
			<?php echo do_shortcode("[akvo_clock id='clock_americas' offset='-5.0' title='Americas' hello='Hola' link='']");?>
			<?php echo do_shortcode("[akvo_clock id='clock_west_africa' offset='+0' title='West Africa' hello='Salut' link='']");?>
			<?php echo do_shortcode("[akvo_clock id='clock_europe' offset='+1' title='Europe' hello='Hello' link='']");?>
			<?php echo do_shortcode("[akvo_clock id='clock_east_africa' offset='+3' title='East Africa' hello='Jambo' link='']");?>
			<?php echo do_shortcode("[akvo_clock id='clock_south_asia' offset='+5.5' title='South Asia' hello='Namaste' link='']");?>
			<?php echo do_shortcode("[akvo_clock id='clock_apac' offset='+7' title='South East Asia & Pacific' hello='Apa kabar?' link='']");?>
		</div>
	</div>
</div>
<!-- End World -->

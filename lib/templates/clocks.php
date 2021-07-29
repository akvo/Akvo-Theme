<!-- World -->
<div class="fullwidth bg-light-gray  paddingtop paddingbottom">
	<div class="so-widget-sow-editor so-widget-sow-editor-base container counter centered">
		<h3 class="widget-title"><?php _e( $atts['title'] );?></h3>
		<div class="row text-center">
			<?php echo do_shortcode("[akvo_clock id='clock_americas' offset='-4.0' title='Americas' hello='Hola' link='https://akvo.org/americas/']");?>
			<?php echo do_shortcode("[akvo_clock id='clock_west_africa' offset='+0' title='West Africa' hello='Salut' link='https://akvo.org/west-africa/']");?>
			<?php echo do_shortcode("[akvo_clock id='clock_europe' offset='+1' title='Europe' hello='Hello' link='https://akvo.org/europe/']");?>
			<?php echo do_shortcode("[akvo_clock id='clock_east_africa' offset='+3' title='East Africa' hello='Jambo' link='https://akvo.org/east-africa/']");?>
			<?php echo do_shortcode("[akvo_clock id='clock_apac' offset='+8' title='Asia Pacific' hello='Apa kabar?' link='https://akvo.org/south-east-asia-pacific/']");?>
		</div>
	</div>
</div>
<!-- End World -->

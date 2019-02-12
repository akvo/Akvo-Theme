<?php get_header();?>
<div class="fullwidth homeslider paddingbottom">
	<?php get_template_part('partials/content', 'header'); ?></div>
	<div class="container paddingtop paddingbottom">
		<div class="container-fluid">
			<h2><?php esc_html_e( "Sorry, no posts matched your criteria." ); ?></h2>
			<p>&nbsp;</p><p>&nbsp;</p>
			<h4 class="thin"><?php esc_html_e( "Or isn't this what you were hoping for?" ); ?></h4>
			<p>&nbsp;</p>
			<h4 class="thin"><?php esc_html_e( "In that case something's gone wrong." ); ?></h4>
			<p>&nbsp;</p>
			<h4 class="thin"><?php esc_html_e( "You might want to try our home page, or the menu bar above." ); ?></h4>
			<p>&nbsp;</p><p>&nbsp;</p>
		</div>
	</div>
</div>
<?php get_footer();?>

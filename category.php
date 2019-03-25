<?php get_header();?>
<!-- Carousel -->
<div class="container fullwidth">
	<?php
		$bg_img_url = get_bloginfo('template_url')."/images/akvocover.jpg";
		echo do_shortcode("[akvo_header_image title='".single_cat_title( '', false )."' bg_image='".$bg_img_url."' bg_repeat='1']");
	?>
</div>
<!-- End Carousel -->
<!-- Posts -->
<div class="container paddingtop paddingbottom">
	<?php if ( have_posts() ) :  ?>
	<div class="row row-eq-height paddingbottom">
		<?php while ( have_posts() ) : the_post(); get_template_part('partials/article', 'col4'); endwhile;?>
	</div>
	<?php wp_reset_postdata(); endif; ?>
	<div class="row paddingbottom">
		<div class="pagenav">
			<div class="alignleft"><?php previous_posts_link('Newer Posts', $query->max_num_pages) ?></div>
			<div class="alignright"><?php next_posts_link('Older Posts', $query->max_num_pages) ?></div>
		</div>
	</div>
</div>
<?php get_footer();?>

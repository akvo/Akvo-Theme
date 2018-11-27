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
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-12 postpaddingbottom">
			<div class="col-lg-12 col-xs-12">
				<a href="<?php the_permalink(); ?>"><div class="featuredimage blogimagesmall" style="background:url(<?php the_post_thumbnail_url('full'); ?>);"></div></a>
				<div class="blog-colum">
					<div class="titledate">
						<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
						<ul class="blog-detail"> 
							<li><i class="fa fa-calendar"></i> <?php the_time('jS F, Y'); ?></li> 
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile;?>
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

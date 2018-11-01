<?php /* Template Name: Product Updates Page */ ?>
<?php get_header();?>
<div class="fullwidth homeslider paddingbottom"><?php get_template_part('partials/content', 'header'); ?></div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Title -->
<div class="container paddingtop paddingbottom aligncenter">
<h3 class="thin"><?php the_content(); ?></h3>
</div>
<!-- End Title -->
<?php endwhile;?>
<?php 
wp_reset_postdata();
endif; ?>
<!-- Updates -->
<div class="fullwidth paddingbottom">
<div class="container updates">
<?php $query = new WP_Query( 'post_type=product_update&order=DESC&orderby=date&posts_per_page=-1&offset=1' ); ?>
<?php if ( $query->have_posts() ) :?>			   
		   <div class="row paddingbottom">
		   <?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="updateholder">
				<div class="col-md-3 col-sm-12 date"><small><?php the_time( 'F jS, Y' ); ?></small></div>
				<div class="col-md-9 col-sm-12 update"><a href="<?php if (is_category('rsr')) { ?>http://www.akvo.org/rsr<?php } elseif (is_category('lumen')) { ?>http://www.akvo.org/lumen<?php } elseif (is_category('caddisfly')) { ?>http://www.akvo.org/caddisfly<?php } elseif (is_category('flow')) { ?>http://www.akvo.org/flow<?php } else { ?>#<?php } ?>"><span class="tag <?php if (is_category('rsr')) { ?>greenbg<?php } elseif (is_category('lumen')) { ?>redbg<?php } elseif (is_category('caddisfly')) { ?>bluebg<?php } elseif (is_category('flow')) { ?>pinkbg<?php } else { ?>notag<?php } ?>"><?php get_cat_name( $cat_id ) ?></span></a> <h3><?php the_title(); ?></h3><?php the_content(); ?></div>
				</div>

				<?php endwhile;?>
			</div>
<?php 
wp_reset_postdata();
endif; ?>
</div>
</div>
<!-- End Updates -->

<?php get_footer();?>

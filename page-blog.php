<?php /* Template Name: Blog Page */ ?>
<?php get_header();?>
<div class="container paddingbottom">
	<div class="container-fluid"><?php the_content();?></div>
</div>
<!-- Posts -->
<div class="container paddingbottom">
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
// are we on page one?

$query = new WP_Query( 'post_type=post&order=DESC&orderby=date&posts_per_page=12&paged='. $paged );
if ( 1 == $paged ) : if ( $query->have_posts() ) :	?>
	<div class="row row-eq-height paddingbottom">

	<?php
		// FIRST ARICLE
		$temp_query2 = $wp_query2;
		$query3 = new WP_Query( 'post_type=post&order=DESC&orderby=date&posts_per_page=1' );
		while ( $query3->have_posts() ){ $query3->the_post(); get_template_part('partials/article', 'col6'); }
	?>

	<?php
		// FIRST ADVERT
		$wp_query2 = $temp_query2;
		$temp_query = $wp_query;
		$query2 = new WP_Query( 'post_type=advert&order=DESC&orderby=date&posts_per_page=1' );
		while ( $query2->have_posts() ){ $query2->the_post(); get_template_part('partials/advert', 'col6'); }
	?>
	<?php $wp_query = $temp_query; ?>
  </div>
	
	<div class="row row-eq-height paddingbottom">
	<?php
		$wp_query3 = $temp_query3;
		$temp_query3 = $wp_query3;
		$query3 = new WP_Query( 'post_type=post&order=DESC&orderby=date&posts_per_page=12&offset=1' );
		while ( $query3->have_posts() ) : $query3->the_post(); get_template_part('partials/article', 'col4'); endwhile; rewind_posts();
	?>
	<?php endif;?>

	</div>
<?php else : ?>
	<div class="row row-eq-height paddingbottom">
		<?php while ( $query->have_posts() ){ $query->the_post(); get_template_part('partials/article', 'col4'); }?>
	</div>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>
	<div class="row paddingbottom">
		<div class="pagenav">
    	<div class="alignleft"><?php previous_posts_link('Newer posts', $query->max_num_pages) ?></div>
    	<div class="alignright"><?php next_posts_link('Older posts', $query->max_num_pages) ?></div>
		</div>
	</div>
</div>
<!-- End Posts -->
<?php get_footer();?>

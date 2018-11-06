<?php /* Template Name: Product Updates Page */ ?>
<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Title -->
<div class="container aligncenter">
<?php the_content(); ?>
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
<?php if ( $query->have_posts() ) :
$taxonomy = 'product_category';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy
?>			   
		   <div class="row paddingbottom">
		   <?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="updateholder">
				<div class="col-md-3 col-sm-12 date"><small><?php the_time( 'F jS, Y' ); ?></small></div>
				<div class="col-md-9 col-sm-12 update"><?php   // Get terms for post
$terms = get_the_terms( $post->ID , 'product_category' );
// Loop over each item since it's an array
if ( $terms != null ){
foreach( $terms as $term ) {
$term_link = get_term_link( $term, 'product_category' );
 // Print the name and URL
echo '<div class="category"><a href="' . $term_link . '"><span class="tag '. $term->slug .'">' . $term->name . '</span></a></div>';
// Get rid of the other data stored in the object, since it's not needed
unset($term); } } ?> <h3><?php the_title(); ?></h3><?php the_content(); ?></div>
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

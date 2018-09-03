<?php
/**
 * The template for displaying search results pages.
 *
 */ 
 include 'header.php';?>
<?php if ( have_posts() ) : ?>
<div class="container fullwidth homeslider">
<?php putRevSlider("home", "homepage") ?>
</div>
<div class="fullwidth paddingtop paddingbottom">
<div class="container">
<h3>You searched for " <?php echo esc_html( get_search_query( false ) ); ?> ". Here are the results:</h3>
<hr>
	<?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <span class="search-post-title"><?php the_title(); ?></span>
    <span class="search-post-excerpt"><?php the_excerpt(); ?></span>
    <span class="search-post-link"><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></span>
    <?php endwhile; ?>
</div>
</div>
<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php include 'footer.php';?>
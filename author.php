<?php
/**
 * The template for displaying author results pages.
 *
 */ 
?>
<?php get_header();?>
	<?php if ( have_posts() ) : ?>
	 <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
	<div class="fullwidth paddingtop paddingbottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<h3>All of <?php echo $curauth->nickname; ?> posts:</h3>
					<hr>
					<br>
					<?php while ( have_posts() ) : the_post(); ?>
					<div style="padding:20px 0;margin-bottom: 20px">	
						<h4 class="thin search-post-title"><?php the_title(); ?></h4>
						<p class="search-post-excerpt"><?php the_excerpt(); ?></p>
						<p class="search-post-link"><a href="<?php the_permalink(); ?>">Read More</a></p>
					</div>
					<?php endwhile; ?>
					<ul class="list-inline">
						<li><?php previous_posts_link( 'Newer posts' ); ?></li>
						<li class='pull-right'><?php next_posts_link( 'Older posts' ); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	<?php get_template_part('partials/content', 'clocks'); ?>
<?php get_footer();?>

<?php
	
	$processed_query = siteorigin_widget_post_selector_process_query( $instance['posts'] );

	// Use the processed post selector query to find posts.
	$query_result = new WP_Query( $processed_query );
?>
<?php if($query_result->have_posts()) : ?>
<div>
    <ul class="akvo-custom-posts post-list floats-in microstory">
        <?php while($query_result->have_posts()) : $query_result->the_post(); ?>
		<li class='post'>
			<?php get_template_part('templates/microstory');?>
		</li>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
</div>

<?php endif; ?>
<!-- Akvo Hubspot blog and Webinars -->
<h1><?php _e( $instance['title'] );?></h1>
<ul class="akvo-hubspot-blog-webinars akvo-custom-posts">
	<?php foreach( $instance['items'] as $item ): $image_url = wp_get_attachment_url( $item['featured_image'] ); ?>
		<?php if( !empty( $item['post_url'] ) ):?>
			<li class="post">
				<a href="<?php _e( $item['post_url'] );?>">
					<div class="featured-image" style="background-image: url(<?php _e( $image_url ); ?>);"></div>
					<div class="post-meta">
						<div class="post-label"><?php _e( $item['post_label'] );?></div>
						<div class="post-title"><?php _e( $item['post_title'] );?></div>
					</div>
				</a>
			</li>
		<?php endif;?>
	<?php endforeach; ?>
</ul>

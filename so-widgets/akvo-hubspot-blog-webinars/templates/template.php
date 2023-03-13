<!-- Akvo Hubspot blog and Webinars -->
<h1><?php _e( $instance['title'] );?></h1>
<ul class="akvo-hubspot-blog-webinars">
	<?php foreach( $instance['items'] as $item ):
		$post_label = $item['post_label'];
		$image_url = wp_get_attachment_url( $item['featured_image'] );
	?>
		<?php if( !empty( $item['post_url'] ) ):?>
			<li class="post">
				<a href="<?php _e( $item['post_url'] );?>">
					<div class="featured-image" <?php if( !empty( $image_url ) ){ echo 'style="background-image:url('.$image_url.');"'; }?>></div>
					<div class="post-meta">
						<?php if( !empty( $post_label ) ):?>
							<div class="post-label"><?php _e( $post_label );?></div>
						<?php endif; ?>
						<div class="post-title"><?php _e( $item['post_title'] );?></div>
					</div>
				</a>
			</li>
		<?php endif;?>
	<?php endforeach; ?>
</ul>

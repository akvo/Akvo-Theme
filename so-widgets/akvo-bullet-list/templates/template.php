<!-- AKVO BULLET LIST -->
<div class="sow-bullet-wrapper">
		<ul class="list-unstyled">
		<?php foreach ( $instance['bullet_items'] as $value) :?>
			<li class="bullet-item row" style="opacity: <?php ( $value['is_faded'] ? _e( '0.5' ) : _e( '1' ) ); ?>;" >
				<div class="col-md-3">
					<p class="bullet-title">
						<i class="<?php _e( $value['bullet_icon_class'] ); ?>" style=";" aria-hidden="true"></i>
						<strong><?php _e( $value['bullet_title'] );?></strong>
					</p>
				</div>
				<div class="col-md-9">
					<p><?php _e( $value['bullet_desc'] );?></p>
				</div>
			</li>
		<?php endforeach;?>
	</ul>
</div>

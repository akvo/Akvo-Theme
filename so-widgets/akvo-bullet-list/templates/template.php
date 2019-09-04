<!-- AKVO BULLET LIST -->
<div class="sow-bullet-wrapper">
		<ul class="list-unstyled">
		<?php foreach ( $instance['bullet_items'] as $value) :?>
			<li class="bullet-item row" style="opacity: <?php ( $value['is_faded'] ? _e( '0.5' ) : _e( '1' ) ); ?>;" >
				<div class="col-md-3">
					<div class="bullet-title">
						<div class="bullet-title-icon">
							<i class="<?php _e( $value['bullet_icon_class'] ); ?>" aria-hidden="true"></i>
						</div>
						<div class="bullet-title-text">
							<strong><?php _e( $value['bullet_title'] );?></strong>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<p><?php _e( $value['bullet_desc'] );?></p>
				</div>
			</li>
		<?php endforeach;?>
	</ul>
</div>

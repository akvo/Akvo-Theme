<!-- AKVO BULLET LIST -->
<div class="sow-bullet-wrapper">
		<ul class="list-unstyled <?php ( $instance['bullet_grid'] ? _e( 'bullet-grid2' ) : _e( '' ) )?>">
		<?php foreach ( $instance['bullet_items'] as $value) :?>
			<li class="bullet-item <?php ( $value['is_faded'] ? _e( 'faded' ) : _e( '' ) )?>">
				<div class="row">
					<div class="<?php if( isset( $value['bullet_desc'] ) && $value['bullet_desc'] ){ _e( 'col-md-3' );} else{ _e( 'col-md-12' ); }?>">
						<div class="bullet-title <?php ( $value['is_faded'] ? _e( 'fade-active' ) : _e( '' ) ) ?>">
							<div class="bullet-title-icon">
								<i class="<?php _e( $value['bullet_icon_class'] ); ?>" aria-hidden="true"></i>
							</div>
							<div class="bullet-title-text">
								<strong><?php _e( $value['bullet_title'] );?></strong>
							</div>
						</div>
					</div>
					<?php if( isset( $value['bullet_desc'] ) && $value['bullet_desc'] ):?>
					<div class="col-md-9">
						<p><?php _e( $value['bullet_desc'] );?></p>
					</div>
					<?php endif;?>
				</div>
			</li>
		<?php endforeach;?>
	</ul>
</div>

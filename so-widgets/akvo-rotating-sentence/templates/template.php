<!-- ROTATING SENTENCE -->
<?php if( isset( $instance['phrase'] ) ):?>
<h2><?php _e( $instance['phrase'] );?>
	<?php if( isset( $instance['items'] ) ): ?>
    <div class="fadeIn">
		<?php foreach( $instance['items'] as $word ):?>
		<span><?php _e( $word['word'] );?></span>
		<?php endforeach;?>
    </div>
	<?php endif;?>
</h2>
<?php endif;?>
<!-- END ROTATING SENTENCE -->
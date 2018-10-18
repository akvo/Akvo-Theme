<p class="post-attributes-label-wrapper">
	<input style="width: 100%;" type="text" placeholder="<?php if( isset( $field['label'] ) ){_e( $field['label'] );}?>" name="<?php _e( $slug );?>" value="<?php _e( $value ); ?>" />
</p>
<?php if( isset( $field['desc'] ) ):?><p class="help"><?php _e( $field['desc'] );?></p><?php endif;?>
<!-- AKVO CONTENT -->
<?php global $sp_sow; ?>
<div class="dropdown-content">
		<ul class="list-unstyled">
	<?php foreach ( $instance['items'] as $value) : $content_id = $sp_sow->getUniqueID( $value ); ?>
		<li class="faded"><a href="#<?php _e( 'content-'.$content_id ); ?>"><?php _e( $value['content_editor'] );?></a></li>
	<?php endforeach;?>
	</ul>
</div>

<!-- SHOW CONTENT DIV ON BUTTON CLICK -->
	<?php global $sp_sow; foreach( $instance['items'] as $value ):
		if( function_exists( 'siteorigin_panels_render' ) ): $popup_id = $sp_sow->getUniqueID( $value );?>
	<div class="content-desc" id="content-<?php _e( $popup_id ); ?>">
		<?php echo siteorigin_panels_render( 'w'.$popup_id, true, $value['content_desc'] ) ;?>
	</div>
<?php endif;endforeach;?>
<!-- SHOW CONTENT DIV ON BUTTON CLICK ENDS -->
<style media="screen">
	.dropdown-content{
		background-color: #404898;
		width:100%;
		height:auto;
		padding: 50px
	}
	.dropdown-content ul{
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-gap: 20px;
	}
	.dropdown-content ul > li{
		margin-bottom: 20px;
	}
	.dropdown-content ul > li a,
	.dropdown-content ul > li a:hover{
		color: #fff;
		text-decoration: none;
	}
	.content-active{
		color: #fff;
		text-decoration: none;
	}

	.content-desc{
		display: none;
	}
	.show{
		display: block;
	}
</style>

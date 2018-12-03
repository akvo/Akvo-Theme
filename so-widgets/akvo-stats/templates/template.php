<!-- Statistics Flex -->
<div class="fullwidth">
	<div class="container paddingtop paddingbottom">
		<h2 class="paddingbottom"><?php _e( $instance['title'] );?></h2>
		<div class="row row-flex aligncenter statistics row-eq-height">
			<?php foreach( $instance['items'] as $item ):?>
			<div class="col stat aligncenter">
				<h3 class="thin stattitle">
					<?php echo siteorigin_widget_get_icon( $item['icon'], array( 'font-size:50px', 'color: #404898', 'margin-bottom:10px' ) ); ?>
					<?php if( isset( $item['fa_pro_icon'] ) ):?>
					<i class="fa <?php _e( $item['fa_pro_icon'] );?>"></i>
					<?php endif; ?>
					<br><?php _e( $item['title'] );?>
				</h3>
				<?php echo $item['content'];?>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</div>

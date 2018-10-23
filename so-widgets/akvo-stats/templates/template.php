<!-- Statistics Flex -->
<div class="fullwidth bg-light-gray">
	<div class="container paddingtop paddingbottom">
		<h2 class="paddingbottom massivetitle"><?php _e( $instance['title'] );?></h2>
		<div class="row row-flex aligncenter statistics row-eq-height">
			<?php foreach( $instance['items'] as $item ):?>
			<div class="col stat">
				<h3 class="thin stattitle">
					<?php echo siteorigin_widget_get_icon( $item['icon'], array( 'font-size:50px', 'color: #404898', 'margin-bottom:10px' ) ); ?>
					<br><?php _e( $item['title'] );?>
				</h3>
				<?php echo $item['content'];?>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
<!-- AKVO CONTENT -->
<div class="sow-pricing-wrapper">
	<div class="sow-pricing" style="background-color: <?php _e( $instance['content_backround'] );?>;">
			<ul class="list-unstyled">
		<?php foreach ( $instance['items'] as $value) :?>
			<li class="faded"><a href="#<?php _e( $value['popup_id'] ); ?>"><?php _e( $value['content_editor'] );?></a></li>
		<?php endforeach;?>
		</ul>
	</div>
</div>
<!-- SHOW CONTENT DIV ON BUTTON CLICK ENDS -->
<style>
.sow-pricing-wrapper .sow-pricing h1,
.sow-pricing-wrapper .sow-pricing h2,
.sow-pricing-wrapper .sow-pricing h3,
.sow-pricing-wrapper .sow-pricing h4,
.sow-pricing-wrapper .sow-pricing h5,
.sow-pricing-wrapper .sow-pricing h6{
	color: <?php _e( $instance['content_text'] );?>;
	line-height: 1.2;
}
.sow-pricing-wrapper .sow-pricing ul > li a,
.sow-pricing-wrapper .sow-pricing ul > li a:hover{
	color: <?php _e( $instance['content_text'] );?>;
	text-decoration: none;
}
.sow-desc-active{
	color: <?php _e( $instance['content_text'] );?>;
	text-decoration: none;
}
</style>

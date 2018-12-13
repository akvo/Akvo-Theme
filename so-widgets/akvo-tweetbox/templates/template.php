<!-- TWEET PULL OUT -->
<?php
	
	$twitter_link = "https://twitter.com/intent/tweet?text=".$instance['text']."&url=".get_the_permalink();

?>
<a target="_blank" href="<?php _e( $twitter_link );?>" target="_blank"><div class="tweetboxpullout">
	<div class="fullheight">
		<h3><?php _e( $instance['text'] );?></h3>
		<h3 class="tweetbutton"><a target="_blank" href="<?php _e( $twitter_link );?>" target="_blank">Click to Tweet <i class="fa fa-twitter" aria-hidden="true"></i></a></h3>
	</div>
</div></a>
<!-- END TWEET PULL OUT -->

<?php
  $advert_url = get_post_meta( $post->ID, 'url', true );
  $featured_img_url = get_the_post_thumbnail_url( get_the_ID(),'medium' );
?>
<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 postpaddingbottom">
  <a href="<?php echo $advert_url ?>"><div class="col-lg-12 col-xs-12 advertbox" style="background:url(<?php echo $featured_img_url ?>);"></div></a>
</div>

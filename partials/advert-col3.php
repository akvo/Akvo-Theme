<?php

  // FIRST GET THE FEATURED IMAGE URL
  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

  // IF THE SECONDARY IMAGE EXISTS THEN REPLACE WITH THE SECOND ONE
  if( class_exists('MultiPostThumbnails') ) {
    global $post;
    $image_id = MultiPostThumbnails::get_post_thumbnail_id( 'advert', 'background_header_image', $post->ID );
    if( $image_id ){
      $image_src = wp_get_attachment_image_src( $image_id, 'full' );

      if( is_array( $image_src ) ){
        $featured_img_url = $image_src[0];
      }
    }

  }

  $advert_url = get_post_meta( $post->ID, 'url', true );

?>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 postpaddingbottom">
  <a href="<?php echo $advert_url ?>">
    <div class="col-lg-12 col-xs-12 advertbox" style="background:url(<?php _e( $featured_img_url );?>);"></div>  
  </a>
</div>

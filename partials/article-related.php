<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 postpaddingbottom youmightlikecontainer">
  <div class="col-lg-12 col-xs-12 youmightlikebox" style="background:url(<?php the_post_thumbnail_url('full'); ?>);">
    <div class="blog-colum">
      <div class="youmightliketext">
        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
        <div class="overlay overlayBottom">
          <ul class="blog-detail">
            <li><i class="fa fa-calendar"></i> <?php the_time('F jS, Y'); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

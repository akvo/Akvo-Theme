<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12 postpaddingbottom">
  <div class="col-lg-12 col-xs-12">
    <a href="<?php the_permalink(); ?>"><div class="featuredimage blogimagesmall" style="background:url(<?php the_post_thumbnail_url('medium'); ?>);"></div></a>
    <div class="blog-colum">
      <div class="titledate">
        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
        <ul class="blog-detail">
          <li><i class="fa fa-calendar"></i> <?php the_time('j F Y'); ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>

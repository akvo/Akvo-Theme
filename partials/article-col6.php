<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 postpaddingbottom">
  <div class="col-lg-12 col-xs-12">
    <div class="featuredimage"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
    <div class="blog-column">
      <div class="titledatemain">
        <h4><?php the_title(); ?></h4>
        <ul class="blog-detail">
          <li>
            <i class="fa fa-calendar"></i>
            <?php the_time('j F Y'); ?>
          </li>
        </ul>
        <p><?php the_excerpt(); ?></p>
      </div>
      <a href="<?php the_permalink(); ?>" class="buttonblack">Read More</a>
    </div><!-- blog-column -->
  </div><!-- col-lg-12 col-xs-12 -->
</div><!-- col col-lg-6 col-md-6 col-sm-12 col-xs-12 postpaddingbottom-->

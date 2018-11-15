<?php get_header();?>
<!-- Carousel -->
<div class="container fullwidth">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active" style="background:url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2018/09/testphoto.jpg);">
		<div class="container">
           <div class="carousel-caption microstory">
            <h1><?php single_cat_title(); ?></h1>
          </div>
		</div>
        </div><!-- End Item -->
                        
      </div><!-- End Carousel Inner -->

    </div>
</div>
<!-- End Carousel -->

<!-- Posts -->
<div class="container paddingtop paddingbottom">
<?php if ( have_posts() ) :  ?>
		   <div class="row row-eq-height paddingbottom">
		   <?php while ( have_posts() ) : the_post(); ?>
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-12 postpaddingbottom">
                    <div class="col-lg-12 col-xs-12">
                        <a href="<?php the_permalink(); ?>"><div class="featuredimage blogimagesmall" style="background:url(<?php the_post_thumbnail_url('full'); ?>);"></div></a>
						 <div class="blog-colum">
							<div class="titledate">
								<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
							 <ul class="blog-detail"> 
								<li><i class="fa fa-calendar"></i> <?php the_time( 'F jS, Y' ); ?></li> 
							</ul> 
							</div>
						</div>
					</div>
                </div>
				<?php endwhile;?>
			</div>

<?php wp_reset_postdata(); ?>
<?php endif; ?>
<div class="row paddingbottom">
<div class="pagenav">
    <div class="alignleft"><?php previous_posts_link('Newer Posts', $query->max_num_pages) ?></div>
    <div class="alignright"><?php next_posts_link('Older Posts', $query->max_num_pages) ?></div>
</div>
</div>

</div>
<!-- End Posts -->

<?php get_footer();?>

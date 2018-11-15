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
<div class="row row-eq-height paddingbottom">
<?php
        $current_page = get_queried_object();
        $category     = $current_page->post_name;

        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( 
            array(
                'paged'         => $paged, 
                'category_name' => $category,
                'order'         => 'DESC',
                'post_type'     => 'post',
                'post_status'   => 'publish',
            )
        );

        if ($query->have_posts()) {
               while ($query->have_posts()) { 
               $query->the_post(); ?>
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
		   <?php
            }

            // next_posts_link() usage with max_num_pages
            next_posts_link( 'Older Entries', $query->max_num_pages );
            previous_posts_link( 'Newer Entries' );

            wp_reset_postdata();
        }
        ?>
			</div>



</div>
<!-- End Posts -->

<?php get_footer();?>

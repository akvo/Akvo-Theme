<?php /* Template Name: Blog Page */ ?>
<?php get_header();?>
<!-- Carousel -->
<div class="container fullwidth">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active" style="background:url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2018/09/testphoto.jpg);">
		<div class="container">
           <div class="carousel-caption microstory">
            <h1>Backstage Blog</h1>
          </div>
		</div>
        </div><!-- End Item -->
                        
      </div><!-- End Carousel Inner -->

    </div>
</div>
<!-- End Carousel -->

<!-- Posts -->
<div class="container paddingtop paddingbottom">
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
// are we on page one?
if(1 == $paged) { ?>
			<div class="row row-eq-height paddingbottom">
				<?php $query = new WP_Query( 'post_type=post&order=DESC&orderby=date&posts_per_page=1' ); ?>
				<?php if ( $query->have_posts() ) :?>	
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			    <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 postpaddingbottom">
                    <div class="col-lg-12 col-xs-12">
                        <div class="featuredimage"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
						 <div class="blog-column">
						 <div class="titledatemain">
							<h4><?php the_title(); ?></h4>
							 <ul class="blog-detail"> 
								<li><i class="fa fa-calendar"></i> <?php the_time('F jS, Y'); ?></li> 
							</ul> 
							<p><?php the_excerpt(); ?></p>
						 </div>
							<a href="<?php the_permalink(); ?>" class="buttonblack">Read More</a>
						</div>
					</div>
                </div>
				<?php endwhile;?> 
				<?php endif; ?>
				<?php $query2 = new WP_Query( 'post_type=advert&order=DESC&orderby=date&posts_per_page=1' ); ?>
				<?php if ( $query2->have_posts() ) :?>	
				<?php while ( $query2->have_posts() ) : $query2->the_post(); 
				$advert_url = get_post_meta($post->ID, 'url', true); 
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
					<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 postpaddingbottom">
					<a href="<?php echo $advert_url ?>"><div class="col-lg-12 col-xs-12 advertbox" style="background:url(<?php echo $featured_img_url ?>);">
					</div></a>
					</div>
				<?php endwhile; endif; ?>
           </div>		   	   
			   
			   
<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
$query = new WP_Query( 'post_type=post&order=DESC&orderby=date&posts_per_page=3&offset=1&paged='. $paged ); ?>
<?php if ( $query->have_posts() ) :?>			   
		   <div class="row row-eq-height paddingbottom">
		   <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
			<div class="pagenav">
    <div class="alignleft"><?php previous_posts_link('Newer Posts', $query->max_num_pages) ?></div>
    <div class="alignright"><?php next_posts_link('Older Posts', $query->max_num_pages) ?></div>
  </div>

<?php 
wp_reset_postdata();
endif; ?>

<?php } else { ?>

<?php $paged2 = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
$query2 = new WP_Query( 'post_type=post&order=DESC&orderby=date&posts_per_page=12&offset=4&paged='. $paged2 ); ?>
<?php if ( $query2->have_posts() ) :?>			   
		   <div class="row row-eq-height paddingbottom">
		   <?php while ( $query2->have_posts() ) : $query2->the_post(); ?>
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
			<div class="pagenav">
    <div class="alignleft"><?php previous_posts_link('Newer Posts', $query->max_num_pages) ?></div>
    <div class="alignright"><?php next_posts_link('Older Posts', $query->max_num_pages) ?></div>
  </div>

<?php 
wp_reset_postdata();
endif; ?>

<?php } ?>
</div>
<!-- End Posts -->

<?php get_footer();?>

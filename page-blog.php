<?php /* Template Name: Blog Page */ ?>
<?php get_header();?>
<!-- Carousel -->
<div class="container fullwidth">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active" style="background:url(https://staging3.akvo.org/wp-content/uploads/2018/09/testphoto.jpg);">
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

			<div class="row paddingbottom">
				<?php $query = new WP_Query( 'order=asc&orderby=date&posts_per_page=1' ); ?>
				<?php if ( $query->have_posts() ) :?>	
				<div>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 postpaddingbottom">
                    <div class="col-lg-12 col-xs-12">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
						 <div class="blog-column">
						 <div class="titledatemain">
							<h4><?php the_title(); ?></h4>
							 <ul class="blog-detail"> 
								<li><i class="fa fa-clock-o"></i> <?php the_time('F jS, Y'); ?></li> 
							</ul> 
							<p><?php the_excerpt(); ?></p>
						 </div>
							<a href="<?php the_permalink(); ?>" class="buttonblack">Read More</a>
						</div>
					</div>
                </div>
				<?php endwhile;?> 
				</div>
				<?php endif; ?>
				<?php $query2 = new WP_Query( 'post_type=advert&order=asc&orderby=date&posts_per_page=1' ); ?>
				<?php if ( $query2->have_posts() ) :?>	
				<?php while ( $query2->have_posts() ) : $query2->the_post(); $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 postpaddingbottom">
					<a href="<?php echo $advert_url ?>"><div class="col-lg-12 col-xs-12 advertbox" style="background:url(<?php echo $featured_img_url ?>);">
					</div></a>
					</div>
				<?php endwhile; endif; ?>
           </div>		   	   
			   
			   
<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; 
$query = new WP_Query( 'order=asc&orderby=date&posts_per_page=6&offset=1&paged='. $paged ); ?>
<?php if ( $query->have_posts() ) :?>			   
		   <div class="row paddingbottom">
		   <?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 postpaddingbottom">
                    <div class="col-lg-12 col-xs-12">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
						 <div class="blog-colum">
							<div class="titledate">
							<h4><?php the_title(); ?></h4>
							 <ul class="blog-detail"> 
								<li><i class="fa fa-clock-o"></i> <?php the_time( 'F jS, Y' ); ?></li> 
							</ul> 
							</div>
							<a href="<?php the_permalink(); ?>" class="buttonblack">Read More</a>
						</div>
					</div>
                </div>
				<?php endwhile;?>
				<div class="pagination">
					<div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
					<div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>
				</div>
			</div>
<?php 
wp_reset_postdata();
endif; ?>

			

</div>
<!-- End Posts -->

<?php get_footer();?>

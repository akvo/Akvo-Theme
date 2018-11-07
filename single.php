<?php include 'header.php';?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Carousel -->
<div class="container fullwidth post">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active" style="background:url(<?php if( get_field('background_header_image') ): ?><?php the_field('background_header_image'); ?><?php else;?><?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2018/10/BP-pink-3-600-1.jpg<?php endif; ?>)!important;background-size:auto!important;background-repeat:repeat!important;">
		<div class="container">
           <div class="carousel-caption microstory">
            <h1><?php the_title(); ?></h1>
			
          </div>
		</div>
        </div><!-- End Item -->
                        
      </div><!-- End Carousel Inner -->

    </div>
</div>
<!-- End Carousel -->


<!-- Posts -->
<div class="container paddingtop singlepost">


			<div class="row singlerow">
			    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 postpaddingbottom">
				<ul class="meta"> 
					<li>Written by <?php echo get_the_author_link(); ?> on <?php the_time('F jS, Y'); ?></li> 
				</ul>
                        <div class="postimage"><?php the_post_thumbnail('full'); ?></div>
						<br/>
						<div class="bg-light-gray greybox fullheight"><?php echo get_post(get_post_thumbnail_id())->post_content; ?></div>
						<br/>
						 <div class="blog-column">
							<?php the_content();?>
						</div>
						
				
				<div class="clear both"></div>
							<br/>
				<div class="row row-eq-height aboutauthor">
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12authorbox"><div class="bg-light-gray greybox fullheight"><h3><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></h3></div></div>
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><div class="bg-light-gray greybox fullheight">
				<div class="categories">
						<h3>Posted in <?php the_category( ', ' ); ?></h3>
						<form id="category-select" class="category-select blog-detail" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
						<?php
						$args = array(
							'show_option_none' => __( 'Browse Categories' ),
							'show_count'       => 1,
							'orderby'          => 'name',
							'echo'             => 0,
						);
						?>
						<?php $select  = wp_dropdown_categories( $args ); ?>
						<?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
						<?php $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); ?>
						<?php echo $select; ?>
						<noscript>
							<input type="submit" value="View" />
						</noscript>
						</form>
				</div>
				</div>
				</div>
				</div>
                </div>
				<!-- Share -->
						
						
						
						<!-- Comments -->
<div class="paddingbottom">
<?php if (comments_open()) :?>
<div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        
        s.src = '//EXAMPLE.disqus.com/embed.js';
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<?php endif; // comments_open ?>
</div>
<!-- End Comments -->
           </div>
</div>
<!-- End Posts -->

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php wp_reset_query(); ?>

<!-- Related Posts -->
<div class="fullwidth paddingtop paddingbottom greenbg whitetext">
<div class="container singlepost">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h2 class="paddingbottom aligncenter">Things you may also like...</h2>
			<div class="row">
				<?php $query2 = new WP_Query( 'post_type=advert&order=asc&orderby=date&posts_per_page=1' ); ?>
				<?php if ( $query2->have_posts() ) :?>	
				<?php while ( $query2->have_posts() ) : $query2->the_post(); $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
					<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 postpaddingbottom">
					<a href="<?php echo $advert_url ?>"><div class="col-lg-12 col-xs-12 advertbox" style="background:url(<?php echo $featured_img_url ?>);">
					</div></a>
					</div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
				
<?php // Build our basic custom query arguments
global $post;
$categories = get_the_category( $post->ID );
$catidlist = '';
foreach( $categories as $category) {
    $catidlist .= $category->cat_ID . ",";
}
// Build our category based custom query arguments
$custom_query_args = array( 
	'posts_per_page' => 3, // Number of related posts to display
	'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
	'orderby' => 'ASC', // Randomize the results
	'cat' => $catidlist, // Select posts in the same categories as the current post
);
// Initiate the custom query
$custom_query = new WP_Query( $custom_query_args );
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
if ( $custom_query->have_posts() ) : ?>
	<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 postpaddingbottom youmightlikecontainer">
                    <div class="col-lg-12 col-xs-12 youmightlikebox" style="background:url(<?php echo $featured_img_url ?>);"> 
						 <div class="blog-colum">
						 <div class="youmightliketext">
							<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
							<div class="overlay overlayBottom">
								<ul class="blog-detail"> 
								<li><i class="fa fa-clock-o"></i> <?php the_time('F jS, Y'); ?></li> 
								</ul>
							</div>
							 
						</div>							
						</div>
					</div>
                </div>
<?php endwhile; ?>
<?php else : ?>
		<p>Sorry, no related articles to display.</p>
<?php endif;
// Reset postdata
wp_reset_postdata(); ?>
            </div>
</div>
</div>
</div>
<!-- End Related Posts -->

<?php include 'footer.php';?>

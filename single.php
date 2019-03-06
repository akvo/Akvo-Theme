<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div class="container fullwidth post"><?php get_template_part('partials/content', 'header');?></div>
	<!-- Posts -->
	<div class="container paddingtop singlepost">
		<div class="row singlerow">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 postpaddingbottom">
				<ul class="meta"> 
					<li>Written by <?php echo get_the_author_link(); ?><br/>
					<?php the_time('j F Y'); ?></li> 
				</ul>
				<div class="postimage"><?php the_post_thumbnail('full'); ?></div>
				<br/>
				<?php
					$get_description = get_post(get_post_thumbnail_id())->post_excerpt;
					if(!empty($get_description)){//If description is not empty show the div
						echo '<div class="bg-light-gray greybox fullheight">' . $get_description . '</div><br/>';
					}
				?>
				<div class="blog-column"><?php the_content();?></div>
				<div class="clear both"></div>
				<?php if (get_the_author_meta('description')) { ?>
				<br/>
				<div class="row aboutauthor row-eq-height">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 authorbox bg-light-gray greybox fullheight">
						<div class="col-lg-2 col-sm-2 col-xs-2 authorimage"><?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?></div>
						<div class="col-lg-10 col-sm-10 col-xs-10"><h3><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></h3></div>
					</div>
				</div>
				<?php } ?>
				<div class="row aboutauthor" style="margin-top:15px;">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 catbox">
						<div class="fullheight">
							<div class="categories">
								<p><strong>Posted in:</strong> <?php the_category( ', ' ); ?></p>
								<p>
									<strong>All categories:</strong> 
									<?php $categories = get_categories();
										foreach($categories as $category) {
											echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>, ';
									}?>
								</p>
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
<div class="fullwidth paddingtop paddingbottom greenbg whitetext relatedposts">
	<div class="container singlepost">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h2 class="paddingbottom aligncenter">You might also like...</h2>
			<div class="row">
				<?php $query2 = new WP_Query( 'post_type=advert&order=asc&orderby=date&posts_per_page=1' ); ?>
				<?php if ( $query2->have_posts() ) :?>	
				<?php while ( $query2->have_posts() ) : $query2->the_post(); 
				$advert_url = get_post_meta($post->ID, 'url', true);
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
				$image_id = MultiPostThumbnails::get_post_thumbnail_id( 'post', 'background_header_image', $post->ID ); 
				?>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 postpaddingbottom">
					<a href="<?php echo $advert_url ?>">
						<div class="col-lg-12 col-xs-12 advertbox" style="background:url(<?php echo $image_id ?>);"></div>
					</a>
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
				if ( $custom_query->have_posts() ) : ?>
				<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
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
				<?php endwhile; ?>
			<?php else : ?>
				<p>Sorry, no related articles to display.</p>
			<?php endif;
				// Reset postdata
				wp_reset_postdata(); 
			?>
            </div><!-- row -->
		</div>
	</div><!-- container -->
</div>
<!-- End Related Posts -->

<?php get_footer();?>

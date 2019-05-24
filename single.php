<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php

		global $post;
		$disable_featured_image = get_post_meta( $post->ID, 'disable_featured_image', true );	// GET PAGE SETTINGS

		$authorDesc = get_the_author_meta( 'description' );		// AUTHOR DESCRIPTION

	?>
	<div class="container fullwidth post"><?php get_template_part('partials/content', 'header');?></div>

	<!-- Posts -->
	<div class="container paddingtop singlepost">
		<div class="row singlerow">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 postpaddingbottom">
				<ul class="meta">
					<li>Written by <?php echo get_the_author_link(); ?><br/>
					<?php the_time('j F Y'); ?></li>
				</ul>

				<!-- HIDE FEATURED IMAGE IF THE PAGE SETTINGS ARE DISABLED -->
				<?php if( !$disable_featured_image ): $featured_img_description = get_post( get_post_thumbnail_id() )->post_excerpt;?>
						<div class="postimage"><?php the_post_thumbnail('full');?></div><br>
						<?php if ( !empty(	$featured_img_description	)	): // If description is not empty then show the div ?>
						<div class="bg-light-gray greybox fullheight"><?php _e( $featured_img_description );?></div><br/>
						<?php endif;?>
				<?php endif;?>
				<!-- HIDE FEATURED IMAGE IF THE PAGE SETTINGS ARE DISABLED -->

				<div class="blog-column"><?php the_content();?></div>
				<div class="clear both"></div>

				<!-- AUTHOR INFORMATION -->
				<?php if ( $authorDesc ):?>
				<br/>
				<div class="row aboutauthor row-eq-height">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 authorbox bg-light-gray greybox fullheight">
						<div class="col-lg-2 col-sm-2 col-xs-2 authorimage"><?php _e( get_avatar( get_the_author_meta( 'ID' ), 100 ) ); ?></div>
						<div class="col-lg-10 col-sm-10 col-xs-10"><h3><?php _e( $authorDesc ); ?></h3></div>
					</div>
				</div>
				<?php endif; ?>
				<!-- AUTHOR INFORMATION -->

				<div class="row aboutauthor" style="margin-top:15px;">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 catbox">
						<div class="fullheight">
							<div class="categories">
								<p><strong>Posted in:</strong> <?php the_category( ', ' ); ?></p>
								<p>
									<strong>All categories:</strong>
									<?php $categories = get_categories(); foreach( $categories as $category ):?>
									<a href="<?php _e( get_category_link( $category->term_id ) );?>"><?php _e( $category->name );?></a>
									<?php endforeach;?>
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
			<?php
				// FIRST POST IN THE ROW IS THE ADVERT
				$query2 = new WP_Query( 'post_type=advert&order=asc&orderby=date&posts_per_page=1' );
				if ( $query2->have_posts() ){
					while ( $query2->have_posts() ){
						$query2->the_post();
						get_template_part('partials/advert', 'col3');
					}
					wp_reset_postdata();
				}

				// Build our basic custom query arguments
				global $post;
				$categories = get_the_category( $post->ID );
				$catidlist = '';
				foreach( $categories as $category) {
					$catidlist .= $category->cat_ID . ",";
				}

				// Initiate the custom query, Build our category based custom query arguments
				$custom_query = new WP_Query( array(
					'posts_per_page' 	=> 3, 								// Number of related posts to display
					'post__not_in' 		=> array($post->ID), 	// Ensure that the current post is not displayed
					'orderby' 				=> 'ASC', 						// Randomize the results
					'cat' 						=> $catidlist, 				// Select posts in the same categories as the current post
				) );

				if ( $custom_query->have_posts() ){
					while ( $custom_query->have_posts() ){
						$custom_query->the_post();
						get_template_part('partials/article', 'related');
					}
					wp_reset_postdata();
				}

			?>
			</div><!-- row -->
		</div><!-- col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
	</div><!-- container -->
</div>
<!-- End Related Posts -->

<?php get_footer();?>

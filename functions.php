<?php 

	/* HIDE ADMIN BAR FROM THE FRONTEND */
	add_filter('show_admin_bar', '__return_false');
	
	
function my_assets() {
//Enqueue Scripts
wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-1.11.1.min.js', array('jquery'), null, true);
wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js', array('jquery'), null, true);
wp_enqueue_script('akvo-script', get_template_directory_uri() .'/js/akvo_scripts.js', array('jquery'), null, true);
wp_enqueue_script('clock-script', get_template_directory_uri() .'/js/jClocksGMT.js', array('jquery'), null, true);
wp_enqueue_script('rotate-script', get_template_directory_uri() .'/js/jquery.rotate.js', array('jquery'), null, true);
wp_enqueue_script('easing-min', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('jquery'), null, true);
wp_enqueue_script('bxslider', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.js', array('jquery'), null, true);
wp_enqueue_script('easing', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/vendor/jquery.easing.1.3.js', array('jquery'), null, true);
wp_enqueue_script('fitvids', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/vendor/jquery.fitvids.js', array('jquery'), null, true);
wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/641b62259f.js', array('jquery'), null, true);


//Enqueue Styles
wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, true);
wp_enqueue_style('style', get_template_directory_uri() .'/css/akvo_style.css', null, true);
wp_enqueue_style('assistant', 'https://fonts.googleapis.com/css?family=Assistant:300,400', null, true);
wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700', null, true);
wp_enqueue_style('fontawesome', 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', null, true);
wp_enqueue_style('bxslider', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css', null, true);
wp_enqueue_style('fontawesome-new', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', null, true);
}
add_action( 'wp_enqueue_scripts', 'my_assets' );

//Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu-1' => __( 'Footer Menu 1' ),
      'footer-menu-2' => __( 'Footer Menu 2' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//Title
function wpdocs_filter_wp_title( $title, $sep ) {
    global $paged, $page;
 
    if ( is_feed() )
        return $title;
 
    // Add the site name.
    $title .= get_bloginfo( 'name' );
 
    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";
 
    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );
 
    return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );


//Widgets
function footer_widgets() {

	register_sidebar( array(
		'name'          => 'Footer Widget Area 1',
		'id'            => 'footer_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => 'Footer Widget Area 2',
		'id'            => 'footer_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => 'Footer Creative Commons Text',
		'id'            => 'footer_creative_commons_text',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );


}
add_action( 'widgets_init', 'footer_widgets' );
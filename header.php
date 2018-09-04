<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en-US" prefix="og: http://ogp.me/ns#"  class="no-js" >
<!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php wp_title('|', true, 'right'); ?></title>
<meta charset="UTF-8">
<meta name="description" content="Akvo.org: See it Happen" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="Akvo Foundation">
<meta name="HandheldFriendly" content="True">

<?php wp_head(); ?>

<!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body <?php body_class(); ?>>
<div id="mainbody">
		
<!-- NEW HEADER -->
<header id="top" role="banner" class="topbar">
<nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logobrand"><a id="brand" class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/akvotheme-NEW/images/logos/akvologowhite.png"></a></div>
                </div>
				<div id="navbar" class="collapse navbar-collapse">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'menu-main', 'menu_class' => 'nav navbar-nav' ) ); ?>
				<ul class="nav navbar-nav navbar-right">
                    <li><a href="#search"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                </ul>
				</div>
            </div><!-- /.container -->
</nav><!-- /.navbar -->
</header>
<div id="search">
    <button type="button" class="close">×</button>
    <?php get_search_form(); ?>
</div>
<!-- Progress Bar -->
<progress value="0" id="progressBar">
  <div class="progress-container">
    <span class="progress-bar"></span>
  </div>
</progress>
<!-- End Progress Bar -->
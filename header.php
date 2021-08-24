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
		<meta charset="UTF-8">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="HandheldFriendly" content="True">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-NJXGk7R+8gWGBdutmr+/d6XDokLwQhF1U3VA7FhvBDlOq7cNdI69z7NQdnXxcF7k" crossorigin="anonymous">
		<?php wp_head(); ?>
		<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!--[if IE ]><style type="text/css">
		.tab-content .sow-image-container, .tab-content .panel-grid-cell .sow-image-container {display:block!important;}
		</style><![endif]-->

		<!-- Hotjar Tracking Code for www.akvo.org -->
		<script>
		    (function(h,o,t,j,a,r){
		        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		        h._hjSettings={hjid:1319999,hjsv:6};
		        a=o.getElementsByTagName('head')[0];
		        r=o.createElement('script');r.async=1;
		        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		        a.appendChild(r);
		    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
		</script>
	</head>
	<body <?php body_class(); ?>>
		<!-- Google Analytics -->
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-143149382-1', 'auto');
		ga('send', 'pageview');
		</script>
		<!-- End Google Analytics -->
		<!-- Start Piwik PRO Tag Manager code -->
		<script type="text/javascript">
		function stgCreateCookie(a,b,c){var d="";if(c){var e=new Date;e.setTime(e.getTime()+24*c*60*60*1e3),d="; expires="+e.toUTCString()}document.cookie=a+"="+b+d+"; path=/"}var isStgDebug=(window.location.href.match("stg_debug")||window.document.cookie.match("stg_debug"))&&!window.location.href.match("stg_disable_debug");stgCreateCookie("stg_debug",isStgDebug?1:"",isStgDebug?14:-1);
		var url = "//analytics.akvo.org/containers/86745314-4c88-45c4-8c1d-77cd100105ea.sync.js" + (isStgDebug ? "?stg_debug" : "");
		document.write('<script src="' + url + '"></' + 'script>');
		</script><!-- End Piwik PRO Tag Manager code -->
		<div id="mainbody">

		<!-- NEW HEADER -->
			<header id="top" role="banner" class="topbar">
				<nav id="header" class="navbar navbar-fixed-top">
					<div id="header-container" class="container navbar-container">
						<div class="navbar-header">
							<a href="#main-menu-modal" class="navbar-toggle collapsed" data-toggle="modal">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<div class="logobrand">
								<a id="brand" class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img src="<?php bloginfo('template_url'); ?>/images/logos/random/logo<?php echo rand(1,4); ?>.png" alt="logo" width="200px" >
								</a>
							</div>
						</div>
						<div id="navbar" class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a data-toggle="modal" style="font-size: 22px;" href="#main-menu-modal"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
								<li class="space-two"><?php do_action('icl_language_selector'); ?></li>
								<li class="hubspot-btn">
								<?php
									$widget_id = getWidgetLangID( 'request_hubspot' );
									if( is_active_sidebar( $widget_id ) ){ dynamic_sidebar( $widget_id ); }
								?>
								</li>
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

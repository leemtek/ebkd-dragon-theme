<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dragon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>East Bay Karate-Do</title>
    <meta name="description" content="We train our students the ways of Uechi-Ryu Karate.  We enrich people's lives with our fitness, Zumba, and kickboxing classes.  Call us today!">
    <meta name="author" content="Duane Leem">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    
	<!-- Mobile Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- Open Graph-->
    <meta property="og:title" content="East Bay Karate-Do">
    <meta property="og:site_name" content="East Bay Karate-Do">
    <meta property="og:url" content="https://eastbaykarate-do.com">
    <meta property="og:description" content="The vision of East Bay Karate-Do is to create leaders in our community and develop successful martial arts students, Black Belts, future instructors, and well rounded individuals.">
    <meta property="fb:app_id" content="100000105143394">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://d1xrp9zhb3ks3c.cloudfront.net/web/eastbaykarate-do/images/facebook-banner.jpg">
    
	<!-- Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/eastbaykarate-do/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/eastbaykarate-do/images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/eastbaykarate-do/images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/eastbaykarate-do/images/favicons/manifest.json">
    <link rel="mask-icon" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/eastbaykarate-do/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="https://d1xrp9zhb3ks3c.cloudfront.net/web/eastbaykarate-do/images/favicons/favicon.ico">
    <meta name="msapplication-config" content="https://d1xrp9zhb3ks3c.cloudfront.net/web/eastbaykarate-do/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    
	<!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700,400,300" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet" type="text/css">
    
	<!-- Bootstrap core CSS-->
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
	<!-- Font Awesome CSS-->
    <link href="/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
	<!-- Fontello CSS-->
    <link href="/eastbaykarate-do/assets/fonts/fontello/css/fontello.css" rel="stylesheet">
    
	<!-- Plugins-->
    <link href="/eastbaykarate-do/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/eastbaykarate-do/assets/plugins/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="/eastbaykarate-do/assets/css/animations.css" rel="stylesheet">
    <link href="/eastbaykarate-do/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/eastbaykarate-do/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="/eastbaykarate-do/assets/plugins/hover/hover-min.css" rel="stylesheet">
    <link href="/eastbaykarate-do/assets/plugins/morphext/morphext.css" rel="stylesheet">
    
	<!-- the project core CSS file-->
    <link href="/eastbaykarate-do/assets/css/style.css" rel="stylesheet">
    
	<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="/eastbaykarate-do/assets/css/skins/red.css" rel="stylesheet">
    
	<!-- Custom CSS-->
    <link href="/eastbaykarate-do/assets/css/leemtek.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dragon' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dragon' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

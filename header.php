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
    <title><?php if (is_home() && ! is_front_page()) { single_post_title(); } else { the_title(); } ?> - East Bay Karate-Do</title>
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
    <link href="<?php echo get_template_directory_uri(); ?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
	<!-- Font Awesome CSS-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
	<!-- Fontello CSS-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/fonts/fontello/css/fontello.css" rel="stylesheet">
    
	<!-- Plugins-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/animations.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/hover/hover-min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/plugins/morphext/morphext.css" rel="stylesheet">
    
	<!-- the project core CSS file-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    
	<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/skins/red.css" rel="stylesheet">
    
	<!-- Custom CSS-->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/leemtek.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class("no-trans front-page"); ?>>
	<!-- Google Analytics-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/google-analytics.js"></script>
    <!-- Facebook Developer-->
    <!-- scrollToTop-->
    <!-- ================-->
    <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
    <!-- page wrapper start-->
    <!-- ================-->
    <div class="page-wrapper">
        <!-- header-container start-->
        <div class="header-container">
            <!-- header-top start-->
            <!-- classes:-->
            <!-- "dark": dark version of header top e.g. class="header-top dark"-->
            <!-- "colored": colored version of header top e.g. class="header-top colored"-->
            <!-- ================-->
            <div class="header-top dark">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2 col-sm-5">
                            <!-- header-top-first start-->
                            <!-- ================-->
                            <div class="header-top-first clearfix">
                                <ul class="social-links circle small clearfix hidden-xs">
                                    <li class="facebook"><a target="_blank" href="https://www.facebook.com/East-Bay-Karate-Do-180984285274364"><i class="fa fa-facebook"></i></a></li>
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/2525679?trk=tyah&amp;trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A2525679%2Cidx%3A1-1-1%2CtarId%3A1444242176324%2Ctas%3Aeast%20bay%20karate"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="youtube"><a target="_blank" href="https://www.youtube.com/user/EastbayKarateDo"><i class="fa fa-youtube-play"></i></a></li>
									<li class="wordpress"><a href="/blog"><i class="fa fa-wordpress"></i></a></li>
                                </ul>
                                <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                                    <div class="btn-group dropdown"><button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
                                        <ul class="dropdown-menu dropdown-animation">
                                            <li class="facebook"><a target="_blank" href="https://www.facebook.com/East-Bay-Karate-Do-180984285274364"><i class="fa fa-facebook"></i></a></li>
                                            <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/2525679?trk=tyah&amp;trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A2525679%2Cidx%3A1-1-1%2CtarId%3A1444242176324%2Ctas%3Aeast%20bay%20karate"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="youtube"><a target="_blank" href="https://www.youtube.com/user/EastbayKarateDo"><i class="fa fa-youtube-play"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- header-top-first end-->
                        </div><!-- /col -->
                        <div class="col-xs-10 col-sm-7">
                            <!-- header-top-second start-->
                            <!-- ================-->
                            <div class="clearfix text-right" id="header-top-second">
                                <nav>
                                    <ul class="list-inline">
                                        <li><a class="link-light" href="https://docs.google.com/forms/d/e/1FAIpQLSfXkAfrl4MRTgew5Sp-R0BrH1F1uR1sk6dR3POkSH51q4HjYw/viewform" target="_blank"><i class="fa fa-envelope pr-5"></i><span class="__cf_email__" data-cfemail="1c5f7372687d7f685c597d6f685e7d65577d6e7d6879315873327f7371">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
                                        <li><a class="link-light" href="tel:19254390964"><i class="fa fa-phone pr-5"></i>+1 (925) 439-0964</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- header-top-second end-->
                        </div>
                    </div><!-- /row -->
                </div><!-- /container -->
            </div><!-- /header-top -->
            <!-- header-top end-->
            
            <!-- header start-->
            <!-- classes:-->
            <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix"-->
            <!-- "dark": dark version of header e.g. class="header dark clearfix"-->
            <!-- "full-width": mandatory class for the full-width menu layout-->
            <!-- "centered": mandatory class for the centered logo layout-->
            <!-- ================-->
            <header id="main-header" class="header fixed clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <!-- header-left start-->
                            <!-- ================-->
                            <div class="header-left clearfix">
                                <!-- logo-->
                                <div class="logo" id="logo"><a href="/"><img id="logo_img" src="https://d1xrp9zhb3ks3c.cloudfront.net/web/eastbaykarate-do/images/main-logo.png" alt="East Bay Karate-Do"></a></div>
                            </div>
                            <!-- header-left end-->
                        </div>
                        <div class="col-md-9">
                            <!-- header-right start-->
                            <!-- ================-->
                            <div class="header-right clearfix">
                                <!-- main-navigation start-->
                                <!-- classes:-->
                                <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick"-->
                                <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated"-->
                                <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns-->
                                <!-- ================-->
                                <div class="main-navigation animated with-dropdown-buttons">
                                    <!-- navbar start-->
                                    <!-- ================-->
                                    <nav class="navbar navbar-default" role="navigation">
                                        <div class="container-fluid">
                                            <!-- Toggle get grouped for better mobile display-->
                                            <div class="navbar-header"><button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                                            <!-- Collect the nav links, forms, and other content for toggling-->
                                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                <!-- main-menu-->
                                                <ul class="nav navbar-nav">
                                                    <!-- main-menu -->
                                                    <?php wp_nav_menu(array(
                                                        "container"         => "ul",
                                                        "theme_location"	=> "menu-1",
                                                        "menu_class"        => "nav navbar-nav",
                                                        "walker"            => new MainNav_Walker
                                                    )); ?>
                                                    <!-- main-menu end -->
                                                </ul>
                                                <!-- main-menu end-->
                                                <!-- header dropdown buttons-->
                                                <div class="header-dropdown-buttons">
                                                    <div><a class="btn btn-sm hidden-xs btn-default" href="https://docs.google.com/forms/d/e/1FAIpQLSfXkAfrl4MRTgew5Sp-R0BrH1F1uR1sk6dR3POkSH51q4HjYw/viewform"
                                                            target="_blank">Contact Us <i class="fa fa-envelope pl-5"></i></a>
                                                        <a
                                                            class="btn btn-lg visible-xs btn-block btn-default" href="https://docs.google.com/forms/d/e/1FAIpQLSfXkAfrl4MRTgew5Sp-R0BrH1F1uR1sk6dR3POkSH51q4HjYw/viewform"
                                                            target="_blank">Contact Us <i class="fa fa-envelope pl-5"></i></a>
                                                    </div>
                                                </div>
                                                <!-- header dropdown buttons end-->
                                            </div>
                                        </div>
                                    </nav>
                                    <!-- navbar end-->
                                </div>
                                <!-- main-navigation end-->
                            </div>
                            <!-- header-right end-->
                        </div>
                    </div>
                </div>
            </header>
            <!-- header end-->
        </div><!-- /header-container -->
        <!-- header-container end-->
	

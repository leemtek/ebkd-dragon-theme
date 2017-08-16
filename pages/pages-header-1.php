<?php
/*
    Template Name: Unique Header 1
*/

get_header(); ?>

<style>
    .alignright {
        float: right;
        padding: 20px;
    }
</style>

<div class="page-wrapper">
    <!-- body content-->
    <!-- banner start-->
    <!-- ================-->
    <div class="banner dark-translucent-bg" style="background-image:url('https://d1xrp9zhb3ks3c.cloudfront.net/web/eastbaykarate-do/images/web/about-wallpaper-texture.jpg'); background-position: 50% 27%;">
        <!-- breadcrumb start-->
        <!-- ================-->
        <div class="breadcrumb-container">
            <div class="container">
                <ol class="breadcrumb">
                    <li><i class="fa fa-home pr-10"></i><a class="link-dark" href="/">Home</a></li>
                    <li class="active"><?php echo get_the_title(); ?></li>
                </ol>
            </div>
        </div>
        <!-- breadcrumb end-->
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center col-md-offset-2 pv-20">
                    <h3 class="title logo-font object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"
                        style="text-shadow: #DE5A58 2px 2px 5px;"><?php echo get_field("header_title"); ?></h3>
                    <div class="separator object-non-visible mt-10" data-animation-effect="fadeIn"
                        data-effect-delay="100"></div>
                    <p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><?php echo get_field("header_description"); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end-->
    <!-- main-container start-->
    <!-- ================-->
    <section class="main-container padding-bottom-clear">
        <div class="container">
            <!-- Who We Are-->
            <div class="row">
                <div class="main col-md-12">
                    <?php echo wpautop(get_the_content(), true); ?>
                </div>
                <!-- main end-->
            </div>
            <!-- /row-->
            <!-- Spacing-->
            <div class="space-top-40"></div>
        </div>
        <!-- /container-->
    </section>
    
</div>

<?php get_footer(); ?>
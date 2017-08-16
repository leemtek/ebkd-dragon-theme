<?php
/*
    Template Name: No Header | Full Page
*/

/* ================================================================================
    WordPress Post Fields | Content
================================================================================ */
$objThePost = get_post();

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
    <!-- banner end-->
    <!-- main-container start-->
    <!-- ================-->
    <section class="main-container padding-bottom-clear">
        <div class="container">
            <!-- Who We Are-->
            <div class="row">
                <div class="main col-md-12">
                    <?php echo apply_filters('the_content', $objThePost->post_content); ?>
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
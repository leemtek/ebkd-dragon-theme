<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Dragon
 */

get_header(); ?>

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
                <div class="main col-md-9">
									<?php
										while ( have_posts() ) : the_post();
											get_template_part( 'template-parts/content-page', get_post_format() );
										endwhile; // End of the loop.
									?>
                </div><!-- /col -->
				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div><!-- /col -->
                <!-- main end-->
            </div>
            <!-- /row-->
            <!-- Spacing-->
            <div class="space-top-40"></div>
        </div>
        <!-- /container-->
    </section>
    
</div>

<?php get_footer();

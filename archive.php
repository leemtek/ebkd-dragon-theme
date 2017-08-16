<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
                <div class="main col-md-12">
					<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
								<?php
									the_archive_title( '<h1 class="page-title">', '</h1>' );
									the_archive_description( '<div class="archive-description">', '</div>' );
								?>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; 
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

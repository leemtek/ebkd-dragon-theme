<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dragon
 */

get_header(); ?>

<!-- breadcrumb start-->
<!-- ================-->
<div class="breadcrumb-container">
	<div class="container">
		<ol class="breadcrumb">
			<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="/">Home</a></li>
			<li class="active">
				<?php if ( is_home() && ! is_front_page() ): single_post_title(); endif; ?>
			</li>
		</ol>
	</div>
</div>
<!-- banner end-->

<section class="container container-padding-top-bottom-40">
	<div class="row">
		<div class="col-md-9">
			<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post();
					?>
						<div class="col-sm-6">
							<div class="panel panel-default">
								<div class="panel-body">
									<?php
										/*
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'template-parts/content', get_post_format() );
									?>
								</div>
							</div>
						</div><!-- /col -->
						
					<?php
				endwhile;

				the_posts_navigation();
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif; ?>
		</div><!-- /col -->
		
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div><!-- /col -->
	</div>
</section>

<?php get_footer();

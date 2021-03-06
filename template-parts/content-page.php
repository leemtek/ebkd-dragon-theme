<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dragon
 */

?>

<section class="container">
	<div class="row">
		<div class="col-lg-9">
			<?php // Author and Date for Blog Posts
				if ( in_category( "Blog" ) ) : ?>
					<ul class="list-inline">
						<li class="blog-author-date"><i class="fa fa-user"></i> <?php the_author(); ?></li>
						<li class="blog-author-date"><i class="fa fa-calendar"></i> <time><?php the_date("M j, Y"); ?></time></li>
					</ul>
			<?php endif; ?>

			<!-- ======================================================================
				Featured Image
			====================================================================== -->
			<div class="margin-bottom-40">
				<?php if(has_post_thumbnail()) { ?>
					<?php the_post_thumbnail('post-thumbnail', array( 'class' => "img-responsive full-img")); ?>
					<span class="caption"><?php the_field('feature_image_caption'); ?></span>
				<?php } ?>
			</div>

			<!-- ======================================================================
				Content
			====================================================================== -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="padding-top: 20px;">
				<div class="entry-content">
					<?php
						the_content();

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Dragon' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php
							edit_post_link(
								sprintf(
									/* translators: %s: Name of current post */
									esc_html__( 'Edit %s', 'Dragon' ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								),
								'<span class="edit-link">',
								'</span>'
							);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-## -->
		</div><!-- /col -->

		<div class="col-lg-3">
			<?php get_sidebar(); ?>
		</div><!-- /col -->
	</div><!-- /row -->
</section><!-- /container -->

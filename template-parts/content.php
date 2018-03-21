<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dragon
 */

?>

<!-- blogpost start -->
<article id="post-<?php the_ID(); ?>" <?php post_class("blogpost"); ?> style="border: solid .5px lightgray;">
	<div class="overlay-container">
		<!-- ======================================================================
			Thumbnail
		====================================================================== -->
		<?php if(has_post_thumbnail()) { ?>
			<?php the_post_thumbnail('post-thumbnail', array( 'class' => "")); ?>
		<?php } else { ?>
			<!-- Display the default image if EBKD didn't choose one. -->
			<img src="/wp-content/uploads/2018/03/ebkd-site-logo.jpg" 
					 class="img-responsive" 
					 alt="East Bay Karate-Do Logo" />
		<?php } ?>
		
		<?php 
			if ( is_single() ) :
				// Do nothing.
			else :
				echo '<a class="overlay-link" href="' . esc_url( get_permalink() ) . '"><i class="fa fa-link"></i></a>';
			endif; 
		?>
	</div>
	
	<header>
		<!-- ======================================================================
			Title
		====================================================================== -->
		<?php 
			if ( is_single() ) :
				the_title( '<h2>', '</h2>' );
			else :
				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; 
		?>
		
		<div class="post-info">
			<span class="post-date">
				<i class="icon-calendar"></i>
				<span><?php the_date("M j, Y"); ?></span>
			</span>
			<span class="submitted"><i class="icon-user-1"></i> by <?php the_author(); ?></span>
		</div>
	</header>
	
	<div class="blogpost-content">
		<!-- ======================================================================
			Content
		====================================================================== -->
		<p><?php the_excerpt(); ?></p>
	</div>
	<?php if (!is_single()) : ?>
		<footer class="clearfix">
			<div class="tags pull-left"><i class="icon-tags"></i> <?php the_category(', '); ?></div>
			<?php echo '<div class="link pull-right"><i class="icon-link"></i><a href="' . esc_url( get_permalink() ) . '">Read More</a></div>'; ?>
		</footer>
	<?php else : ?>
		<!-- Do nothing. -->
	<?php endif; ?>
</article>
<!-- blogpost end -->



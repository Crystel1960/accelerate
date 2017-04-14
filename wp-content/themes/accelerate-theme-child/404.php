<?php
/**
 * The template for displaying 404 pages (Not Found)
 /**
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<div class="oops-wrapper">
			<figure class="taxi align-left">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404taxi.gif" alt="404 Taxi" style="width:400px;height:400px;margin-left:7%;">
                   </figure>

				<div class="oops-content align-right">
					<h2><?php _e( 'Looks like you took a wrong turn...', 'accelerate' ); ?></h2>
					<p><?php _e( 'Sorry, this page no longer exists, never existed or has been moved.
					We feel like complete jerks for totally misleading you.', 'accelerate' ); ?></p>
					<p><?php _e( 'Feel free to take a look around our <a href="http://localhost:8888/accelerate/blog"><span>blog</span></a> or some of our featured
					<a href="http://localhost:8888/accelerate/case-studies"><span>work</span></a>.', 'accelerate' ); ?></p>

					<?php get_search_form(); ?>
				</div>

				</div><!-- .opps-content -->
			</div><!-- .oops-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

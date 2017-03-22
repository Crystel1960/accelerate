<?php /* Template Name: About */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<div id="about" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
        <div class='homepage-hero'>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</section>

<?php get_footer(); ?>

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
	<div class="about"><div id="content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<h2><?php the_content(); ?></h2>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- homepage -->

			<?php while ( have_posts() ) : the_post();
				$our_services = get_field('our_services');
				$services_content = get_field('services_content');
				$icon_1 = get_field('icon_1');
				$title_field_1 = get_field('title_field_1');
				$description_1 = get_field('description_1');
				$icon_2 = get_field('icon_2');
				$title_field_2 = get_field('title_field_2');
				$description_2 = get_field('description_2');
				$icon_3 = get_field('icon_3');
				$title_field_3 = get_field('title_field_3');
				$description_3 = get_field('description_3');
				$icon_4 = get_field('icon_4');
				$title_field_4 = get_field('title_field_4');
				$description_4 = get_field('description_4');
				$size="full";
				?>

				<div class="services">
				<div class="top">
					<h4><?php echo $our_services; ?></h4>
					<p><?php echo $services_content; ?></p>
				</div>

<!-- content strategy -->
				<div class="fields-one">
					<h4><?php echo $title_field_1; ?></h4>
					<p><?php echo $description_1; ?></p>
						<?php if($icon_1) { ?>

						<div class="i-one">
							<?php echo wp_get_attachment_image ($icon_1, $size); ?>
						<?php } ?>
					</div>
					</div>

<!-- Influencer mapping -->
<div class="fields-two">
					 <h4><?php echo $title_field_2; ?></h4>
					 <p><?php echo $description_2; ?></p>
							<?php if($icon_2) { ?>

			<div class="i-two">
		<?php echo wp_get_attachment_image ($icon_2, $size); ?>
								<?php } ?>
								</div>
							</div>

<!-- social media strategy -->
<div class="fields-three">
				 <h4><?php echo $title_field_3; ?></h4>
				<p><?php echo $description_3; ?></p>
						<?php if($icon_1) { ?>

							<div class="i-three">
						<?php echo wp_get_attachment_image ($icon_3, $size); ?>
						<?php } ?>
					</div>
					</div>

<!-- design and development -->
<div class="fields-four">
					<h4><?php echo $title_field_4; ?></h4>
					<p><?php echo $description_4; ?></p>
						<?php if($icon_1) { ?>

						<div class="i-four">
						<?php echo wp_get_attachment_image ($icon_4, $size); ?>
							<?php } ?>
						</div>
						</div>


			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

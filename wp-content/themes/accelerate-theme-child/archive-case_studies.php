<?php
/**
 * The template for displaying the archive of case studies page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">

			
			<?php while ( have_posts() ) : the_post();
				$services= get_field('services');
				$link = get_field('site_link');
				$image_1 = get_field('image_1');
				$size = "full";
				?>

				<div class="container">
						<aside class="case-study-sidebar">
								<h2><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h2>
								<h5><?php echo $services; ?></h5>
								<?php the_excerpt(); ?>
								 <p class="read-more-link"><strong><a href="<?php the_permalink(); ?>" target="_blank">View Project &#8250;</a></strong></p>
							</aside>
				<div class="case-study-images">
						<a href="<?php the_permalink(); ?>" target="_blank">
							<?php if($image_1) {
								echo wp_get_attachment_image( $image_1, $size );
							} ?>
						</a>
				</div>
			</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying single case study
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="site-content">
  <div class="main-content" role="main">

			<?php while ( have_posts() ) : the_post();
          $service_icon= get_field('service_icon');
          $size = "full"; ?>

        <div class="container">
          <aside class="about">
                <h2><?php the_title(); ?></h2>



        	       <?php the_content(); ?>
               </aside>




        <div class="about-images">
            <?php if($service_icon) {
                echo wp_get_attachment_image( $service_icon, $size );
              } ?>


        </div>

        </div>





			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>

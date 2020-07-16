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
 * @since Accelerate Marketing 2.0
 */

 get_header(); ?>


<div id="primary" class="home-page hero-content">
	<div class="main-content" role="main">
		  <div id="about-page-top">
		      <?php while ( have_posts() ) : the_post();
			       $about_blurb=get_field("about_blurb")
			          ?>
                <h3><?php echo $about_blurb; ?></h3>
<?php endwhile; // end of the loop. ?>
        </div>
	 </div>
 </div>


<div id="primary" class="site-content">
    <section id="top-middle">
      <?php query_posts('post_type=about_items&name=our-services'); ?>
          <?php while ( have_posts() ) : the_post(); ?>
              <h4>	<?php the_title(); ?> </h4>
                    <?php the_content(); ?>
                  <?php endwhile; // end of the loop. ?>
                  <?php wp_reset_query(); ?>
        </section>
      </div>

<div class="main-content">
    <section class="about-page-middle">

      <?php query_posts('post_type=about_items&monthnum=7&order=ASC');?>
      <?php while ( have_posts() ) : the_post();
      $about_icons=get_field("about_icons");
      $about_icons_right=get_field("about_icons_right");
      $size="medium";
      ?>

        <aside class="about-article">
          <div class="about-images">

            <figure>
              <?php if($about_icons) {
              echo wp_get_attachment_image( $about_icons, $size );
              } ?>
            </figure>
          </div>

          <div class="about-images2">
            <figure>
            <?php if($about_icons_right) {
              echo wp_get_attachment_image( $about_icons_right, $size );
            } ?>
            </figure>
          </div>

                <h4><?php the_title(); ?></h4>
              <p><?php the_content(); ?></p>
                  </aside>







          <?php endwhile; // end of the loop. ?>
				          <?php wp_reset_query(); ?>

                  </section>
              
    <div class="site-content">
      <section id="end-about">
          <h3>Interested in working with us?</h3>
          <button id="contact-button">
            Contact us
          </button>
        </section>

    </div>
</div>

 <?php get_footer(); ?>

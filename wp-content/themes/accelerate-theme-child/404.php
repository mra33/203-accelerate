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

	<div id="primary" class="site-content">
		<div class="main-content" role="main">


      <div id="map">
        <img src="http://localhost:8888/accelerate/wp-content/uploads/2020/07/woman-with-map-scaled.jpg">
      </div>

      <section class="fourpage">
        <h1>Whoops, took a wrong turn.
        </h1>

      <p>
        Sorry, this page no longer exists, never existed or has been moved.
        We feel like complete jerks for totally misleading you.
      </p>

        <p>
          Feel free to take a look around our  <strong><a href="<?php echo site_url('/blog/') ?>">blog</a></strong> or
        some of our <strong><a href="<?php echo site_url('/case-studies/') ?>"> featured work </a></strong>.
      </p>

    </section>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/**
 * The template for displaying the about page
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="about-page hero-content">
	<div class="about-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->

	<article class="intro">
		<h6>Our Services</h6>
		<p>We take pride in our clients and the content we create for them. <br>Here is a brief overiew of our offered services.</p>
	</article>

<div id="about_services">
	<section class="clearfix">
		<?php while ( have_posts() ) : the_post();
            $title_1 = get_field('title_1');
            $content_1 = get_field('content_1');
            $size = "full";
			$image_1 = get_field('image_1'); ?>

		<section id="services_1_text">
            <h2><?php echo $title_1; ?></h2>
			<p><?php echo $content_1; ?></p>
		</section>

		<section id="services_1_image">
			<?php if($image_1){
            echo wp_get_attachment_image( $image_1, $size );
			} ?>
		</section>

		<?php endwhile; // end of the loop. ?>
	</section>

	<section class="clearfix">
		<?php while ( have_posts() ) : the_post();
            $title_2 = get_field('title_2');
            $content_2 = get_field('content_2');
            $size = "full";
			$image_2 = get_field('image_2'); ?>

		<section id="services_2_text">
            <h2><?php echo $title_2; ?></h2>
			<p><?php echo $content_2; ?></p>
		</section>

		<section id="services_2_image">
			<?php if($image_2){
            echo wp_get_attachment_image( $image_2, $size );
			} ?>
		</section>

		<?php endwhile; // end of the loop. ?>
	</section>

	<section class="clearfix">
		<?php while ( have_posts() ) : the_post();
            $title_3 = get_field('title_3');
            $content_3 = get_field('content_3');
            $size = "full";
			$image_3 = get_field('image_3'); ?>

		<section id="services_3_text">
            <h2><?php echo $title_3; ?></h2>
			<p><?php echo $content_3; ?></p>
		</section>

		<section id="services_3_image">
			<?php if($image_3){
            echo wp_get_attachment_image( $image_3, $size );
			} ?>
		</section>

		<?php endwhile; // end of the loop. ?>
	</section>		

	<section class="clearfix">
		<?php while ( have_posts() ) : the_post();
            $title_4 = get_field('title_4');
            $content_4 = get_field('content_4');
            $size = "full";
			$image_4 = get_field('image_4'); ?>

		<section id="services_4_text">
            <h2><?php echo $title_4; ?></h2>
			<p><?php echo $content_4; ?></p>
		</section>	

		<section id="services_4_image">
			<?php if($image_4){
            echo wp_get_attachment_image( $image_4, $size );
			} ?>
		</section>

		<?php endwhile; // end of the loop. ?>
	</section>

</div>

<nav id="navigation" class="navigation">
	<div class="message">
		<h1>Interested in working with us?</h1>
		<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
	</div>
</nav>

<?php get_footer(); ?>

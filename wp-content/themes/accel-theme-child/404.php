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

	<div class="fourohfour">
        <h1>UH-OH! Auntie Em?</h1>
        <h2>I have a feeling we're not in Accelerate anymore!</h2>
    </div>
    
    <nav id="navigation" class="container">
	    <div class="message" id="kansas">
            <h1>Take me back!</h1>
	        <a class="button" href="<?php echo site_url('/home/') ?>">There's no place like home ...</a>
		</div>
    </nav>

<?php get_footer(); ?>

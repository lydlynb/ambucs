<?php
/**
* Template Name: About Page
*
* The template for displaying services offered.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>

				<?php while ( have_posts() ) : the_post();?>
						<div class="general-content">
								<?php the_content(); ?>
						</div>
				<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>

<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post();?>
			<div class="general-content">
				<?php the_content(); ?>
			</div>
	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>

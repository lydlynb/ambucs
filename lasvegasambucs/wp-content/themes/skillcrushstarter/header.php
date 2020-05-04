<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="A website for Las Vegas Ambucs">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header class="page-header container">
			<a href="<?php echo site_url(); ?>" class="top-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ambucs-logo.png" alt="Ambucs Logo">
			</a>

			<nav class="top-nav">
				<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
			</nav>
			<a class="toggle-nav" href="#">&#9776;</a>

		</header>

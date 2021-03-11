<?php

/**
 * Template Name: Front Template
 *
 */

use function Mezu\view;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?= view('hero')->render(); ?>
	<?= view('features')->render(); ?>
	<?= view('meals')->render(); ?>
	<?= view('steps')->render(); ?>
	<?= view('cities')->render(); ?>
	<?= view('testimonials')->render(); ?>
	<?= view('plans')->render(); ?>
	<?= view('contact')->render(); ?>
	<?= view('footer')->render(); ?>

	<?php wp_footer(); ?>

</body>

</html>

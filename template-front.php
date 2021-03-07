<?php

/**
 * Template Name: Front Template
 *
 */

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

	<header>
		<nav>
			<div class="row">
				<img src="<?= get_theme_file_uri('resources/content/img/logo-white.png'); ?>" alt="Omnifood Logo" class="logo">
				<ul class="main-nav js--main-nav">
					<li><a href="#features">Food delivery</a></li>
					<li><a href="#works">How it works</a></li>
					<li><a href="#cities">Our cities</a></li>
					<li><a href="#plans">Sign up</a></li>
				</ul>
				<a class="mobile-nav-icon js--nav-icon">
					<i class="ion-navicon-round"></i>
				</a>
			</div>
		</nav>
		<div class="hero-text-box">
			<h1>Goodbye junk food.<br>Hello super healthy meals.</h1>
			<a class="btn btn-full js--scroll-to-plans" href="#">I'm hungry</a>
			<a class="btn btn-ghost js--scroll-to-start" href="#">Show me more</a>
		</div>
	</header>

	<?php wp_footer(); ?>

</body>

</html>

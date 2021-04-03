<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php if (has_action('app/theme/header')) : ?>
        <header class="site-header">
            <?php do_action('app/theme/header'); ?>
        </header>
    <?php endif; ?>

    <?php if (has_action('app/theme/main')) : ?>
        <div class="content-area">
            <main class="site-main">
                <?php do_action('app/theme/main'); ?>
            </main>
        </div>
    <?php endif; ?>

    <?php if (has_action('app/theme/footer')) : ?>
        <footer class="site-footer">
            <?php do_action('app/theme/footer'); ?>
        </footer>
    <?php endif; ?>

    <?php wp_footer(); ?>

</body>

</html>

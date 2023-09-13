<?php
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'blog_theme'); ?></a>

        <header id="masthead" class="site-header">
            <nav class="container-fluid navbar navbar-light navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand ms-5" href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name'); ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'blog-theme-menu',
                                'menu_id'        => 'primary-menu',
                                'menu_class'        => 'navbar-nav ms-auto me-5',
                                'container' => null,
                            )
                        );
                        ?>
                    </div>
                </div>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

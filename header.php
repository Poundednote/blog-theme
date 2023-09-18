<?php
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'blog_theme'); ?></a>

        <header id="masthead" class="site-header">
            <nav class="container-fluid navbar py-4 navbar-expand-lg">
                <div class="container-fluid mx-5">
                    <a class="navbar-brand ms-5" href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name'); ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse me-5 navbar-collapse" id="navbarNav">
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

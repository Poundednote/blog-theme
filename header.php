<?php
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blog_theme' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
            endif;
            $blog_theme_description = get_bloginfo( 'description', 'display' );
            if ( $blog_theme_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $blog-theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->

        <nav class="navbar navbar-collapse navbar-dark bg-dark">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blog-theme' ); ?></button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'menu_class'        => 'navbar-nav',
                    'walker' => new custom_boostrap_class_walker,
                )
            );

            class custom_boostrap_class_walker extends Walker_Nav_Menu {
                public function start_el(&$item_output, $item, $depth = 0, $args = null, $id = 0) {
                    $item_output = preg_replace('/<li /', '<li class="nav-item"', $item_output, 1);
                    $item_output = preg_replace('/<a /', '<a class="nav-link"', $item_output, 1);
                    return $item_output;
                }
            }
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

<doctype

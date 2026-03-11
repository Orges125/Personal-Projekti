<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="header-container">
        <h1 class="site-title">
            <a href="<?php echo site_url('/'); ?>">Hotel Aurora</a>
        </h1>

        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'main-menu'
            ));
            ?>
        </nav>
    </div>
</header>
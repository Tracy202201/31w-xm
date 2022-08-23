<?php
/**
 * Template header
 * Ve template est intégré dans tous les modèles de thème
 * @link : https://developer.wordpress.org/themes/
 * @package : 31w
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <?php
    if (is_front_page()) : ?>
        <section class="site">
        <?php endif; ?>

        <?php
        if (!is_front_page()) : ?>
            <section class="site">
            <?php endif; ?>
            <header class="site__header">

                <section class="site__branding">
                    <a href="<?php echo esc_url(home_url()); ?>">
                     <img src="<?php echo get_template_directory_uri(); ?>/logo.png" width="100" height="100" alt="Logo">
                    </a>

                    <!-- Menu en haut -->
                    
                    <?php wp_nav_menu(array(
                        'menu' => 'nav bar haut',
                        'container' => 'nav',
                        'container_class' => 'menu__nav__bar__haut',
                        'menu_class' => 'menu__nav__bar__haut__ul',
                    )) ?>
                    

                    <h1 class="site-title">Programme d'intégration multimédia</h1>
                </section>

            </header>

            <section class="site__sidebar">
                <!-- burger -->
                <input type="checkbox" name="chk-burger" id="chk-burger">
                <!--ajouter image burger https://svgbox.net/iconset/hero-solid -->
                <label for="chk-burger" id="burger"> 
                <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=000000" width="32" height="32">
                </label>
                
                
                <?php wp_nav_menu(array(
                    'menu' => 'menu sidebar',
                    'container' => 'nav',
                    'container_class' => 'menu__sidebar',
                    'menu_class' => 'menu__sidebar__ul',
                )) ?>
            </section>
            
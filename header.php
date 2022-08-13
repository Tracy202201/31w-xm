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
	<section class="site2">
	<?php endif;?>
	<?php 
	if (!is_front_page()) : ?>
	<section class="site">
	<?php endif;?>	
            
            <header class="site__header">
                <section class="site__branding">
                    <h1>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/tittle.png" width="150" height="150" alt="Logo">
                        </a>
                    </h1>
                    <h4>
                        <?= bloginfo('description'); ?>
                    </h4>
                </section>
               
            </header>

           
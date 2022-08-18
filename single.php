<?php get_header(); ?>
<section class="site__sidebar">
<img src="<?php echo get_template_directory_uri(); ?>/logo.png" width="100" height="100" alt="Logo"> 
            <?php wp_nav_menu(array(
                    'menu' =>'',
                    'container' =>'nav', 
                    'container_class' =>'menu__sidebar',
                    'menu_class' => 'menu__sidebar__ul',
            ))?>
        </section>
<section class="site__main">
<?php
                 $titre = get_the_title();
                 $nom =   substr($titre, 8, -6);
                 $sigle = substr($titre, 0, 8);
                 $heure = substr($titre,-6);
             ?>
<h1><?=$nom; ?></h1>
<?php
        if ( have_posts() ) :
            while ( have_posts()) : the_post()?>
             <p><?php the_content();?></p> 
             
             <code><?=$sigle; ?></code>
             
        <?php endwhile;?>
    <?php endif;?>
</section>
<?php get_footer(); ?>
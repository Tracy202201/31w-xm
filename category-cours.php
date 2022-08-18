<?php get_header(); ?>
<section class="site__sidebar"> 
            <?php wp_nav_menu(array(
                    'menu' =>'',
                    'container' =>'nav', 
                    'container_class' =>'menu__sidebar',
                    'menu_class' => 'menu__sidebar__ul',
            ))?>
</section>
<section class="site__main2">
    <h1>Category Cours</h1>

    <div class="article_section">
        <?php
            if ( have_posts() ) :
            while ( have_posts()) : the_post()?>
            <a href="<?= get_permalink(); ?>">
            <div>
                <?php
                    $title = get_the_title();
                    $short_title = substr($title, 0, 7);
                    $title_2 = substr($title, strlen($short_title), -6)
                ?>
                    <h4><span><?= $short_title; ?></h4>
                    <h2></span><?= $title_2 ?></h2>
                <p>
                
                    <?= wp_trim_words(get_the_content(), 48); ?>
                
                </p>
                <small> >> En savoir plus</small>
            </div>
            </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

    <?php get_footer(); ?>
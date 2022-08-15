<?php get_header(); ?>
<section class="site__main2">
    <h1>Catalogue de cours</h1>

    <section class="article_section">
        <div>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
        </div>
            <a href=" <?= get_permalink() ?> "><?php the_field('titre')?>
            <h3><?php the_field('sous_titre')?></h3>
            <p><?php the_field('resume')?></p>

                <article class="article_cours" ­>
                    <h2><?php the_title(); ?></h2>
                    <?= wp_trim_words(get_the_content(), 20, $lien) ?>
                </article>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_nav_menu(array(
                    'menu' => 'accuei',
                    'container' => 'nav',
                )) ?>
    </section>
   
    <?php get_footer(); ?>
<?php get_header(); ?>
<section class="site__main2">
    <h1>Catalogue de cours</h1>

    <section class="article_section">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
             <a href="<?= get_permalink() ?>">
                <article class="article_cours" ­>
                    <h2><?php the_title(); ?></h2>

                 <?php the_field('titre'); ?>
            <h3><?php the_field('sous_titre'); ?></h3>
            <p><?php the_field('resume'); ?></p>
            </a>

                    <?= wp_trim_words(get_the_content(), 20, $lien) ?>
                </article>

            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <?php get_footer(); ?>
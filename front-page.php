<?php get_header(); ?>
<section class="site__main2">
    <h1>Catalogue de cours</h1>

    <section class="article_section">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
            <h2><a href=" <?= get_permalink() ?> "><?php the_field('titre')?></a></h2>
            <h3><?php the_field('sous_titre')?></h3>
            <p><?php the_field('resume')?></p>
                <?php
                $lien = '<br> <a class="bouton" href="'
                    . get_permalink() . '"> '
                    . get_the_title() . ' </a>';
                ?>

                <article class="article_cours" ­>
                    <h2><?php the_title(); ?></h2>
                    <?= wp_trim_words(get_the_content(), 20, $lien) ?>
                </article>

            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <?php get_footer(); ?>
<?php get_header(); ?>
<section class="site__main">
    <h1>Accueil</h1>

    <div class="blocs__horizontaux">
        
        <?php if (have_posts()) :
            while (have_posts()) : the_post() ?>
                <article>
                <h2><a href="<?= get_permalink() ?>"><?php the_field('titre'); ?></a></h2>
                <h3><?php the_field('sous_titre'); ?></h3>
                <p><?php the_field('resume'); ?></p>
            </article>
            <?php endwhile; ?>
        <?php endif; ?>  
    </div> <!-- FIN <div class='block__horizontaux'> -->

    <section class="site__sidebar">
        <?php wp_nav_menu(array(
            'menu' => 'accueil',
            'container' => 'nav'

        )) ?>
    </section>
</section>

<?php get_footer(); ?>
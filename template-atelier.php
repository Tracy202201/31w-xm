<?php
   /**
    * Template name: atelier
    * créer la page template en php
    *  Créer le menu ACF avec comme template cette page
    * Créer une page wordpress avec ce template
    * Ajouter nom du menu dans menu__nav__bar__haut
    */
?>
<!-- structure d'une page actualite -->
<?php get_header(); ?>

<section class="site__main">
    <mark>Atelier</mark>
    <div class=''>
        <?php if (have_posts()):  
            while ( have_posts()) : the_post()?>
        
            <article class="annonce__article">
                <h1><?= get_the_title(); ?></h1>
                <?php the_content(); ?>
                <?php 
                    $endroit = get_field('endroit');
                    if( !empty( $endroit ) ): ?>
                        <h3><?=$endroit ?></h3>
                    <?php endif; 
                    $description = get_field('description');
                    if( !empty( $description ) ): ?>
                        <p><?=$description ?></p>
                    <?php endif; 
                    $image = get_field('image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif;
                    $endroit = get_field('endroit');
                    if( !empty( $endroit ) ): ?>
                        <p><?=$endroit ?></p>
                    <?php endif;
                    $date = get_field('date');
                    if( !empty( $date ) ): ?>
                        <p><?=$date ?></p>
                    <?php endif;
                    $heure = get_field('heure');
                    if( !empty( $heure ) ): ?>
                        <p><?=$heure ?></p>
                    <?php endif;
                    $organisateur = get_field('organisateur');
                    if( !empty( $organisateur ) ): ?>
                        <p><?=$organisateur ?></p>
                <?php endif;?>
            </article>
            </a>
        <?php endwhile;?>
    <?php endif;?>
</div>
</section>
<?php get_footer(); ?>
<?php
/**
 * Template name: Évenement -atelier
 */
?>
<?php get_header() ?>  

<main class="site__main">

   <?php //the_post_thumbnail("annonce"); ?>
   <mark>Événement à venir</mark>
       <?php if (have_posts()): the_post(); ?>
      <article class="annonce__article">
         <h1><?= get_the_title() ?></h1>
         <?php the_content(); ?>
         <?php
         $animateur = get_field("animateur");
         $type = get_field("type");
         $date = get_field("date");
         $duree = get_field("duree");
         $jours = get_field("jours");
         $nombreheure = get_field("nombreheure");
         $niveau = get_field("niveau");
         $lieu = get_field("lieu");
         $prix = get_field("prix");

         echo "<p class='annonce__resume'>" . 'Le animateur' . $animateur . "</p>";
         echo "<p class='annonce__type'>Le type: " . $type . "</p>";
         echo "<p class='annonce__date'>La date: " . $date . "</p>";
         echo "<p class='annonce__duree'>Le duree: " . $duree . "</p>";
         echo "<p class='annonce__jours'>Les jours: " . $jours. "</p>";
         echo "<p class='annonce__nombreheure'>Les nombre heure: " . $nombreheure. "</p>";
         echo "<p class='annonce__niveau'>Le niveau: " . $niveau. "</p>";
         echo "<p class='annonce__lieu'>L'lieu: " . $lieu . "</p>";
         echo "<p class='annonce__prix'>Le prix " . $prix. "</p>";

        // $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
      
         ?>
      </article>
      <?php endif ?>
  
</main>
<?php get_footer() ?>
<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header();?>
<main>
<?php 
    if(have_posts()):
        while (have_posts()) : the_post(); ?>
    <h1>
        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
    </h1>
    <?php //the_content();  // affiche le contenu complet de l'article ?>
    <?php //the_excerpt(); // affiche résumé de l'article ?>
    <?= wp_trim_words(get_the_excerpt(), 10, "&#8658;") ?>
    <hr>
        
<?php    
        endwhile;
    endif;
?>
    <!-- <h1> Bienvenue au cours de 4w4</h1> -->
</main>
<?php get_footer();?>
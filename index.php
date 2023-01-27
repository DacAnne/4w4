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
        while (have_posts()) : the_post();
        the_title('<h2>','</h2>');
        the_content(); 
?>
        <hr>
<?php    
        endwhile;
    endif;
?>
    <!-- <h1> Bienvenue au cours de 4w4</h1> -->
</main>
<?php get_footer();?>
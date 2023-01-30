<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header();?>
<main>
    <h3>front-page.php</h3>
<?php 
    if(have_posts()):
        while (have_posts()) : the_post();
        echo '<h1> . get_the_title() . </h1>';

        // the_content(); 
?>
        <hr>
<?php    
        endwhile;
    endif;
?>
    <!-- <h1> Bienvenue au cours de 4w4</h1> -->
</main>
<?php get_footer();?>
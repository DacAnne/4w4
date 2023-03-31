
<main>
    <h3>Search.php</h3>
    <h2>Résultats de la recherche</h2>
<?php 
    if(have_posts()):
        while (have_posts()) : the_post();
        the_title('<h4>','</h4>');?>
        
        <?= wp_trim_words(get_the_excerpt(), 50, "[...]");?>
        <hr>
<?php    
        endwhile;
    endif;
?>
    <!-- <h1> Bienvenue au cours de 4w4</h1> -->
</main>
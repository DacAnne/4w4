<?php
/**
 * Modèle category par défaut
 * 
 */
?>
<?php get_header();?>
<main>

    <h2>Résultats de la recherche</h2>

<?php
    if(have_posts()):
        while (have_posts()) : the_post();

        if (in_category('cours')){    
            $ma_categorie = 'cours';
        }
        else{
            $ma_categorie = '4w4';
        }
        get_template_part('template-parts/search', $ma_categorie);
      
        endwhile;
    endif;
?>

</main>
<?php get_footer();?>
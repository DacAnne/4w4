<?php
/**
 * Modèle par défaut
 * 
 */
?>

<?php get_header();?>

<main>
    <div class="titre">
        <h1><a href="<?= bloginfo('url')?>"><?= bloginfo('name')?></a></h1>
        <h2><?= bloginfo('description')?></h2>
    </div>

    <section class="blocflex">
        <?php 
            if(have_posts()):
                while (have_posts()) : the_post();
                if (in_category('galerie')){
                    get_template_part('template-parts/categorie', 'galerie');   
                }
                else{
                    get_template_part('template-parts/categorie', '4w4');   
                }
               
                endwhile;
            endif;
        ?>
    </section>
    <!-- <h1> Bienvenue au cours de 4w4</h1> -->
</main>
<?php get_footer();?>
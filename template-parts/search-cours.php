<?php 
/**
 * Template part pour afficher un blocflex article cours
 */
    $titre = get_the_title(); 
    $sigle = substr($titre, 0, 7);
    $titre_long = substr($titre,7,-5);
    $duree = substr($titre, strpos($titre, '('));
?>
    <article class="cours">
        <div class="information">
            <h5><?= $titre_long ?></h5>
            <p>Sigle: <?= $sigle ?> </p>
            <p><?= $duree ?></p>
            <p>Enseignant: <?php the_field('enseignant'); ?></p>
            <p>Domaine: <?php the_field('domaine'); ?> 
        </div>
        <div class="description"> <p><?= wp_trim_words(get_the_excerpt(), 45, "[...]") ?></p></div>
    </article>

    <hr>



        
       
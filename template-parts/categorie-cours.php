<?php 
/**
 * Template part pour afficher un blocflex article cours
 */
    $titre = get_the_title(); 
    $sigle = substr($titre, 0, 7);
    $titre_long = substr($titre,7,-5);
    // $duree = "60"
    $duree = substr($titre, strpos($titre, '('));
    // strpost($titre, '(') permet de rouver la position du caractère. '('
?>
<article class="blocflex__article">
        <h2><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h2>
        <h5><?= $titre_long ?></h5>
        <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
        <h6><?= $duree ?></h6>
        <p><?php the_field('enseignant'); ?></p>
        <p><?php the_field('domaine'); ?></p>

</article>
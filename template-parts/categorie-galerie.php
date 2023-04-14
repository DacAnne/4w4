<?php 
/**
 * Template part pour afficher la galerie dans la page d'accueil
 */
   
?>
<article class="blockflex__galerie">
    <!-- <input type="checkbox" id="replis"> -->
        <?= the_content(); ?>
    <!-- <label class="arrow" for="replis"></label> -->

    <?php
    // the_content(); affiche tout le contenu global du post
    // the_excerpt(); affiche la partie textuelle (résumé avec extrait) wp_trim_words pour raccourcir
    ?>

</article>

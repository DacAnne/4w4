<?php
/**
 * Template name: atelier
 *
 */
?>

<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<?php    
    the_post_thumbnail('thumbnail');
?>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<div>
<p>L'adresse de l'evénement<?php the_field('adresse'); ?></p>
<p>La date et l'heure de l'événement<?php the_field('date'); ?></p>    
<p>La date et l'heure de l'événement<?php the_field('heure'); ?></p> 
<p>La date et l'heure de l'événement<?php the_field('duree'); ?></p> 
<p>La date et l'heure de l'événement<?php the_field('formateur'); ?></p> 
</div>

<?php endif;?>
</main><!-- #main -->
<?php
get_footer();
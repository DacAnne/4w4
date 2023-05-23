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
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<table>
  <tr> 
    <th>Date</th>
    <th><?php the_field('adresse'); ?></th>
  </tr>
  <tr>
    <td>Heure</td>
    <td><?php the_field('heure'); ?></td>
  </tr>
  <tr>
    <td>Date</td>
    <td><?php the_field('date'); ?></td>
  </tr>
  <tr>
    <td>Durée</td>
    <td><?php the_field('duree'); ?></td>
  </tr>
  <tr>
    <td>formateur</td>
    <td><?php the_field('formateur'); ?></td>
  </tr>
</table>
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();
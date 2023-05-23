<aside class="site__aside">
<?php    
    the_post_thumbnail('thumbnail');
?>
    <h4>Nos ateliers en 2023</h4>
    <?php 
    
    wp_nav_menu(array(
            "menu" => "atelier",
            "container => nav")); ?>
</aside>
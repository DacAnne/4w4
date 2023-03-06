<aside class="site__aside">
    <h4>Menu secondaire</h4>
    <?php 
    $ma_categorie = "4w4";
    if(in_category('cours')){
        $ma_categorie = "cours"; 
    }
    wp_nav_menu(array(
            "menu" => $ma_categorie,
            "container => nav")); ?>
</aside>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<!-- <?php
    $nouvelle_classe = "";
    if(is_front_page()){
        $nouvelle_classe = 'no-aside';
    } 
?> -->
<!-- <body class="site  <?= $nouvelle_classe ?>"> -->
<body class="site  <?php echo (is_front_page()?'no-aside':'') ?>">
    <header class="site__header">
        <section class="site__header__logo">
            <div class="menu__recherche">
                <input type="checkbox" id="chkMenu">
                <?php the_custom_logo(); ?>
                <?php wp_nav_menu(array(
                    "menu" => "entete",
                    "container" => "nav"
                )) ?>
            </div>    
            <?php get_search_form() ?>
            <label class="burger" for="chkMenu"><img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32"></label>
        </section>
        
    </header>

    <?php 
    if (is_page_template('template-parts/template-atelier.php')){
        get_template_part("template-parts/aside-atelier");
    } 
    else if (! is_front_page() && !is_page_template('template-atelier.php')){
        get_template_part("template-parts/aside");
    } 
    ?>



    
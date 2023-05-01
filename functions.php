<?php
function ajouter_styles()
{

    wp_enqueue_style(
        'style-principal', // identificateur du link css
        get_template_directory_uri() . '/style.css', // endroit où se trouve le fichier style.css
        array(), //les fichiers css qui dépendent de style.css
        filemtime(get_template_directory() . '/style.css') // version de notre style.css
    );

    wp_enqueue_style("style-google-font", "https://fonts.googleapis.com/css2?family=Quicksand&display=swap", false);
}

add_action('wp_enqueue_scripts', 'ajouter_styles');


/*--------------------------------------------------------------------- */
function enregistrement_nav_menu()
{
    register_nav_menus(array(
        'primary_menu' => 'Menu principal',
        'footer'  => 'Menu pied de page',
    ));
}
add_action('after_setup_theme', 'enregistrement_nav_menu', 0);

/*--------------------------------------------------------------------- Modification des choix du menu "cours" */

function personnalisation_menu_item_title($title, $item, $args, $depth)
{
    // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
    if ($args->menu == 'cours') {
        // Modifier la longueur du titre en fonction de vos besoins
        $sigle = substr($title, 0, 7);
        $title = substr($title, 7);
        $title = "<code>" . $sigle . "</code>" . "<p> : " . wp_trim_words($title, 2, ' ... ') . "</p>";  // on garde uniquement 3 mots pour le titre du choix
    }
    if (substr($title, 0, 1) == '0') {
        $title = substr($title, 1);
    }
    return $title;
}
add_filter('nav_menu_item_title', 'personnalisation_menu_item_title', 10, 4);
/**
 * Pour ajouter la description des évènements dans le menu évènement 
 */
function ajouter_description_class_menu( $items, $args ) {
    // Vérifier si le menu correspondant est celui que vous souhaitez modifier
    if ( 'evenement' === $args->menu ) {
        foreach ( $items as $item ) {
            //var_dump($item);
            // Récupérer le titre, la description et la classe personnalisée
            $titre = $item->title;
            $description = $item->description;
            $description = substr($description, 0, 10);
            //$classe = $item->class; // Remplacer par le nom de la classe souhaitée
            

            // Ajouter la description et la classe personnalisée à l'élément de menu
            $item->title .= '<span >  - ' . $description . '...</span>';
            // $item->title .= '<span class="' . $classe . '">' . $description . '</span>';
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'ajouter_description_class_menu', 10, 2 );

/********************************************* add_theme_support() */
add_theme_support('title-tag');
add_theme_support(
    'custom-logo',
    array(
        'height' => 150,
        'widht' => 150
    )
);
add_theme_support( 'post-thumbnails' );
add_theme_support('custom-background');

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal($query)
{
    if ($query->is_home() && $query->is_main_query() && !is_admin()) {
        $query->set('category_name', '4w4');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'cidweb_modifie_requete_principal');
    // écouteur de hook


/* -------------------------------------------------- Enregistrer le sidebar ---*/
function enregistrer_sidebar() {
    register_sidebar( array(
        'name' => __( 'Footer 1', '4w4-dac-anne' ),
        'id' => 'footer_1',
        'description' => __( 'Une zone afficher des widgets dans la footer.', '4w4-dac-anne' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer 2', '4w4-dac-anne' ),
        'id' => 'footer_2',
        'description' => __( 'Une zone afficher des widgets dans la footer.', '4w4-dac-anne' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer 3', '4w4-dac-anne' ),
        'id' => 'footer_3',
        'description' => __( 'Une zone afficher des widgets dans la footer.', '4w4-dac-anne' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'Travaux Ecole', '4w4-dac-anne' ),
        'id' => 'travaux_ecole',
        'description' => __( 'Une zone afficher des widgets dans la footer.', '4w4-dac-anne' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __( 'Travaux Maison', '4w4-dac-anne' ),
        'id' => 'travaux_maison',
        'description' => __( 'Une zone afficher des widgets dans la footer.', '4w4-dac-anne' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'enregistrer_sidebar' );
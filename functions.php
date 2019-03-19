<?php
add_theme_support( 'post-thumbnails' );

function market_styles()
{
   //  register/enqueue
    // On intègre le css ici

   wp_enqueue_style('market_styles', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );


   if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

       //  register/enqueue
       // On intègre le js ici
       wp_deregister_script('jquery');

       wp_register_script('burger', get_template_directory_uri() . '/js/burger.js','' ,'' ,'', true);
       wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js','' ,'' ,'', true);
       wp_register_script('main', get_template_directory_uri() . '/js/main.js','' ,'' ,'', true);

       wp_enqueue_script('jquery');
       wp_enqueue_script('burger');
       wp_enqueue_script('main');
   }
}
add_action('wp_enqueue_scripts', 'market_styles');

function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>
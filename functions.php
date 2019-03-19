<?php
add_theme_support( 'post-thumbnails' );
add_theme_support('widgets');

function market_styles()
{
   //  register/enqueue
    // On intègre le css ici


    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
    wp_enqueue_style('market_styles', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');


   if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

       //  register/enqueue
       // On intègre le js ici
       wp_deregister_script('jquery');


       wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js','' ,'' ,'', true);
       wp_register_script('util', get_template_directory_uri() . '/js/util.js','' ,'' ,'', true);
       wp_register_script('skel', get_template_directory_uri() . '/js/skel.min.js','' ,'' ,'', true);
       wp_register_script('flexslider', get_template_directory_uri() . '/js/flexslider.js','' ,'' ,'', true);
       wp_register_script('jqueryflexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js','' ,'' ,'', true);
       wp_register_script('jqueryscrolly', get_template_directory_uri() . '/js/jquery.scrolly.min.js','' ,'' ,'', true);
       wp_register_script('burger', get_template_directory_uri() . '/js/burger.js','' ,'' ,'', true);
       wp_register_script('main', get_template_directory_uri() . '/js/main.js','' ,'' ,'', true);

       wp_enqueue_script('jquery');
       wp_enqueue_script('util');
       wp_enqueue_script('skel');
       wp_enqueue_script('flexslider');
       wp_enqueue_script('jqueryflexslider');
       wp_enqueue_script('jqueryscrolly');
       wp_enqueue_script('burger');
       wp_enqueue_script('main');
   }
}
add_action('wp_enqueue_scripts', 'market_styles');

function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function footer_widgets_init()
{

    register_sidebar(array(

        'name' => 'Ma nouvelle zone de widget',
        'id' => 'new-widget-area',
        'before_widget' => '<div class="nwa-widget ">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="nwa-title">',
        'after_title' => '</h2>',
    ));
}
add_action( 'widgets_init', 'footer_widgets_init' );


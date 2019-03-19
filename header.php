<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fontawsome -->

    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <span class="logo"><a href="http://12devs.fr" target="_blank">12 Devs</a></span>
    <span class="nav-button">
        <button class="hamburger"><i class="fa fa-bars"></i></button>
        <button class="cross"><i class="fa fa-times"></i></button>
    </span>

</header>

<div class="menu">
    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">LANDING</a></li>
        <li><a href="#">GENERIC</a></li>
        <li><a href="#">ELEMENTS</a></li>
        <li><a href="#">GET STARTED</a></li>
        <li><a href="#">LOGIN</a></li>
    </ul>
    <?php wp_nav_menu( array(
        'theme_location' => 'main',
        'menu_class' => 'links',
        'container' =>false ) ); ?>
</div>
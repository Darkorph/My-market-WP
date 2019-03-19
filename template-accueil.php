
<?php
/*
Template Name: Accueil
*/

get_header();?>
<!-- Banner -->
<!--
<section id="banner">
    <div class="inner">
        <h1>Ma page d'accueil <a href="https://templated.co">TEMPLATED</a></h1>
        <ul class="actions">
            <li><a href="#post-<?php the_id(); ?>" class="button alt scrolly big">Continue</a></li>
        </ul>
    </div>
</section>
-->
<script>
    jQuery(function($) {

        $(".flexslider").flexslider({
            animation: "slide",
            slideshowSpeed: 7000,
        });

    });

</script>
<!-------SLIDER------------->
<div class="slider">
    <div class="flexslider">
        <ul class="slides">
            <?php
   $args=array('numberposts' =>5,);
   global $post;
   $custom_posts =get_posts($args);
   foreach($custom_posts as $post) :setup_postdata($post);
    ?>
            <li class="slider-post" style="background-image: linear-gradient(rgba(0, 0, 0, 1), rgba(255, 255, 255, 0.5)), url('<?php echo get_the_post_thumbnail_url(); ?>')">

                <div class="slider-post-content wrapper-inner">
                    <p><a class="title" href="<?php the_permalink();?>">
                            <?php the_title(); ?></a></p>
                    <p class="author">
                        Ecrit par : <?php the_author(); ?>
                        dan la catégorie : <?php the_category('|'); ?>
                    </p>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <ul class="list-unstyled">
                        <li><a href="<?php the_permalink() ?>" class="button">Read More</a></li>
                    </ul>

                </div>
            </li>
            <?php
   endforeach;
   wp_reset_query();
?>
        </ul>
    </div>
</div>



<!---------SLIDER-------->

<?php

if(current_user_can('administrator')){
    echo 'Je suis l\'administrateur<br>';
}
if(current_user_can('editor')){
    echo 'Je suis un éditeur<br>';
}

if(current_user_can('author')){
    echo 'Je suis un auteur<br>';
}

if(current_user_can('contributor')){
    echo 'Je suis un contributeur<br>';
}
?>

<div class="wp-block-button mt-50">
    <a class="link wp-block-button__link" href="<?php echo get_permalink( get_option( '' ) ); ?>">Toutes les actualités</a>
</div>
<!--</section>-->

<!-- Footer -->
<?php get_footer(); ?>


<?php
/*
Template Name: Accueil
*/

get_header();?>

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
            <li class="slider-post" style="background-image: url('<?php if ( has_post_thumbnail()){echo get_the_post_thumbnail_url();}else{echo get_template_directory_uri()."/img/1000x400.png";} ?>') ">

                <div class="slider-content">
                    <?php
                   echo '<h3 class="m-bot">'; the_title(); echo '</h3>';
                    echo '<div class="m-bot">'.get_the_date().'</div>';
                    echo '<h3 class="m-bot">'; the_author(); echo '</h3>';
                    echo '<p>'.get_the_excerpt('').'</p>';
                    ?>

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

echo '<div>'.do_shortcode("[meteo12devs city='paris']").'</div>';

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

<?php
/**
 * Created by PhpStorm.
 * User: AFORMAC
 * Date: 18/03/2019
 * Time: 18:49
 */
get_header();
?>
<div class="content-single">
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
       echo '<h3>'; the_title(); echo '</h3>';


if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}else{?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/1000x400.png" alt="">


    <?php
}
    echo '<p>'; the_content(); echo '</p>';

    endwhile; else:
    endif;
?>
</div>
<?php get_footer();?>
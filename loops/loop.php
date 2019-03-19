<?php
/**
 * Created by PhpStorm.
 * User: AFORMAC
 * Date: 18/03/2019
 * Time: 17:54
 */
?>

<div id="post-<?php the_id(); ?>" <?php post_class('wrapper-inner post'); ?> style="background-image: url('<?php if ( has_post_thumbnail()){echo get_the_post_thumbnail_url();}else{echo get_template_directory_uri()."/img/1000x400.png";} ?>') ">

        <section class="back-color">

        <h4 class="m-bot"><a href="<?php the_permalink() ?>">
                <?php the_title();
                ?></a></h4>
        <hr class="m-bot hr-w">
        <p class="m-bot">Publié par : <?php echo the_author_posts_link(); ?> <?php echo ' le : '.get_the_date();?></p>
        <p class="m-bot">Categories : <?php the_category(" | "); ?></p>
    </section>


</div>
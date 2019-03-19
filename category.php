<?php get_header();?>


    <h2><?php the_archive_title(); ?></h2>
    <div class="content">

        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
            <div id="post-<?php the_id(); ?>" <?php post_class('wrapper-inner post'); ?> style="background-image: url('<?php echo get_the_post_thumbnail_url();?>') ">

                <section class="back-color">

                    <h4 class="m-bot"><a href="<?php the_permalink() ?>">
                            <?php the_title();
                            ?></a></h4>
                    <hr class="m-bot hr-w">
                    <p class="m-bot">Publié par : <?php echo the_author_posts_link(); ?> </p>
                    <p class="m-bot"><?php echo ' le : '.get_the_date();?></p>
                    <p class="m-bot"><?php echo get_the_excerpt("","");?></p>
                </section>
            </div>
        <?php endwhile; else:
        endif;?>


        <!--        <div class="wrapper-inner">-->
        <!--            <h4 class="m-bot">Aliquam</h4>-->
        <!--            <hr class="m-bot hr-w">-->
        <!--            <p class="m-bot">Lorem ipsum dolor</p>-->
        <!--        </div>-->

    </div>

<?php get_footer();?>
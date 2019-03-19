<?php get_header();?>


    <h2><?php the_archive_title(); ?></h2>
    <div class="content">

        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part('loops/loop');
        endwhile; else:
        endif;?>


        <!--        <div class="wrapper-inner">-->
        <!--            <h4 class="m-bot">Aliquam</h4>-->
        <!--            <hr class="m-bot hr-w">-->
        <!--            <p class="m-bot">Lorem ipsum dolor</p>-->
        <!--        </div>-->

    </div>

<?php get_footer();?>
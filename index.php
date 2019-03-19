<?php get_header();?>

    <div class="banner wrapper-inner">
        <h2 class="m-bot">
            Hi, my name is <?php bloginfo( 'name' ); ?>
        </h2>
        <hr class="m-bot">
        <div class="">
            <p class="m-bot">Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Architecto deserunt et
                fugiat impedit, amet, consectetur adipisicing
                elit. Architecto deserunt e laboriosam laudantium
                minus molestia</p>
            <a href="">Get started  ⟶</a>

        </div>
    </div>

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
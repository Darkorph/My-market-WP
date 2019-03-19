<?php
/**
 * Created by PhpStorm.
 * User: AFORMAC
 * Date: 18/03/2019
 * Time: 17:54
 */
?>

<div id="post-<?php the_id(); ?>" <?php post_class('wrapper-inner post'); ?>>
    <h4 class="m-bot"><a href="<?php the_permalink() ?>">
            <?php the_title();
            ?></a></h4>
    <hr class="m-bot hr-w">
    <p class="m-bot">Publié par : <?php the_author(); echo ' le : '.get_the_date();?></p>
</div>
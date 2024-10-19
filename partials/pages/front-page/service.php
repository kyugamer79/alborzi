<?php

$services = new WP_Query([
    'post_type' => CYN_SERVICE_POST_TYPE,
    'posts_per_page' => -1,
]) ?>


<div>

    <?php if ($services->have_posts()): ?>

        <?php while ($services->have_posts()): ?>

            <?php $services->the_post() ?>

            <?php cyn_get_card('front-service') ?>

        <?php endwhile; ?>

    <?php endif ?>

</div>
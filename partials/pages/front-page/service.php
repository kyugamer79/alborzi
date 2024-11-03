<?php

$services = new WP_Query([
    'post_type' => CYN_SERVICE_POST_TYPE,
    'posts_per_page' => -1,
]) ?>

<div class="bg-black py-8">

    <swiper-container space-between="12" slides-per-view="auto">

        <?php if ($services->have_posts()): ?>

            <?php while ($services->have_posts()):

                $services->the_post(); ?>

                <swiper-slide>

                    <div class="w-full aspect-video">

                        <?php cyn_get_card('front-service'); ?>
                        
                    </div>

                </swiper-slide>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

    </swiper-container>
</div>
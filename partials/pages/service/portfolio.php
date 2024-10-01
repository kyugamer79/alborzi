<?php

$portfolio = new WP_Query([
    'post_type' => CYN_PORTFOLIO_POST_TYPE,
    'tax_query' => [
        [
            'taxonomy' => CYN_PORTFOLIO_CATEGORY_TAXONOMY,
            'field' => 'term_id',
            'terms' => get_field('portfolio'),
        ],
    ],
])

    ?>

<section class="max-[767px]:px-4 min-[768px]:px-10">

    <?php

    $posts = get_posts([
        'post_type' => CYN_PORTFOLIO_POST_TYPE,
        'fields' => 'ids',
    ])

        ?>
    <!-- Title -->

    <div class="text-5xl max-[767px]:text-3xl">
        نمونه کارهای
        <?php the_title() ?>
    </div>

    <div class="py-6"></div>

    <!-- Swiper -->
    <?php if ($portfolio->have_posts()): ?>

        <swiper-container space-between="12" slides-per-view="auto">

            <?php while ($portfolio->have_posts()): ?>

                <?php $portfolio->the_post() ?>

                <swiper-slide class="max-w-[350px]">

                    <?php cyn_get_card('portfolio') ?>

                </swiper-slide>

            <?php endwhile; ?>

        </swiper-container>

    <?php endif ?>

</section>
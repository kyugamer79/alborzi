<?php

$portfolios = new WP_Query([
    'post_type' => CYN_PORTFOLIO_POST_TYPE,
    'posts_per_page' => -1,
    'post__in' => get_field('portfolios')
]);

?>

<div class="space-y-6 bg-black mx-0 px-10 py-8 relative"  style="background-image: url(<?php echo CYN_THEME_DIR . '/assets/img/opacity-black-sections.png'?>);">

    <div class="flex flex-col gap-1">
        <div class="text-neutral-800 text-xl max-md:text-2xl">
            <?php _e('پروژه های ویژه', 'cyn-dm') ?>
        </div>

        <div class="text-white text-2xl max-md:text-2xl ">
            <?php _e('افتخارات ما', 'cyn-dm') ?>
        </div>
    </div>

    <swiper-container space-between="12" slides-per-view="auto">

        <?php if ($portfolios->have_posts()): ?>

            <?php while ($portfolios->have_posts()):
                $portfolios->the_post(); ?>

                <swiper-slide class="max-w-[350px]">

                    <?php cyn_get_card('portfolio') ?>

                </swiper-slide>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php endif; ?>

    </swiper-container>

    <!-- Button -->
    <div class="group">
        <a href="<?php get_post_type_archive_link('portfolio') ?>">
            <div class="flex justify-end items-center max-md:justify-center">
                <div>
                    <span>
                        <svg class="icon max-md:text-teal-600 group-hover:text-teal-600 text-white rotate-45 object size-8">
                            <use href="#icon-Arrow-17" />
                        </svg>
                    </span>
                </div>

                <div class="text-xs text-white group-hover:text-teal-600 max-md:text-teal-600">
                    <?php _e('مشاهده همه', 'cyn-dm') ?>
                </div>
            </div>
        </a>
    </div>

</div>
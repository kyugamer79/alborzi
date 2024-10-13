<?php $portfolioMini = new WP_Query([
    'post_type' => CYN_PORTFOLIO_POST_TYPE,
    'posts_per_page' => -1,
]) ?>

<div class="container">

    <div class="text-4xl">
        <?php _e('نمونه کارهای ما', 'cyn-dm') ?>
    </div>

    <div class="flex flex-row justify-between pt-5 pb-3 border-b border-zinc-700">
        <div class="text-2xl max-md:text-sm text-zinc-900"><?php _e('سال', 'cyn-dm') ?></div>
        <div class="text-2xl max-md:text-sm text-zinc-900"><?php _e('محل پروژه', 'cyn-dm') ?></div>
        <div class="text-2xl max-md:text-sm text-zinc-900"><?php _e('نام پروژه', 'cyn-dm') ?></div>
    </div>

    <div>
        <?php if ($portfolioMini->have_posts()): ?>

            <?php while ($portfolioMini->have_posts()): ?>

                <?php $portfolioMini->the_post() ?>

                <?php cyn_get_card('portfolio-mini') ?>

            <?php endwhile; ?>

        <?php endif ?>
    </div>

</div>
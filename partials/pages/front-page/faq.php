<?php

$faqs = new WP_Query([
    'post_type' => CYN_FAQ_POST_TYPE,
    'posts_per_page' => -1,
    'post__in' => get_field('faqs')
]);

$faqImage = get_field('faq_img');

?>

<div class="container grid grid-cols-5 items-center md:justify-items-end">
    <div class="space-y-4 col-span-3 max-md:col-span-5 max-md:order-2">
        <!-- Titles -->
        <div class="space-y-1 max-md:hidden">
            <div class="text-neutral-400 text-xl max-md:text-2xl">
                <?php _e('سوالات متداول', 'cyn-dm') ?>
            </div>

            <div class="text-zinc-900 text-2xl">
                <?php _e('پاسخ سوالات شما پیش ماست', 'cyn-dm') ?>
            </div>
        </div>

        <div>
            <?php if ($faqs->have_posts()): ?>

                <?php while ($faqs->have_posts()):

                    $faqs->the_post(); ?>

                    <?php cyn_get_card('faq') ?>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php endif; ?>
        </div>
    </div>

    <div class="col-span-2 max-md:col-span-5 max-md:space-y-4">
        <!-- Mobile Titles -->
        <div class="space-y-1 md:hidden">
            <div class="text-neutral-400 text-xl max-md:text-2xl">
                <?php _e('سوالات متداول', 'cyn-dm') ?>
            </div>

            <div class="text-zinc-900 text-2xl">
                <?php _e('پاسخ سوالات شما پیش ماست', 'cyn-dm') ?>
            </div>
        </div>

        <div>
            <?php echo wp_get_attachment_image($faqImage, 'full', false, ['class' => 'image']) ?>
        </div>
    </div>
</div>
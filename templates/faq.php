<?php
/* Template Name: FAQ */

get_header();

$questions = new WP_Query([
    'post_type' => CYN_FAQ_POST_TYPE,
    'posts_per_page' => -1,
]);

?>

<section class="container grid gap-8">

    <!-- Hero Section -->
    <?php cyn_get_page('faq/hero') ?>

    <!-- FAQ Items Section -->
    <section id="faq-items" class="scroll-smooth">

        <?php if ($questions->have_posts()): ?>

            <?php while ($questions->have_posts()):

                $questions->the_post(); ?>

                <?php cyn_get_card('faq'); ?>

            <?php endwhile;

            wp_reset_postdata(); ?>

        <?php endif; ?>

    </section>

</section>

<?php get_footer(); ?>
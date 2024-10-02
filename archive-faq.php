<?php get_header() ?>

<section class="container grid gap-8">

    <!-- Title -->
    <section class="text-5xl">

        <?php echo get_post_type_object(CYN_PORTFOLIO_POST_TYPE)->labels->singular_name ?>

    </section>

    <!-- Options -->
    <section class="grid grid-cols-3 max-xl:grid-cols-2 max-sm:grid-cols-1 gap-5">

        <?php if (have_posts()): ?>

            <?php while (have_posts()): ?>
                
                <?php the_post() ?>

                <?php cyn_get_card('faq') ?>

            <?php endwhile; ?>

        <?php endif ?>

    </section>

    <!-- Pagination -->
    <?php cyn_get_component('pagination') ?>

</section>


<?php get_footer() ?>

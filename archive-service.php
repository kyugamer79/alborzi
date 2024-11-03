<?php get_header() ?>

<div id="customCursor"
    class="hidden fixed w-20 h-20 bg-cover bg-center rounded-full pointer-events-none z-50 transform transition-transform duration-100">
</div>

<section class="container">

    <!-- Title -->
    <section class="text-5xl">

        <?php echo get_post_type_object(CYN_SERVICE_POST_TYPE)->labels->singular_name ?>

    </section>

    <div class="py-7 max-[767px]:py-4"></div>

    <!-- Options -->
    <section class="grid gap-14 max-[767px]:gap-0 max-[767px]:divide-y">

        <?php if (have_posts()): ?>

            <?php while (have_posts()): ?>

                <?php the_post() ?>

                <?php cyn_get_card('service') ?>

            <?php endwhile; ?>

        <?php endif ?>

    </section>

</section>


<?php get_footer() ?>
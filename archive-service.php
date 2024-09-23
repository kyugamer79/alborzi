<?php get_header() ?>

<?php

$services = get_posts([
    'post_type' => CYN_SERVICE_POST_TYPE,
    'posts_per_page' => -1,
]);

?>


<main class="container">

    <!-- Title -->
    <section class="text-5xl">

        <?php echo get_post_type_object(CYN_SERVICE_POST_TYPE)->labels->singular_name ?>

    </section>

    <div class="py-7 max-[767px]:py-4"></div>

    <!-- Options -->
    <section class="grid gap-14 max-[767px]:gap-0 max-[767px]:divide-y">

        <?php foreach ($services as $service): ?>

            <?php cyn_get_card('service') ?>

        <?php endforeach; ?>

        <?php wp_reset_postdata()?>

    </section>

</main>



<?php get_footer() ?>
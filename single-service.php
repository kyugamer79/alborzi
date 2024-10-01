<?php get_header() ?>

<section class="default-page">

    <!-- Tttle -->
    <section class="text-5xl max-[767px]:text-3xl py-7 px-10">
        <?php the_title() ?>
    </section>

    <!-- Gallery Swiper -->
    <?php cyn_get_page('service/gallery-swiper') ?>

    <div class="py-3 min-[768px]:py-7"></div>

    <!-- Services Buttons -->
    <?php cyn_get_page('service/button') ?>

    <div class="py-3 min-[768px]:py-7"></div>

    <!-- Content -->
    <section class="text-base leading-8 max-[767px]:px-4 min-[768px]:px-10">
        <?php the_content() ?>
    </section>

    <div class="py-10"></div>

    <!-- Steps -->
    <?php cyn_get_page('service/step-swiper') ?>

    <div class="py-10"></div>

    <!-- Portfolio -->
    <?php cyn_get_page('service/portfolio') ?>

    <div class="py-10"></div>
    
    <?php cyn_get_page('service/mobile-button')?>

    <div class="py-10"></div>

    <!-- CTA -->
    <?php cyn_get_component('service-cta')?>

</section>

<?php get_footer() ?>
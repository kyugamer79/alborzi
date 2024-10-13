<?php /* Template name: About Us */ ?>

<?php get_header() ?>

<section>

    <!-- Hero -->
    <?php cyn_get_page('about/hero') ?>

    <div class="py-3"></div>

    <!-- Mobile Hero -->
    <?php cyn_get_page('about/mobile-hero') ?>

    <div class="py-5 max-[767px]:py-2"></div>

    <!-- Team Members -->
    <?php cyn_get_page('about/team-members') ?>

    <div class="py-5 max-[767px]:py-8"></div>

    <!-- Quote -->
    <?php cyn_get_page('about/quote') ?>

    <div class="py-10"></div>

    <!-- Portfolio Table -->
    <?php cyn_get_component('portfolio-table') ?>

</section>

<?php get_footer() ?>
<?php /* Template name: Front Page */ ?>

<?php get_header() ?>

<section class="">

    <?php cyn_get_page('front-page/hero') ?>

    <?php cyn_get_page('front-page/mobile-hero') ?>

    <div class="py-6 md:py-12"></div>

    <?php cyn_get_page('front-page/service') ?>

    <div class="py-6 md:py-12"></div>

    <?php cyn_get_page('front-page/portfolio') ?>

    <?php cyn_get_page('front-page/team') ?>

    <?php cyn_get_page('front-page/about') ?>

    <div class="py-6 md:py-12"></div>
    
    <?php cyn_get_page('front-page/faq') ?>

</section>

<?php get_footer() ?>
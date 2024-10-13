<?php /* Template name: Contact Us */ ?>

<?php get_header() ?>

<section class="container">

    <section class="grid grid-cols-3 items-start">

        <!-- Form -->
        <?php cyn_get_page('contact/form') ?>

        <!-- Mobile Title -->
        <div class="text-5xl w-[350px] text-zinc-900 min-[1024px]:hidden">
            <?php _e('تماس با ما', 'cyn-dm') ?>
        </div>

        <!-- Animated Image -->
        <div class="col-span-3 lg:col-span-1">
            <dotlottie-player src="<?php echo CYN_THEME_DIR . '/assets/anim/contact-us.lottie' ?>"
                background="transparent" speed="1" style="width: 100%;" loop autoplay></dotlottie-player>
        </div>

    </section>

</section>

<?php get_footer() ?>
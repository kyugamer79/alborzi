<?php defined('ABSPATH') || exit; ?>
<!-- Not found  -->

<?php get_header(); ?>
<div class="py-12 max-xl:hidden"></div>

<main class="container flex justify-center items-center flex-col">
    <!-- 404 image  -->
    <div>
        <img src="<?php echo get_option('cyn_custom_404_logo') ?>" alt="404-picture">
    </div>

    <div class="py-6"></div>

    <!-- Text and button  -->
    <div class="flex flex-col items-center justify-center text-center">

        <!-- Text  -->
        <div class="text-xl text-neutral-700">
            <?php _e('متاسفانه صفحه ی مورد نظر یافت نشد', 'cyn-dm') ?>
        </div>

        <div class="py-2"></div>

        <!-- button  -->
        <button href="<?php echo esc_url(home_url()); ?>"
            class="flex items-center justify-center text-sm text-zinc-600">
            <span>
                <svg class="icon text-sm text-zinc-600 rotate-45 object size-8">
                    <use href="#icon-Arrow-17" />
                </svg>
            </span>
            <?php _e('بازگشت به صفحه اصلی', 'cyn-dm') ?>
        </button>
    </div>

</main>

<div class="py-8"></div>


<?php get_footer(); ?>
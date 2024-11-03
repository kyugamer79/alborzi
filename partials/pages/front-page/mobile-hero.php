<?php

$heroBg = get_field('front_hero_bg');

$heroNumberBg = get_field('front_hero_bg_number');

?>

<div class="container hidden max-[767px]:grid justify-items-center bg-no-repeat bg-contain"
    style="background-image: url('<?php echo wp_get_attachment_image_url($heroBg, 'full', false) ?>');">

    <!-- Ttle -->
    <div class="flex flex-row items-center">

        <div class="text-[42px] font-bold text-neutral-400 relative">
            <span class="text-black ">
                <?php _e('ما', 'cyn-dm') ?>
            </span>

            <span>
                <?php _e('به رویـــاهاتون شکل میدیم', 'cyn-dm') ?>
            </span>
        </div>

        <div class="group relative flex justify-around items-center font-bold">
            <span
                class="inline-block text-[248px] md:text-[558px] bg-clip-text transition-all duration-700 group-hover:bg-cover group-hover:bg-center group-hover:text-transparent text-black"
                style="background-image: url('<?php echo wp_get_attachment_image_url($heroNumberBg, 'full', false) ?>');">
                5
            </span>
        </div>

    </div>

    <!-- Video PopUp -->
    <?php cyn_get_component('video-popUp') ?>
</div>
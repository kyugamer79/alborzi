<?php

$heroBg = get_field('front_hero_bg');

$heroNumberBg = get_field('front_hero_bg_number');

?>

<div class="container mx-auto hidden md:grid grid-cols-5">
    <!-- Title & Video -->
    <div class="col-span-2 flex flex-col gap-16 mt-16">
        <!-- Title -->
        <div class="group text-8xl font-bold text-neutral-400 relative cursor-pointer">

            <span class="relative inline-block">
                <span class="relative group-hover:text-black transition-all duration-300">
                    <?php _e('ما', 'cyn-dm') ?>
                </span>

                <span
                    class="absolute -z-[10] inset-0 w-20 h-20 bg-[#0000000A] rounded-full group-hover:scale-100 scale-0 transition-all duration-300">
                </span>

            </span>

            <span>
                <?php _e('به رویـــاهاتون شکل میدیم', 'cyn-dm') ?>
            </span>
        </div>

        <!-- Video PopUp -->
        <?php cyn_get_component('video-popUp') ?>
    </div>

    <!-- Image -->
    <div class="col-span-3 cursor-pointer bg-no-repeat bg-contain"
        style="background-image: url('<?php echo wp_get_attachment_image_url($heroBg, 'full', false) ?>');">
        <div class="group relative flex justify-around items-center font-bold">
            <span
                class="inline-block text-[248px] md:text-[558px] bg-clip-text transition-all duration-700 group-hover:bg-cover group-hover:bg-center group-hover:text-transparent text-black"
                style="background-image: url('<?php echo wp_get_attachment_image_url($heroNumberBg, 'full', false) ?>');">
                5
            </span>
        </div>
    </div>

</div>
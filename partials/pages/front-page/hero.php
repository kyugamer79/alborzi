<?php

$heroBg = get_field('front_hero_bg');

$heroNumberBg = get_field('front_hero_bg_number');

$videoCover = get_field('video_cover');

$videoTeaser = get_field('video_teaser');

$videoLink = isset($videoTeaser['url']) ? $videoTeaser['url'] : null;

$videoCoverUrl = isset($videoCover['url']) ? $videoCover['url'] : null;

?>

<div class="container mx-auto hidden md:grid grid-cols-5"
    >
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
        <div>
            <div class="flex items-center gap-2">
                <div class="text-xl text-neutral-800">
                    <?php _e('برای کشف شگفتی ها صبر نکن!', 'cyn-dm') ?>
                </div>

                <div class="relative w-[98px] h-[68px]">
                    <!-- Video Cover -->
                    <?php if ($videoCoverUrl): ?>
                        <div id="video-cover"
                            class="absolute inset-0 flex justify-center items-center rounded-full cursor-pointer">
                            <img class="rounded-full w-full h-full object-cover" src="<?php echo $videoCoverUrl; ?>"
                                alt="cover">
                            <a href="#" class="absolute">
                                <svg class="icon text-white w-10 h-10">
                                    <use href="#icon-Play" />
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Popup Video Container -->
            <div id="popup-container"
                class="fixed inset-0 hidden bg-black bg-opacity-75 flex justify-center items-center z-50 transition-opacity duration-300 opacity-0">
                <div class="relative bg-white rounded-lg overflow-hidden transform transition-all duration-300 scale-95"
                    id="popup-content">
                    <button id="close-popup"
                        class="absolute top-0 right-0 m-2 z-10 text-gray-700 text-2xl">&times;</button>

                    <!-- Video Teaser in Popup -->
                    <?php if ($videoLink): ?>
                        <video id="popup-video" class="w-[80vw] h-[80vh]" controls>
                            <source src="<?php echo $videoLink; ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Image -->
    <div class="col-span-3 cursor-pointer bg-no-repeat bg-contain" style="background-image: url('<?php echo wp_get_attachment_image_url($heroBg, 'full', false) ?>');">
        <div class="group relative flex justify-around items-center font-bold">
            <span
                class="inline-block text-[248px] md:text-[558px] bg-clip-text transition-all duration-700 group-hover:bg-cover group-hover:bg-center group-hover:text-transparent text-black"
                style="background-image: url('<?php echo wp_get_attachment_image_url($heroNumberBg, 'full', false) ?>');">
                5
            </span>
        </div>
    </div>

</div>
<?php

$aboutTitle = get_field('about_title');

$aboutText = get_field('about_text');

$aboutBtnUrl = get_field('aboutـusـurl');

?>

<div class="container md:p-10 p-4 space-y-4 border-y border-zinc-200">
    <!-- Titles -->
    <div class="space-y-1">
        <div class="text-neutral-400 text-xl max-md:text-2xl">
            <?php _e('درباره ما', 'cyn-dm') ?>
        </div>

        <div class="text-zinc-900 text-2xl">
            <?php echo $aboutTitle ?>
        </div>

    </div>

    <!-- Text -->
    <div class="text-gsap text-3xl text-neutral-400 max-md:text-base max-md:leading-8 leading-[62px]">
        <?php echo $aboutText ?>
    </div>

    <!-- Button -->
    <div>
        <a href="<?php echo esc_url($aboutBtnUrl); ?>" class="max-md:text-teal-600">
            <div class="flex justify-end items-center max-md:justify-center">

                <div>
                    <span>
                        <svg class="icon rotate-45 object size-8">
                            <use href="#icon-Arrow-17" />
                        </svg>
                    </span>
                </div>

                <div class="text-xs text-black max-md:text-teal-600">
                    <?php _e('درباره ما', 'cyn-dm') ?>
                </div>
            </div>
        </a>
    </div>
</div>
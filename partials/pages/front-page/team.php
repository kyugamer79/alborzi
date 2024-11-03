<?php
$about_page_url = '#';

$about_us_page = get_posts([
    'post_type' => 'page',
    'meta_key' => '_wp_page_template',
    'meta_value' => 'templates/about.php',
    'numberposts' => 1
]);

if ($about_us_page) {
    $about_page_id = $about_us_page[0]->ID;
    $about_page_url = get_permalink($about_page_id);
} else {
    $about_page_id = null;
}

$teamText = get_field('team_text');
?>

<div class="container bg-no-repeat w-full bg-top bg-contain grid md:grid-cols-3 gap-8 py-10 md:px-9 p-4"
    style="background-image: url(<?php echo CYN_THEME_DIR . '/assets/img/front-team-bg.png'; ?>);">

    <!-- Mobile Title -->
    <div class="md:hidden col-span-3 flex gap-3 text-neutral-400 text-xl md:text-2xl md:w-56">
        <span>
            <svg class="icon text-black">
                <use href="#icon-Quote" />
            </svg>
        </span>
        <span>
            ما نتایج <span class="text-teal-600">استثنائی تحویل</span> می دهیم!
        </span>
    </div>

    <!-- Images -->
    <div class="col-span-3 md:col-span-2 grid grid-cols-2 gap-2">
        <?php if ($about_page_id): ?>
            <?php for ($i = 1; $i <= 4; $i++):
                $teamImage = get_field("team_img_$i", $about_page_id);
                if ($teamImage):

                    $alignment_classes = '';
                    switch ($i) {
                        case 1:
                            $alignment_classes = 'justify-end items-end';
                            break;
                        case 2:
                            $alignment_classes = 'justify-start items-end';
                            break;
                        case 3:
                            $alignment_classes = 'justify-end items-start self-start';
                            break;
                        case 4:
                            $alignment_classes = 'justify-start items-start self-start';
                            break;
                    }

                    $border_classes = '';
                    switch ($i) {
                        case 1:
                            $border_classes = 'rounded-t-xl rounded-r-xl';
                            break;
                        case 2:
                            $border_classes = 'rounded-t-xl rounded-l-xl translate-y-[-20px]';
                            break;
                        case 3:
                            $border_classes = 'rounded-b-xl rounded-r-xl';
                            break;
                        case 4:
                            $border_classes = 'rounded-b-xl rounded-l-xl translate-y-[-20px]';
                            break;
                    }
                    ?>
                    <div class="flex <?php echo $alignment_classes; ?>">
                        <img src="<?php echo wp_get_attachment_image_url($teamImage, 'full'); ?>" alt="Team Image <?php echo $i; ?>"
                            class="shadow-lg object-cover w-[196px] h-[196px] md:h-[248px] <?php echo $border_classes; ?> aspect-square" />
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        <?php else: ?>
            <p>About Us page not found.</p>
        <?php endif; ?>
    </div>

    <!-- Content -->
    <div class="flex flex-col justify-evenly gap-5 col-span-3 md:col-span-1">
        <!-- Desktop Title -->
        <div class="max-md:hidden flex gap-3 text-neutral-400 text-xl md:text-2xl md:w-56">
            <span>
                <svg class="icon text-black">
                    <use href="#icon-Quote" />
                </svg>
            </span>
            <span>
                ما نتایج <span class="text-teal-600">استثنائی تحویل</span> می دهیم!
            </span>
        </div>

        <!-- Text -->
        <div class="text-zinc-800 text-sm lg:text-base leading-[34px]">
            <?php echo $teamText; ?>
        </div>

        <!-- Button -->
        <div>
            <a href="<?php echo esc_url($about_page_url); ?>">
                <div class="flex justify-end items-center max-md:justify-center">
                    <div>
                        <span>
                            <svg class="icon max-md:text-teal-600 text-black rotate-45 object size-8">
                                <use href="#icon-Arrow-17" />
                            </svg>
                        </span>
                    </div>
                    <div class="text-xs text-black max-md:text-teal-600">
                        <?php _e('مطالعه بیشتر', 'cyn-dm'); ?>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
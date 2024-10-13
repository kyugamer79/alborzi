<?php

$heroTitle = get_field('hero_title');

$heroText = get_field('hero_txt');

?>

<div class="container rounded-[32px] max-h-[520px] bg-no-repeat bg-cover overflow-hidden w-full flex flex-col justify-end items-center p-5"
    style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>'); aspect-ratio: 16 / 9">

    <?php //if ($heroTitle): ?>
    <?php //for ($i = 1; $i <= 4; $i++): ?>
    <span class="text-white text-5xl max-md:hidden"><?php echo esc_html($heroTitle); ?></span>
    <?php //endfor ?>
    <?php //endif; ?>
</div>
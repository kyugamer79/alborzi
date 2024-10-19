<?php

$heroTitle = get_field('hero_title');

$heroText = get_field('hero_txt');

?>

<?php if ($heroTitle): ?>

    <div class="text-zinc-700 text-2xl hidden max-md:block py-4 border-y border-slate-200">
        <?php echo esc_html($heroTitle); ?>
    </div>

    <div
        class="container text-gsap text-zinc-500 text-2xl py-4 leading-[62px] max-md:text-base max-md:leading-8">
        <?php echo $heroText ?>
    </div>

<?php endif; ?>
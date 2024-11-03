<?php $archiveTxt = get_field('archive_txt') ?>

<div
    class="card-container group cursor-none flex flex-row justify-between items-center border-y max-md:first:border-t max-md:last:border-b gap-16 max-md:gap-5 py-9 md:px-6">
    <!-- Thumbnail-->
    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="Thumbnail" class="hidden" />

    <!-- Title-->
    <div class="text-3xl md:text-4xl text-zinc-900">
        <a href="<?php echo get_the_permalink() ?>">
            <?php echo get_the_title() ?>
        </a>
    </div>

    <!-- Desktop Service Text-->
    <div class="hidden md:block text-base text-stone-600 leading-8">
        <a href="<?php echo get_the_permalink() ?>">
            <?php echo $archiveTxt ?>
        </a>
    </div>

    <!-- Mobile Service Text-->
    <div class="block md:hidden text-xs text-stone-600 leading-8">
        <a href="<?php echo get_the_permalink() ?>">
            <?php echo wp_trim_words($archiveTxt, 16) ?>
        </a>
    </div>

    <!-- Icon -->
    <div class="transition-all duration-300 group-hover:rotate-45">
        <a href="<?php echo get_the_permalink() ?>">
            <svg class="icon size-6 md:size-12">
                <use href="#icon-Arrow-17" />
            </svg>
        </a>
    </div>
</div>
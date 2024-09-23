<?php $archiveTxt = get_field('archive_txt') ?>

<div class="group flex flex-row justify-center items-center min-[768px]:border-y max-[767px]:first:border-t max-[767px]:last:border-b gap-16 max-[767px]:gap-5 py-9 min-[768px]:px-6 scroll-smooth">

    <!-- Ttile -->
    <div class="min-[768px]:text-4xl text-3xl text-zinc-900">
        <a href="<?php echo get_the_permalink() ?>">
            <?php echo get_the_title() ?>
        </a>
    </div>

    <!-- Content -->
    <div class="desktop text-base min-[768px]:block hidden text-stone-600 leading-8">
        <a href="<?php echo get_the_permalink() ?>">
            <?php echo $archiveTxt ?>
        </a>
    </div>

    <div class="mobile text-xs hidden max-[767px]:block text-stone-600 leading-8">
        <a href="<?php echo get_the_permalink() ?>">
            <?php echo wp_trim_words($archiveTxt, 16) ?>
        </a>

    </div>

    <!-- Icon -->
    <div class="group-hover:rotate-45 transition-all duration-300">
        <a href="<?php echo get_the_permalink() ?>">
            <svg class="icon min-[768px]:size-12 size-6">
                <use href="#icon-Arrow-17" />
            </svg>
        </a>
    </div>

</div>
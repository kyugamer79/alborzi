<section class="grid grid-cols-5 items-center"
    style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
    <!-- Content -->
    <div class="col-span-2 grid gap-3 max-[767px]:col-span-5">
        <div class="text-5xl max-[767px]:text-3xl text-zinc-900">
            <?php the_title(); ?>
        </div>

        <div class="max-[767px]:hidden text-base text-zinc-400 leading-8">
            <?php the_content(); ?>
        </div>

        <div class="max-[767px]:hidden flex justify-end items-center gap-1 cursor-pointer" id="button">
            <div>
                <a href="#faq-items" class="text-zinc-500">
                    <?php _e('سوالتو پیدا کن', 'cyn-dm'); ?>
                </a>
            </div>

            <div class="border border-slate-200 rounded-full p-1">
                <a href="#faq-items" class="flex items-center">
                    <span>
                        <svg class="icon rotate-[136deg] object w-8 h-8">
                            <use href="#icon-Arrow-17" />
                        </svg>
                    </span>
                </a>

            </div>
        </div>
    </div>

    <!-- Image -->
    <div class="col-span-3 max-[767px]:col-span-5">
        <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ['class' => '']); ?>
    </div>

    <!-- Mobile Content -->
    <div class="min-[768px]:hidden justify-items-center col-span-2 grid gap-3 max-[767px]:col-span-5">

        <div class="text-xs text-zinc-400 leading-8">
            <?php the_content(); ?>
        </div>

        <div class="flex justify-end items-center gap-1">
            <div>
                <a href="#faq-items" id="button" class="cursor-pointer">
                    <?php _e('سوالتو پیدا کن', 'cyn-dm'); ?>
                </a>
            </div>

            <div class="border border-slate-200 rounded-full p-1">
                <a href="#faq-items" class="flex items-center">
                    <span>
                        <svg class="icon rotate-[136deg] object w-6 h-6">
                            <use href="#icon-Arrow-17" />
                        </svg>
                    </span>
                </a>

            </div>
        </div>
    </div>

</section>
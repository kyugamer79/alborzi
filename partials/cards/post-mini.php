<?php

$post_categories = get_the_category();

$post_content = get_the_content();

if (is_single()) {
    set_post_views(get_the_ID());
}

$post_views = get_post_views(get_the_ID());

?>

<div class="grid grid-cols-3 gap-2">
    <!-- Content -->
    <div class="col-span-2 grid gap-2">
        <!-- Date & Category -->
        <div class="flex flex-row justify-between items-center gap-5">
            <!-- Date -->
            <div class="text-sm text-neutral-400 flex flex-row items-baseline justify-center gap-2">
                <div
                    class=" bg-teal-600 relative after:absolute after:rounded-full isolate after:-z-10 after:animate-pulse after:bg-teal-50 after:content-[''] after:inset-0 shadow-xl rounded-full size-3 flex justify-center items-center">
                </div>
                <?php echo get_the_date() ?>
            </div>

            <!-- Category -->
            <div>
                <?php foreach ($post_categories as $term): ?>
                    <a href="<?php echo get_term_link($term) ?>" class="text-xs text-zinc-900">
                        <?php if ($term === end($post_categories)): ?>
                            <?php echo $term->name ?>
                        <?php else: ?>
                            <?php echo $term->name . ', ' ?>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>

        </div>

        <!-- Title & Content-->
        <div class="grid gap-1">
            <!-- Title -->
            <div clas="text-lg">
                <?php echo the_title() ?>
            </div>

            <!-- Content -->
            <div class="text-xs text-zinc-500">
                <?php echo wp_trim_words($post_content, 5) ?>
            </div>
        </div>

        <!-- Views & Btn  -->
        <div class="group flex flex-row justify-between items-center">

            <!-- Btn -->
            <div class="border border-slate-200 rounded-full p-1  bg-white group-hover:bg-teal-600 transition-all duration-300">
                <a href="<?php echo get_the_permalink() ?>">
                    <span>
                        <svg class="icon rotate-45 object group-hover:text-white transition-all duration-300">
                            <use href="#icon-Arrow-17" />
                        </svg>
                    </span>
                </a>
            </div>

            <!-- Views -->
            <div class="flex items-center text-xs text-zinc-400">
                <span>
                    <svg class="icon mr-1">
                        <use href="#icon-Eye-4" />
                    </svg>
                </span>

                <span>
                    <?php echo $post_views; ?>
                </span>
            </div>
        </div>

    </div>

    <!-- Image -->
    <div class="col-span-1 h-[112px]">
        <a href="<?php echo get_permalink() ?>">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'full', ['class' => 'rounded-xl aspect-square object-cover w-[118px]']) ?>
        </a>
    </div>
</div>
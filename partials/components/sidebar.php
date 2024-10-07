<?php

$post_categories = get_terms([
    'taxonomy' => 'category',
    'hide_empty' => true,
]);

?>

<?php

$publishedPosts = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'fields' => 'ids'
])

?>

<section class="col-span-1 max-lg:col-span-4 max-lg:order-2">
    <div class="h-full">
        <div class="grid justify-evenly sticky top-3 space-y-3">
            <!-- Search -->
            <div class="flex items-center flex-grow cursor-pointer">
                <form class="w-full max-lg:mx-4">
                    <div class="relative flex items-center">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3">
                            <svg class="icon text-zinc-600">
                                <use href="#icon-Search,-Loupe" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block rounded-full w-full py-3 pl-4 pr-9 text-base placeholder:text-zinc-600 text-zinc-600 bg-zinc-100 border border-slate-200"
                            placeholder="جستجو کن" required />
                    </div>
                </form>
            </div>

            <!-- Category -->
            <div>
                <div class="bg-primary-100 p-5 rounded-3xl">

                    <div class="text-h6 font-medium">
                        <?php _e('دسته بندی ها', 'cyn-dm') ?>
                    </div>

                    <div class="py-2"></div>

                    <div>
                        <div>
                            <ul class="space-y-3 divide-y-[1px] divide-primary-90">
                                <?php foreach ($post_categories as $term): ?>
                                    <a href="<?php echo get_term_link($term) ?>" class="text-secondary-400 pt-3 block">

                                        <li class="flex justify-between py-1 text-body_s">
                                            <?php echo $term->name ?>
                                            <span class="text-primary-50">
                                                <?php echo $term->count . 'مقاله'; ?>
                                            </span>
                                        </li>
                                    </a>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Published Posts -->
            <div class="bg-primary-100 p-5 rounded-3xl">
                <div class="text-h6 font-medium">
                    <?php _e('تازه منتشر شده ها', 'cyn-dm') ?>
                </div>

                <div class="py-2"></div>

                <div class="grid gap-y-4">

                    <?php
                    if ($publishedPosts->have_posts()):
                        while ($publishedPosts->have_posts()):
                            $publishedPosts->the_post();
                            cyn_get_card('post-mini');
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
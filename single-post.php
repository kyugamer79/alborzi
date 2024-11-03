<?php get_header() ?>

<?php

$post_categories = get_terms([
    'taxonomy' => 'category',
    'hide_empty' => true,
]);

?>

<?php

$publishedPosts = get_posts([
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'fields' => 'ids'
]);

$post_categories = get_the_category();

if (is_single()) {
    set_post_views(get_the_ID());
}

$post_views = get_post_views(get_the_ID());

?>


<!-- BreadCrumb -->
<?php cyn_get_component('breadcrumb') ?>

<section class="container grid grid-cols-4 gap-6">

    <!-- Sidebar -->
    <?php cyn_get_component('sidebar') ?>

    <!-- Paragraph -->
    <section class="col-span-3 max-lg:col-span-4 md:max-[1407px]:ms-6">
        <div class="grid gap-2">
            <!-- Feature Image -->
            <div>
                <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, ["class" => "rounded-[20px] w-full aspect-video object-cover"]) ?>
            </div>

            <!-- Meta -->
            <div class="flex flex-row justify-between">
                <!-- Date -->
                <div class="text-sm text-neutral-400 flex flex-row items-baseline justify-center gap-2">
                    <div
                        class=" bg-teal-600 relative after:absolute after:rounded-full isolate after:-z-10 after:animate-pulse after:bg-teal-50 after:content-[''] after:inset-0 after:shadow-xl after:shadow-teal-600/75 rounded-full size-3 flex justify-center items-center">
                    </div>
                    <?php echo get_the_date() ?>
                </div>

                <!-- Category & Views -->
                <div class="flex flex-row justify-between items-center gap-5">
                    <div>
                        <?php foreach ($post_categories as $term): ?>
                            <a href="<?php echo get_term_link($term) ?>" class="text-base text-zinc-900">
                                <?php if ($term === end($post_categories)): ?>
                                    <?php echo $term->name ?>
                                <?php else: ?>
                                    <?php echo $term->name . ', ' ?>
                                <?php endif; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>

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
        </div>

        <div class="py-3"></div>

        <!-- Content -->
        <div
            class="leading-10 prose-p:text-zinc-400 prose-h3:text-4xl prose-h3:py-4 prose-pre:flex prose-pre:flex-row prose-pre:has-[img]:w-full prose-pre:*:object-cover prose-pre:max-md:block prose-blockquote:bg-[#F1F5F9] prose-blockquote:text-[#525252] prose-blockquote:text-lg prose-blockquote:py-6 prose-blockquote:px-8 prose-blockquote:my-5 prose-blockquote:rounded-2xl">
            <div class="text-4xl">
                <?php echo the_title() ?>
            </div>

            <div class="py-2"></div>

            <div>
                <?php the_content() ?>
            </div>
        </div>

        <div class="my-16"></div>

        <!-- Comment -->
        <div>
            <?php comments_template() ?>
        </div>

    </section>

</section>

<?php get_footer() ?>
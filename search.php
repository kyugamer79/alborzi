<?php

defined('ABSPATH') || exit;

global $wp_query;

$search_type = empty($_GET['search-type']) ? 'all' : $_GET['search-type'];

?>

<?php get_header() ?>

<div class="container">
    <div id="searchPostType"
        class="bg-zinc-100 max-lg:flex flex-col p-5 rounded-3xl  divide-y space-y-3 divide-primary-90">

        <form id="search-form" class="flex justify-between items-center max-lg:flex-col max-lg:gap-3">

            <div class='md:px-2 max-lg:order-1'>

                <div class="flex flex-row max-[700px]:flex-col max-[700px]:items-start justify-start items-center gap-2">

                    <div class="text-neutral-700">
                        جستجو در :
                    </div>

                    <div class="flex">

                        <div class="p-2 flex-wrap flex gap-6">
                            <div class="flex justify-center items-center gap-2">
                                <input class="border-slate-200 size-6 text-teal-600 focus:bg-teal-600 focus:ring-neutral-500 dark:focus:ring-teal-600 dark:ring-teal-600 dark:focus:ring-offset-white focus:ring-1 dark:bg-white dark:border-gray-500 " value="all" type="radio" name="search-type" id="search-all" <?php echo $search_type === 'all' ? 'checked' : '' ?>>
                                <label class="text-neutral-700" for="search-all">همه</label>
                            </div>

                            <div class="flex justify-center items-center gap-2">
                                <input class="border-slate-200 size-6 text-teal-600 focus:bg-teal-600 focus:ring-neutral-500 dark:focus:ring-teal-600 dark:ring-teal-600 dark:focus:ring-offset-white focus:ring-1 dark:bg-white dark:border-gray-500 " value="service" type="radio" name="search-type" id="search-service"
                                    <?php echo $search_type === 'service' ? 'checked' : '' ?>>
                                <label class="text-neutral-700" for="service">بلاگ ها</label>
                            </div>

                            <div class="flex justify-center items-center gap-2">
                                <input class="border-slate-200 size-6 text-teal-600 focus:bg-teal-600 focus:ring-neutral-500 dark:focus:ring-teal-600 dark:ring-teal-600 dark:focus:ring-offset-white focus:ring-1 dark:bg-white dark:border-gray-500 custom filter blog_input" value="post" type="radio" name="search-type"
                                    id="search-blog" <?php echo $search_type === 'post' ? 'checked' : '' ?>>
                                <label class="text-neutral-700" for="blog">خدمات</label>
                            </div>

                            <div class="flex justify-center items-center gap-2">
                                <input class="border-slate-200 size-6 text-teal-600 focus:bg-teal-600 focus:ring-neutral-500 dark:focus:ring-teal-600 dark:ring-teal-600 dark:focus:ring-offset-white focus:ring-1 dark:bg-white dark:border-gray-500 custom filter blog_input" value="doctor" type="radio" name="search-type"
                                    id="search-doctor" <?php echo $search_type === 'doctor' ? 'checked' : '' ?>>
                                <label class="text-neutral-700" for="doctor">نمونه کارها</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="max-lg:border-0 max-lg:w-full">
                <div class="flex gap-1 py-1 px-3 bg-white border border-neutral-700 rounded-full">

                    <div>
                        <svg class="icon size-8 text-slate-700">
                            <use href="#icon-Search,-Loupe"></use>
                        </svg>
                    </div>

                    <div>
                        <input type="text" id="search" name="s" value="<?php the_search_query() ?>"
                            class="text-right text-sm block w-full border-0 focus:ring-0" placeholder="جست و جو">
                    </div>
                </div>
            </div>
        </form>

        <div class="flex justify-center items-center py-3 text-neutral-700 text-caption">
            <?php if (!empty($_GET['s'])): ?>
                <span id='postsCount'>

                    <?php echo $wp_query->found_posts ?>
                </span>
                <span>
                    <?php _e('نتیجه', 'cyn-dm') ?>
                </span>
            <?php endif; ?>
        </div>
    </div>


    <div class="p-6 ">

        <?php if (!empty($_GET['s'])): ?>

            <?php if (have_posts()): ?>

                <div id="searchPostsWrapper " class="space-y-4 py-4">
                    <?php while (have_posts()):
                        the_post() ?>
                        <div class="border-b">
                            <?php cyn_get_card('search') ?>
                        </div>
                    <?php endwhile; ?>
                </div>

                <?php
            else:
                cyn_get_component('search-not-found');
            endif;
            ?>

        <?php endif; ?>
    </div>
</div>


<?php get_footer() ?>
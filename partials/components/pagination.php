<?php

$query = new WP_Query([

    'posts_per_page' => get_option('posts_per_page'),
])

?>

<div
    class="container pagination flex mb-40 justify-center max-md:justify-center text-body_s text-primary-50 [&_.current]:bg-teal-800 [&_.current]:border [&_.current]:border-teal-800 [&_.current]:rounded-full [&_.current]:text-white [&_.nav-links]:flex [&_.nav-links]:justify-center [&_.nav-links]:items-center [&_.nav-links]:gap-1 ">
    <?php
    $big = 999999999;
    echo the_posts_pagination([
        'screen_reader_text' => ' ',
        'base'               => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'             => '%#%',
        'total'              => $wp_query->max_num_pages,
        'current'            => max(1, get_query_var('paged')),
        'aria_current'       => 'page',
        'show_all'           => false,
        'prev_next'          => false,
        'type'               => 'plain',
        'before_page_number' => '<span class="w-10 h-10 bg-primary-100 border [&.current]:border-teal-800 border-zinc-400 rounded-full p-1 inline-flex justify-center items-center size-8 transition-all duration-300 cursor-pointer color-primary-20 hover:border-primary-20 hover:bg-primary-100/0">',
        'after_page_number' => '</span>',
    ]);
    ?>
</div>
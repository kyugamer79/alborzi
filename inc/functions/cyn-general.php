<?php

/**
 * get category info
 * 
 * @todo change for custom taxonomy
 *
 * @param int $post_id
 * @param string $url_all
 * @param WP_TERM | string | int $taxonomy
 * 
 * 
 * @return array
 */
function cyn_category_info($post_id, $url_all, $taxonomy)
{
    $current_post_cat_ids = [];
    foreach (get_the_category($post_id) as $cat) {
        array_push($current_post_cat_ids, $cat->term_id);
    }

    $categories = get_categories([
        'orderby' => 'id',
        'hide_empty' => false,
        'taxonomy' => $taxonomy
    ]);

    $categories_link = [];
    foreach ($categories as $cat) {
        array_push($categories_link, get_category_link($cat->term_id));
    }

    $info_categories = [
        [
            'name' => 'All',
            'link' => $url_all,
            'in_category_exist' => true
        ]
    ];

    for ($i = 0; $i < count($categories); $i++) {
        array_push(
            $info_categories,
            [
                'name' => $categories[$i]->name,
                'link' => $categories_link[$i],
                'in_category_exist' => in_array($categories[$i]->term_id, $current_post_cat_ids)
            ]
        );
    }
    return $info_categories;
}


function cyn_get_component($name, $args = [])
{
    get_template_part('/partials/components/' . $name, null, $args);
}

function cyn_get_card($name, $args = [])
{
    get_template_part('/partials/cards/' . $name, null, $args);
}

function cyn_get_part($name, $args = [])
{
    get_template_part('/partials/parts/' . $name, null, $args);
}

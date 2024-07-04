<?php

/** Retrieve recent posts. */
function getRecentPosts($count_post, $offset)
{
    $args = array(
        'posts_per_page' => $count_post,
        'offset' => $offset,
        'post_status' => 'publish'
    );

    $posts = new WP_Query($args);

    return $posts;
}


/** Retrieve the list of categories for a post. */
function getPostCategories($post_id)
{
    $post_categories = wp_get_post_categories($post_id);
    $cats = array();

    foreach ($post_categories as $c) {
        $cat = get_category($c);
        $cats[] = array('name' => $cat->name, 'slug' => $cat->slug);
    }
    return $cats;
}


function getCategoryPosts($category_id)
{
    $args = array(
        'cat' => $category_id,
        'post_status' => 'publish'
    );

    $posts = new WP_Query($args);
    return $posts;
}

function getPostsByCategoryId($category_id, $count_posts, $offset)
{
    $args = array(
        'cat' => $category_id,
        'posts_per_page' => $count_posts,
        'offset' => $offset,
        'post_status' => 'publish'
    );

    $posts = new WP_Query($args);

    return $posts;
}

function getPostsByCategoryName($category_slug, $count_posts, $offset)
{
    $args = array(
        'category_name' => $category_slug,
        'posts_per_page' => $count_posts,
        'offset' => $offset,
        'post_status' => 'publish'
    );

    $posts = new WP_Query($args);
    return $posts;
}



/** Retrieve popular list of tags. */
function ekhabar_tags()
{
    $args = array(
        'smallest' => 16,
        'largest' => 16,
        'unit' => 'px',
        'number' => 8,
        'format' => 'array',
        'separator' => " ",
        'orderby' => 'count',
        'order' => 'DESC',
        'show_count' => false,
        'echo' => false
    );
    $tags = get_tags($args);
    return $tags;
}

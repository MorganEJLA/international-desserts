<?php

function desserts_post_types()
{
    register_post_type(
        'country',
        array(
            'supports' => array('title', 'editor', 'excerpt'),
            'rewrite' => array('slug' => 'countries'),
            'has_archive' => true,
            'public' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Countries',
                'add_new_item' => 'Add New Country',
                'edit_item' => 'Edit Country',
                'all_items' => 'All Countries',
                'singular_name' => 'Country'
            ),
            'menu_icon' => 'dashicons-flag'
        )
    );


}
add_action('init', 'desserts_post_types');

?>
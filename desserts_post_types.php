<?php

function desserts_post_types()
// Country Post Type
{
    register_post_type(
        'country',
        array(
            'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
            'rewrite' => array('slug' => 'countries'),
            'has_archive' => true,
            'public' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Countries',
                'add_new_item' => 'Add New Country',
                'edit_item' => 'Edit Country',
                'all_items' => 'Select Countries',
                'singular_name' => 'Country'
            ),
            'menu_icon' => 'dashicons-flag'
        )
    );
// Ingredient Post Type
    register_post_type(
        'ingredient',
        array(
            'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
            'rewrite' => array('slug' => 'ingredients'),
            'has_archive' => true,
            'public' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Ingredients',
                'add_new_item' => 'Add New Ingredient',
                'edit_item' => 'Edit Ingredient',
                'all_items' => 'All Ingredients',
                'singular_name' => 'Ingredient'
            ),
            'menu_icon' => 'dashicons-carrot'
            
        )
    );
    // Pastry Chef Post Type
    register_post_type(
        'pastry_chef',
        array(
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'rewrite' =>array('slug' => 'pastry_chefs'),
            'has_archive' => true,
            'public' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Pastry Chefs',
                'add_new_item' => 'Add New Pastry Chefs',
                'edit_item' => 'Edit Pastry Chefs',
                'all_items' => 'All Pastry Chefs',
                'singular_name' => 'Pastry Chefs'
            ),
            'menu_icon' => 'dashicons-food'
            
        )
    );

}
add_action('init', 'desserts_post_types');

?>
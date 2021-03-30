<?php
/**
 * Plugin Name: Book Reviews
 * Description: A custom post type for book reviews
 * Author:      Randolf Sartagoda
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Basic security, prevents file from being loaded directly.
defined('ABSPATH') or die('Cheatin&#8217; uh?');

add_action('init', function () {

    $labels = [
      'name'                  => _x('Book Reviews', 'Post Type General Name', 'text_domain'),
      'singular_name'         => _x('Book Review', 'Post Type Singular Name', 'text_domain'),
      'menu_name'             => __('Book Reviews', 'text_domain'),
      'name_admin_bar'        => __('Book Reviews', 'text_domain'),
      'archives'              => __('Item Archives', 'text_domain'),
      'attributes'            => __('Item Attributes', 'text_domain'),
      'parent_item_colon'     => __('Parent Item:', 'text_domain'),
      'all_items'             => __('All Items', 'text_domain'),
      'add_new_item'          => __('Add New Item', 'text_domain'),
      'add_new'               => __('Add New', 'text_domain'),
      'new_item'              => __('New Item', 'text_domain'),
      'edit_item'             => __('Edit Item', 'text_domain'),
      'update_item'           => __('Update Item', 'text_domain'),
      'view_item'             => __('View Item', 'text_domain'),
      'view_items'            => __('View Items', 'text_domain'),
      'search_items'          => __('Search Item', 'text_domain'),
      'not_found'             => __('Not found', 'text_domain'),
      'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
      'featured_image'        => __('Featured Image', 'text_domain'),
      'set_featured_image'    => __('Set featured image', 'text_domain'),
      'remove_featured_image' => __('Remove featured image', 'text_domain'),
      'use_featured_image'    => __('Use as featured image', 'text_domain'),
      'insert_into_item'      => __('Insert into item', 'text_domain'),
      'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
      'items_list'            => __('Items list', 'text_domain'),
      'items_list_navigation' => __('Items list navigation', 'text_domain'),
      'filter_items_list'     => __('Filter items list', 'text_domain'),
    ];
    $args   = [
      'label'               => __('Book Review', 'text_domain'),
      'description'         => __('A custom post type for book reviews', 'text_domain'),
      'labels'              => $labels,
      'supports'            => ['title', 'editor', 'custom-fields', 'thumbnail'],
      'taxonomies'          => ['category'],
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'menu_position'       => 5,
      'show_in_admin_bar'   => true,
      'show_in_nav_menus'   => true,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => true,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    ];
    register_post_type('book_reviews', $args);
});

add_action('add_meta_boxes', function () {
    remove_meta_box('wpseo_meta', 'book_reviews', 'normal');
}, 100);

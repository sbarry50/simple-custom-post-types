<?php
/**
 * Custom Post Type configurations.
 *
 * @package    Simple Custom Post Types
 * @since      1.0.0
 * @author     sbarry50
 * @link       https://github.com/sbarry50/simple-custom-post-types
 * @license    GNU General Public License 2.0+
 */

return [
    'example' => [
        'label'       => __('Example', 'text_domain'),
        'description' => __('Example Description', 'text_domain'),
        'labels'      => [
            'name'               => _x('Examples', 'post type general name', 'simple-cpts'),
            'singular_name'      => _x('Example', 'post type singular name', 'simple-cpts'),
            'menu_name'          => _x('Examples', 'admin menu', 'simple-cpts'),
            'name_admin_bar'     => _x('Example', 'add new on admin bar', 'simple-cpts'),
            'add_new'            => _x('Add New', 'example', 'simple-cpts'),
            'add_new_item'       => __('Add New Example', 'simple-cpts'),
            'new_item'           => __('New Example', 'simple-cpts'),
            'edit_item'          => __('Edit Example', 'simple-cpts'),
            'view_item'          => __('View Example', 'simple-cpts'),
            'all_items'          => __('All Examples', 'simple-cpts'),
            'search_items'       => __('Search Examples', 'simple-cpts'),
            'parent_item_colon'  => __('Parent Examples:', 'simple-cpts'),
            'not_found'          => __('No examples found.', 'simple-cpts'),
            'not_found_in_trash' => __('No examples found in Trash.', 'simple-cpts')
        ],
        'supports'            => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
        'taxonomies'          => ['category', 'post_tag'],
        'public'              => true,
        'show_in_menu'        => true,
        'has_archive'         => false,
        'show_in_rest'        => true,
        'show_in_graphql'     => true, // If using WPGraphQL Plugin
        'graphql_single_name' => 'Example', // If using WPGraphQL Plugin
        'graphql_plural_name' => 'Examples', // If using WPGraphQL Plugin
    ],
];

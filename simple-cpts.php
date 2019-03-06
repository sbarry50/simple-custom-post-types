<?php

/*
* Plugin Name: Simple Custom Post Types
* Description: Easily define custom post types in a config file
* Version: 1.0.0
* Author: sbarry50
* Author URI: http://www.sb2media.com
* Text Domain: simple-cpts
*/

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    die;
}

require(plugin_dir_path(__FILE__) . '/src/custom-post-type.php');
require(plugin_dir_path(__FILE__) . '/src/activation.php');

add_action('init', 'custom_post_type');
register_activation_hook(__FILE__, 'easy_cpts_activate');

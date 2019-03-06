<?php
/**
 * Plugin activation
 *
 * @package    Simple Custom Post Types
 * @since      1.0.0
 * @author     sbarry50
 * @link       https://github.com/sbarry50/simple-custom-post-types
 * @license    GNU General Public License 2.0+
 */

function easy_cpts_activate()
{
    custom_post_type();

    // register taxonomies/post types here
    flush_rewrite_rules();
}

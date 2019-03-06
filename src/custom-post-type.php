<?php
/**
 * Register custom post types.
 *
 * @package    Simple Custom Post Types
 * @since      1.0.0
 * @author     sbarry50
 * @link       https://github.com/sbarry50/simple-custom-post-types
 * @license    GNU General Public License 2.0+
 */

function custom_post_type()
{
    $cpts = require(plugin_dir_path(dirname(__FILE__)) . '/config/config.php');
 
    foreach ($cpts as $cpt => $args) {
        register_post_type($cpt, $args);
    }
}

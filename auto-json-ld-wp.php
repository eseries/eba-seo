<?php
/**
 * Plugin Name:       Eba SEO
 * Plugin URI:        
 * Description:       Auto JSON-LD SEO for WordPress
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      7.2
 * Author:            Ebalu
 * Author URI:        
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       auto-json-ld-wp
 */
if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'includes/SchemaService.php';

add_action('wp_head', function(){
    if(is_singular()){
        $schema = new SchemaService();
        echo $schema->generate();
    }
});
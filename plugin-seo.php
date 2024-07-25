<?php
/*
Plugin Name: Plugin Seo
Plugin URI: 
Description: Optimización Seo
Version: 
Author: Rodrigo
Author URI: 
License: 
License URI: 
*/


require_once  plugin_dir_path(__FILE__) ."/functions.php";




/* Add CSS file */

add_action('admin_enqueue_scripts', 'pluginseo_settings_page_styles');

add_action('wp_enqueue_scripts','loadseo',true);

/*Create the Settings Page*/

add_action('admin_menu', 'pluginseo_add_settings_page');

add_action('admin_init', 'pluginseo_settings_init');
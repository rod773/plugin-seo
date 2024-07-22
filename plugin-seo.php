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

/* Add Content File */
include_once('content.php');


/* Add CSS file */

add_action('admin_enqueue_scripts', 'pluginseo_admin_page_styles');

add_action('wp_enqueue_scripts','loadseo');

/*Create the Admin Menu Page*/

//add_action('admin_menu', 'pluginseo_admin_page_menu');

add_action('admin_menu', 'pluginseo_add_settings_page');

add_action('admin_init', 'pluginseo_settings_init');
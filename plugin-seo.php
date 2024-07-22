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



add_action('wp_enqueue_scripts','loadseo');
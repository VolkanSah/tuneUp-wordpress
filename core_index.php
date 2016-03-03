<?php
/*
Plugin Name: Learn to create an advanced Wordpress Plugin from scratch
Plugin URI: http://www.wasistseo.de
Description: Its your own All in One - Multi-Wordpress-Plugin
Version: 1.0
Author: Volkan.Sah
Author URI: http://www.wasistseo.de
License: GPL v. 3
  */
  /*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

*/
// Anytime activate & deactivate your plugin!
function wis_core_activation() {
} 
register_activation_hook(__FILE__, 'wis_core_activation');
function wis_core_deactivation() {
}
register_deactivation_hook(__FILE__, 'wis_core_deactivation'); 

// Call Javascript and CSS files to your plugin backend
add_action('wis_backend_script', 'wis_backend_style');
function wis_backend_script() {
if (isset($_GET['page']) && $_GET['page'] == 'wis_plugin_options') {
wp_enqueue_media();
wp_register_script('backend-js', WP_PLUGIN_URL.'./inc/js/backend.js', array('jquery'));
wp_enqueue_script('backend-js');
		}
	}
function wis_backend_style() {
if (isset($_GET['page']) && $_GET['page'] == 'wis_plugin_options') {
wp_register_style( 'backend-style', WP_PLUGIN_URL.'./inc/css/backend.css' );
wp_enqueue_style( 'backend-style' );
		}
}

//

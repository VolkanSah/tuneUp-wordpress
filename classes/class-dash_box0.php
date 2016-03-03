<?php
// Metaboy for your Dashboard
function wis_custom_dashboard_widgets() {
global $wp_meta_boxes;
 wp_add_dashboard_widget('custom_help_widget', 'WIS Dashboard', 'custom_dashboard_help');
	}
function custom_dashboard_help() {
echo '<h3>Write your Heading here</h3>';
echo '<p>Good work, your Plug-in is alreay running</p>';
	}
add_action('wp_dashboard_setup', 'wis_custom_dashboard_widgets');

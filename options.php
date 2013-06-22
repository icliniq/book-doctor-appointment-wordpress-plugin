<?php

/** Book Doctor Appointment Options */
function icq_add_menu_page() {
  global $icq_plugin_name;
	add_options_page('Configure Doctor Appointment Widget - iCliniq', 'Configure Doctor Appointment Widget - iCliniq', 'manage_options', $icq_plugin_name, 'icq_plugin_options');

	//call register settings function
	add_action( 'admin_init', 'register_icq_settings' );
}

function icq_plugin_options() {
  require_once(dirname(__FILE__).'/admin-page.php');
} 


// create custom plugin settings menu
add_action('admin_menu', 'icq_add_menu_page');

function register_icq_settings() {
	
	register_setting( 'icq-settings-group', 1);
}

?>

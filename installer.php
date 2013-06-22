<?php

/**
 * Activation of plugin
 * 
 */
include_once(dirname(__FILE__).'/config.php');

global $icq_speciality_id_json, $icq_location;

add_option($icq_speciality_id_json);
add_option($icq_location);

?>

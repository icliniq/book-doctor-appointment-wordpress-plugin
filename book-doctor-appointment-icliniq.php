<?php
/*
Plugin Name: Book Doctor Appointments - iCliniq
Plugin URI: http://icliniq.com/pages/display/page/wordpress-plugin
Description: This plugin helps to add iCliniq's "<b>Book Doctor Appointment</b>" feature into your website! It gives you to option to display the doctor search results in one of three formats. 1) As a pop-up dialog. 2) Within the widget 3) In an area you specify. It's extremely simple to use;  and you will love it.
Version: 1.0
Author: Marshal@icliniq.com
Author URI: http://icliniq.com/pages/display/page/wordpress-plugin
License: 
  Copyright 2010  iCliniq  (email : icliniq@icliniq.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

include_once(dirname(__FILE__).'/config.php');
include_once(dirname(__FILE__).'/options.php');
include_once(dirname(__FILE__).'/widget.php');
include_once(dirname(__FILE__).'/search-box.php');

// Call the Installer/Upgrader when plugin is activated
function icq_activate()
{
  require_once(dirname(__FILE__).'/installer.php');
}

//Adding hooks
register_activation_hook(__FILE__, 'icq_activate');


add_action( 'wp_enqueue_scripts', 'load_scripts' , 5 );

function load_scripts(){
  global $gsc_plugin_dir_path, $gsc_hide_search_button;  
}

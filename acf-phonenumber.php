<?php

/*
Plugin Name: Advanced Custom Fields: Phone number
Plugin URI: http://www.github.com/hcmedia
Description: Formated phone number field for the Advanced Custom Fields plugin
Version: 1.0.0
Author: HC-Media
Author URI: http://www.hc-media.org
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-phonenumber', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
/*
function include_field_types_phonenumber( $version ) {
	
	include_once('acf-phonenumber-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_phonenumber');	
*/



// 3. Include field type for ACF4
function register_fields_phonenumber() {
	
	include_once('acf-phonenumber-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_phonenumber');		
?>
<?php
/*
Plugin Name: Custom Message Plugin
Description: A simple WordPress plugin that displays a custom message.
Version: 1.0.1
Author: We'r Media
*/

function custom_message_function() {
    echo '<div class="notice notice-success is-dismissible"><p>Hello, this is a custom message from your WordPress plugin!</p></div>';
}
add_action('admin_notices', 'custom_message_function');

if( ! class_exists( 'Wer_Plugin_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Wer_Plugin_Updater( __FILE__ );
$updater->set_username( 'werjeroen' );
$updater->set_repository( 'plugin-test' );
$updater->initialize();

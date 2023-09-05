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

if ( is_admin() )  {
    include_once plugin_dir_path( dirname( __FILE__, 2 ) ); . '/core/config/updater/PluginUpdater.php';

    $updater = new PDUpdater(__FILE__);
    $updater->set_username('We-R-Media');
    $updater->set_repository('werpluginupdatecheck');
    $updater->initialize();
}

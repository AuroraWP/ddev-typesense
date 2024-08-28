<?php
#ddev-generated

defined('ABSPATH') or die();

function overwriteTypesenseAdminSettingsOption($settings)
{
    global $wp_current_filter;
    if (! is_array($settings)) {
        $settings = [];
    }

    $settings['admin_api_key']  = "ddev";
    $settings['search_api_key'] = "ddev";

    // Admin requests inside docker network: http://typesense:8108/health
    $settings['protocol'] = "http://";
    $settings['node']     = "typesense";
    $settings['port']     = 8108;

    if (in_array('wp_enqueue_scripts', $wp_current_filter)) {
        // Public search requests: https://[hostname]:8108/health
        $settings['protocol'] = "https://";
        $settings['node']     = $_SERVER['SERVER_NAME'];
    }

    return $settings;
}

add_filter('option_cm_typesense_admin_settings', "overwriteTypesenseAdminSettingsOption");
add_filter('default_option_cm_typesense_admin_settings', "overwriteTypesenseAdminSettingsOption");

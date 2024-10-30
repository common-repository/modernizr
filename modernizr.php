<?php

/*
 * Plugin Name: Modernizr
 * Plugin URI: http://www.ramoonus.nl/wordpress/modernizr/
 * Description: Modernizr is a small JavaScript library that detects the availability of native implementations for next-generation web technologies
 * Version: 3.7.1
 * Author: Ramoonus
 * Author URI: http://www.ramoonus.nl/
 */
function rw_modernizr()
{
    /**
     *
     * @since 1.0.0
     * @version 3.7.1
     */
    if (wp_script_is('modernizr', 'enqueued')) {
        wp_dequeue_script('modernizr');
        wp_deregister_script('modernizr');
    }

    wp_enqueue_script('modernizr', plugins_url('/js/modernizr.js', __FILE__), array(
        'jquery'
    ), '3.7.1', false);
}
add_action('wp_enqueue_scripts', 'rw_modernizr');

/**
 * Load translation
 *
 * @since 3.7.0
 * @version 1.0
 *         
 */
function rw_modernizr_load_plugin_textdomain()
{
    load_plugin_textdomain('modernizr', FALSE, basename(dirname(__FILE__)) . '/languages/');
}

add_action('plugins_loaded', 'rw_modernizr_load_plugin_textdomain');

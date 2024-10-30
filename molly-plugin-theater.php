<?php

/*
Plugin Name: Molly Theater
description: A lightweight video player plugin for Vimeo or Youtube videos in a fullscreen player. See the <a href="/wp-admin/tools.php?page=molly-theater">Molly Theater page</a> under Tools for Molly Docs.
Version: 1.0.0
Author: Molly Plugins
Author URI: https://meetmolly.dev
License: GNU General Public License v3.0
*/

// Define root of plugin
define( 'molly_theater_root_url', plugin_dir_url( __FILE__ ) );

// Enqueue Styles
function mollyTheaterPluginStylesScriptsEnqueue() {
  wp_enqueue_style( 'style-name', molly_theater_root_url . 'dist/css/molly-theater.min.css' );
  wp_enqueue_script( 'script-name', molly_theater_root_url . 'dist/js/molly-theater.min.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'mollyTheaterPluginStylesScriptsEnqueue' );

// Add Theater ID to footer
function mollyTheaterPluginHtmlEnqueue() {
  echo '<div id="mollyPluginTheater" class="mollyPluginTheater"></div>';
}
add_action( 'wp_footer', 'mollyTheaterPluginHtmlEnqueue' );

// Settings Page
require 'include/settings.php';
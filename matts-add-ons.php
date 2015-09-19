<?php
/*
Plugin Name: Matt's Add-ons
Plugin URI:  http://antym.com
Description: Adds some features to the site.
Version:     .6
Author:      Matt McGivney
Author URI:  http://antym.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: antym-plugin
*/

function mm_enqueue_scripts_styles() {
  wp_enqueue_script('mmjs', plugins_url('js/mm.js', __FILE__), array('jquery'), true);
  wp_enqueue_style('basscss', '/wp-content/plugins/matts-add-ons/css/basscss.min.css');
  wp_enqueue_style('matts-style', '/wp-content/plugins/matts-add-ons/css/matts-style.css','basscss');
}

add_action('wp_enqueue_scripts', 'mm_enqueue_scripts_styles');
<?php

/*
  Plugin Name: Image Responsive Block Type
  Version: 1.0
  Author: Sheryar
  Author URI: https://wpminds.com/
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class imageResponsive {
  function __construct() {
    add_action('init', [$this, 'onInit']);
  }

  function onInit() {
    wp_register_script('imageResponsiveScript', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-i18n', 'wp-editor'));
    wp_register_style('imageResponsiveStyle', plugin_dir_url(__FILE__) . 'build/index.css');

    register_block_type('ourplugin/image-responsive', array(
      'render_callback' => [$this, 'renderCallback'],
      'editor_script' => 'imageResponsiveScript',
      'editor_style' => 'imageResponsiveStyle'
    ));
  }

  function renderCallback($attributes) {
    return '<p>We will replace this content soon.</p>';
  }

}

$imageResponsive = new imageResponsive();
<?php
function setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support( 'html5', array(  'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', ) );
  }
  add_action('after_setup_theme', 'setup');
  function enqueue_head() {
    wp_enqueue_style('style_name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
    wp_enqueue_script('script_jquery', get_template_directory_uri() . '/dist/main.js', array('jquery'), '1.0.0', true);
  }
  add_action('wp_enqueue_scripts','enqueue_head');
?>
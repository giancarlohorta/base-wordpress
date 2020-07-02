<?php 

function handel_add_woocommerce_support(){
  add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'handel_add_woocommerce_support');

function handel_css(){
  wp_register_style('handel-style', get_template_directory_uri(). '/style.css', [], '1.0.0');
  wp_enqueue_style('handel-style');
}

add_action('wp_enqueue_scripts', 'handel_css');
?>
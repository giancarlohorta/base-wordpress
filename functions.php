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

function handel_custom_images(){
  add_image_size('slide', 1000, 800, ['center', 'top']);
  update_option('medium_crop', 1);
}

add_action('after_setup_theme', 'handel_custom_images');

function handel_loop_shop_per_page(){
  return 6;
}

add_filter('loop_shop_per_page', 'handel_loop_shop_per_page');
?>
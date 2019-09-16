<?php 

function cf_setup(){

  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap');
  wp_enqueue_style('custom', get_template_directory_uri() . '/dist/css/style.css', array(), false, 'all');
  wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/app.js', array(), false, 'all');
  wp_enqueue_script('fontawesome','https://kit.fontawesome.com/e33b567028.js');

}
add_action('wp_enqueue_scripts', 'cf_setup');



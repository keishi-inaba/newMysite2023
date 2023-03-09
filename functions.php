<?php

// 独自リソース一元管理
function my_enqueue_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script('main_js', get_template_directory_uri().'/js/main.js', array());
  wp_enqueue_style('my_style', get_template_directory_uri().'/css/style.css', '', date('ymdHis', filemtime(get_template_directory_uri().'/css/style.css')), '');
  wp_enqueue_style('my_parts', get_template_directory_uri().'/css/parts.css', '', date('ymdHis', filemtime(get_template_directory_uri().'/css/parts.css')), '');
}

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

?>

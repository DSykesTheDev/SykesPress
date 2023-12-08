<?php
/**
 *  Theme Functions
 * 
 *  @package SykesPress
 * 
 */

function sykespress_enqueue_scripts() {   
     wp_register_style("bootstrap-css", 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
     wp_register_style('main-css', get_stylesheet_uri(), [], filemtime(get_template_directory() .''), 'all');
     wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', [], false, true);

     wp_enqueue_style('bootstrap-css');
     wp_enqueue_style('main-css');
     wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'sykespress_enqueue_scripts');
?>
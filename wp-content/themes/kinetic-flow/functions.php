<?php
// Nessuna riga vuota prima di <?php

function kinetic_flow_enqueue_assets() {
    // 1. Carica il CSS principale con cache busting basato sul tempo di modifica
    $css_version = filemtime(get_stylesheet_directory() . '/style.css');
    wp_enqueue_style('kinetic-flow-style', get_stylesheet_uri(), array(), $css_version);
    
    // 2. Carica il JS nel footer con cache busting
    $js_version = filemtime(get_stylesheet_directory() . '/script.js');
    wp_enqueue_script('kinetic-flow-script', get_template_directory_uri() . '/script.js', array(), $js_version, true);
}
add_action('wp_enqueue_scripts', 'kinetic_flow_enqueue_assets');
<?php
    function mi_css_personalizado(){
        wp_enqueue_style('mi-css', get_template_directory_uri().'/css/style.css', array(), '1.0.0');
    }
    add_action('wp_enqueue_scripts', 'mi_css_personalizado');
?>
<?php
/**
 * Plugin Name: IBE Login
 * Plugin URI: https://ideasbyelliot.com
 * Common Login Across IBE Sites
 * Version: 1.0.0
 * Author: Ideas By Elliot
 * Author URI: https://ideasbyelliot.com */
 
function ibe_login_styles() {
    wp_enqueue_style( 'login-customization-styles', plugin_dir_url( __FILE__ ) . 'ibe-login.css' );
}

function ibe_login_footer() { 
    echo '<div id="support-buttons">';
    echo '<a href="https://ideasbyelliot.com/support" class="ibe-button button">Need Help? Contact Ideas By Elliot</a>';
    echo '</div>';
}

add_action('login_footer', 'ibe_login_footer');
add_action('login_enqueue_scripts', 'ibe_login_styles' );

 
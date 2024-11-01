<?php
/**
 * Plugin Name: Support Ukraine - Floating Flag
 * Description: Adds a floating flag of Ukraine to the left side of the screen, which opens on hover. Displays the slogans "Slava Ukraini!" and "Herojam slava!" to non-invasively show support for Ukraine.
 * Version: 1.0
 * Author: TOSTAD.sk
 * Author URI: https://tostad.sk
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Enqueue the CSS file
function support_ukraine_enqueue_scripts() {
    wp_enqueue_style( 'support-ukraine', plugin_dir_url( __FILE__ ) . 'css/support-ukraine.css' );
}
add_action( 'wp_enqueue_scripts', 'support_ukraine_enqueue_scripts' );

// Add the floating div to the footer
function support_ukraine_banner() {
?>
<div class="ukraine">
    <div class="ukraine-flag">
        <div class="slava-ukraini">Slava Ukrajini!</div>
        <div class="herojam-slava">Herojam slava!</div>
    </div>
    <a href="https://war.ukraine.ua/support-ukraine/" target="_blank" rel="noindex nofollow noopener">Support Ukraine</a>
</div>
<?php
}
add_action( 'wp_footer', 'support_ukraine_banner' );
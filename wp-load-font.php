<?php
/**
 * Plugin Name: WP Load Font
 * Plugin URI: 
 * Description: Loads fonts from the plugin's my-fonts directory into WordPress
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: 
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-load-font
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

class WP_Load_Font {
    private $font_dir;

    public function __construct() {
        $this->font_dir = plugin_dir_path(__FILE__) . 'my-fonts/';
        add_action('wp_head', array($this, 'load_fonts'));
    }

    public function load_fonts() {
        // Check if the font directory exists
        if (!is_dir($this->font_dir)) {
            return;
        }

        // Get all font files from the directory
        $font_files = glob($this->font_dir . '*.{woff,woff2,ttf,otf,eot}', GLOB_BRACE);
        
        if (empty($font_files)) {
            return;
        }

        echo '<style type="text/css">';
        foreach ($font_files as $font_file) {
            $font_name = pathinfo($font_file, PATHINFO_FILENAME);
            $font_url = plugin_dir_url(__FILE__) . 'my-fonts/' . basename($font_file);
            $font_format = pathinfo($font_file, PATHINFO_EXTENSION);
            
            echo "@font-face {";
            echo "font-family: '" . esc_attr($font_name) . "';";
            echo "src: url('" . esc_url($font_url) . "') format('" . esc_attr($font_format) . "');";
            echo "font-display: swap;";
            echo "}";
        }
        echo '</style>';
    }
}

// Initialize the plugin
new WP_Load_Font(); 
<?php
/**
 * Plugin Name: Easy Disable Gutenberg
 * Plugin URI:  
 * Description: This plugin is created for lovers of the classic wordpress editor with whom we worked for many years.
 * Version:     1.0
 * Author:      iLenStudio
 * Author URI:  https://github.com/LeninZapata/how-to-disable-gutenberg
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: disable-gutenberg
 * Domain Path: /languages
 * Network:     true
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

if ( ! class_exists( 'Easy_Disable_Gutenberg' ) ) {
    final class Easy_Disable_Gutenberg{

        public function __construct(){
            $this->init();
        }

        public function init(){

            // Disable Gutenberg

            if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
                
                // WP > 5 beta
                add_filter('use_block_editor_for_post_type', '__return_false', 10);
                
            } else {
                
                // WP < 5 beta
                add_filter('gutenberg_can_edit_post_type', '__return_false', 10);
                
            }

        }

    }
}
new Easy_Disable_Gutenberg;
?>
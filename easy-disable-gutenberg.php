<?php
/**
 * Plugin Name: How to Disable Gutenberg
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

if ( ! class_exists( 'Disable_Gutenberg' ) ) {
    final class Disable_Gutenberg{

        public function __construct(){
            $this->init();
        }

        public function init(){
            // We start with a filter to deactivate it
            add_filter('use_block_editor_for_post', '__return_false');
        }

    }
}
new Disable_Gutenberg;
?>
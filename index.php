<?php
/*
Plugin Name: Mage FAQ
Plugin URI: http://mage-people.com
Description: Mage Multipurpase FAQ system, You can use this plugin for FAQ, Knowladgebase, Product Documentation, Q&A etc.
Author: MagePeople Team
Version: 1.0
Author URI: http://mage-people.com
License: GPLv2 or later
Text Domain: mkb
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/


// Include Required Lib & Others
require_once (dirname(__FILE__)."/inc/mkb_cpt.php");
require_once (dirname(__FILE__)."/inc/mkb_tax.php");
require_once (dirname(__FILE__)."/inc/mkb_shortcode.php");





// Enque Required Style & Scripts
function mage_kb_libs() {
	wp_enqueue_script('jquery-ui-accordion');
	wp_enqueue_script( 'mkb-scripts', plugin_dir_url( __FILE__ ) . 'js/mkb-scripts.js', array('jquery'), '1', true ); 
	wp_enqueue_style('mkb-jQuery-UI-CSS',plugin_dir_url( __FILE__ ) .'css/jquery.ui.min.css');	
	wp_enqueue_style('mkb-styles',plugin_dir_url( __FILE__ ) .'css/mkb-styles.css');
}
add_action( 'wp_enqueue_scripts', 'mage_kb_libs' );
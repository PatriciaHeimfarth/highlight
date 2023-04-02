<?php
/*
 * Plugin Name:       Highlight
 * Plugin URI:        https://example.com 
 * Description:       Highlight
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Patricia Heimfarth
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 add_action('admin_head', 'post_background');

 function post_background() {
	 print "
		 <style>
			#the-list .status-publish {background-color: lightgreen}
			#the-list .status-draft {background-color: lightgrey}
			#the-list .status-future {background-color: pink}
		 </style>
		 ";
 }
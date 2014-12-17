<?php
/**
 * Plugin Name: bbPress Shift+Enter to Publish reply
 * Description: Use a simple Shift+Enter when you finish writing a reply and watch it be published!
 * Author: Nikhil Vimal
 * Author URI: http://nik.techvoltz.com
 * Version: 1.0
 * Plugin URI:
 * License: GNU GPLv2+
 */

function bbpress_reply_with_shift_enter_enqueue() {

		if ( is_singular('topic') ) {
			//Enqueue the bbPress reply shortcut script (Only in the topic post type)
			wp_enqueue_script( 'bbpress_reply_keyboard_shortcut', plugin_dir_url( __FILE__ ) . 'bbpress-reply-shift-enter.js', array( 'jquery' ) );

		}


	}
add_action('wp_enqueue_scripts','bbpress_reply_with_shift_enter_enqueue');


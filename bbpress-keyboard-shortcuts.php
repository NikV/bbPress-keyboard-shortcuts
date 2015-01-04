<?php
/**
 * Plugin Name: bbPress Keyboard Shortcuts
 * Description: Use CMD + enter or Control + enter when you finish writing a reply and watch it be published!
 * Author: Nikhil Vimal
 * Author URI: http://nik.techvoltz.com
 * Version: 1.0
 * Plugin URI: https://github.com/NikV/bbPress-command-enter
 * License: GNU GPLv2+
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function bbpress_keyboard_shortcuts_check_bbpress() {

	if ( ! is_plugin_active( 'bbpress/bbpress.php' ) ) {
		//plugin is activated
		function my_admin_notice() {
			?>
			<div class="error">
				<p><?php echo "You need to activate bbPress in order for keyboard shortcuts to work" ?></p>
			</div>
		<?php
		}

		add_action( 'admin_notices', 'my_admin_notice' );
	}
}
add_action('init', 'bbpress_keyboard_shortcuts_check_bbpress');


function bbpress_keyboard_shortcuts_enqueue() {

		//Enqueue the bbPress reply shortcut script (Only in the topic post type)
		wp_enqueue_script( 'bbpress_reply_keyboard_shortcut', plugin_dir_url( __FILE__ ) . 'bbpress-keyboard-shortcut-reply.js' );


}
add_action('wp_enqueue_scripts','bbpress_keyboard_shortcuts_enqueue');

function after_reply_content_shortcut_activated() {
	echo "You can use CTRL + Enter or CMD + Enter to submit a reply.";
}
add_action('bbp_theme_after_reply_form_content', 'after_reply_content_shortcut_activated');
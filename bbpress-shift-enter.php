<?php
/**
 * Plugin Name: bbPress Shift+Enter to Publish reply
 * Description: Use a simple Shift+Enter when you finish writing a reply and watch it be published!
 * Author: Nikhil Vimal
 * Author URI: http://nik.techvoltz.com
 * Version: 1.0
 * Plugin URI: https://github.com/NikV/bbPress-shift-enter/
 * License: GNU GPLv2+
 */

function bbpress_reply_with_shift_enter_js() {
	?>
	<script>
	document.getElementById("bbpress-forums").onkeydown = function (submit) {
	        if (submit.keyCode == 13 && submit.shiftKey) {
	            document.getElementById("bbp_reply_submit").click();
	            return false;
	        }
    	}
	</script>
	<?php
}

add_action( 'wp_footer', 'bbpress_reply_with_shift_enter_js', 99 );


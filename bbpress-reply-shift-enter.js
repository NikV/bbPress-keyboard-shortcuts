/**
 * Javascript file for bbPress Shift+Enter to reply
 */

window.onload = function () {
    jQuery.getElementById("bbpress-forums").onkeydown = function (submit) {

        if (submit.keyCode == 13 && submit.shiftKey) {
            jQuery.getElementById("bbp_reply_submit").click();
            return false;
        }
    }
}
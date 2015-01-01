/**
 * Javascript file for bbPress Shift+Enter to reply
 */

window.addEventListener = function () {
    document.getElementById("whats-new").onkeydown = function (submit) {

        if (submit.keyCode == 13 && submit.shiftKey) {
            document.getElementById("bbp_reply_submit").click();
            return false;
        }
    }
}
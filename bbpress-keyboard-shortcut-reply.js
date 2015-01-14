/**
 * Javascript file for bbPress Keyboard Shortcuts
 */
window.addEventListener = function () {
    if (document.getElementById("bbp_reply_content")) {
        document.getElementById("bbp_reply_content").onkeydown = function (submit) {

            if (submit.keyCode == 13 && submit.metaKey) {
                document.getElementById("bbp_reply_submit").click();
            }

            else if (submit.keyCode == 13 && submit.ctrlKey) {
                document.getElementById("bbp_reply_submit").click();
            }
        }
    }
}
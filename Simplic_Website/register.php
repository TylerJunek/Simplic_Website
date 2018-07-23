<?php
require("database/dbh.php");
require("header.php");
if (isset($_GET['redirected'])){
    
} ?>
<div class="custom-container topic">
    <div class="panel-section">
        <div class="custom-panel">
            <div class="header">Registering</div>
            <div class="contents">In order to register in to the SimplicSite, you must follow these steps:
                <ol>
                    <li>Start up Minecraft</li>
                    <li><p id="click_advance">Login to Simplic <input class="read-only_text" type="text" value="simplicpvp.us" id="display" readonly><button class="copy-text" onclick="myFunction()" id="click"><i class="fa fa-clipboard"></i><strong> Copy</strong></button></p></li>
                    <li>Open your text field and execute the <strong>/register &lt;password&gt;</strong> command</li>
                    <li>You will be prompted if the registeration process has been done successfully, and to continue will be prompted to provide a valid email to send notifications to, such as password resets, upcoming events, etc. If process failed, you may already have an account. If you wish to reset the password, you have 2 options:
                        <ol>
                            <li>If you know your email is registered with the profile, you may go reset your password.</li>
                            <li>If your email isn't registered in the account, you may contact staff to consolt with this issue.</li>
                        </ol>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<script>
    $('#click').click(function() {
        var icon = $("i", this);
        icon.toggleClass("fa-clipboard fa-check");
        setTimeout(function(){
            icon.toggleClass("fa-clipboard fa-check");
        }, 500);
    });
    function myFunction() {
        var copyText = document.getElementById("display");
        copyText.focus();
        copyText.select();
        document.execCommand("copy");
        if (window.getSelection) {window.getSelection().removeAllRanges();}
        else if (document.selection) {document.selection.empty();}
    }
</script>
<?php require("footer.php"); ?>
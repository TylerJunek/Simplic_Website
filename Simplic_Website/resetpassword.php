<?php require_once("database/dbh.php");
if (isset($_GET['UUID'])){
    $uuid = $conn->escape_string($_GET['UUID']);
    $result = $conn->query("SELECT * FROM login WHERE UUID = '$uuid'");
    if ($result->num_rows == 0){
        header('Location: register.php?redirected=true');
        die();
    } else { 
require("header.php"); ?>
<div class="custom-container">
    <div class="custom-container">
        <div class="login">
            <div class="header">
                <h2>Reset Password</h2>
                <div class="icon"><img src="img/ServerLogo.png"></div>
            </div>
            <div class="contents">
                <?php if (isset($_GET['matched'])&&$_GET['matched']==false) { ?>
                <div class="error-message">Passwords do not match</div>
                <?php } ?>
                <form name="login" method="post" action="/login-system/reset.php">
                    <div class="form-group">
                        <div class="login-descriptor">Password</div>
                        <input type="password" class="form-control login-fields" placeholder="Password" name="pass">
                        <div class="login-descriptor">Confirm Password</div>
                        <input type="password" class="form-control login-fields" placeholder="Confirm Password" name="confpass">
                    </div>
                    <button type="submit" name="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require("footer.php"); 
    }
} ?>
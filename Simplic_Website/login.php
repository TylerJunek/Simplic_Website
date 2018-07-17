<?php 
require_once("database/dbh.php");
require_once('header.php');
?>
    <div class="custom-container">
        <div class="login">
            <div class="header">
                <h2>Login</h2>
                <div class="icon"><img src="img/ServerLogo.png"></div>
            </div>
            <div class="contents">
                <form name="login" method="post" action="/login-system/logging-in.php">
                    <div class="form-group">
                        <div class="login-descriptor">Username</div>
                        <input type="text" class="form-control login-fields" placeholder="Minecraft Username" name="user">
                        <div class="login-descriptor">Pasword</div>
                        <input type="text" class="form-control login-fields" placeholder="Password" name="pass">
                    </div>
                    <button type="submit" name="log" class="btn btn-default">Login</button>
                </form>
            </div>
        </div>
    </div>
<?php require_once('footer.php') ?>
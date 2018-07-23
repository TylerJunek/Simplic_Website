<?php 
require("database/dbh.php");
require('header.php');
?>
    <div class="custom-container">
        <div class="login">
            <div class="header">
                <h2>Login</h2>
                <div class="icon"><img src="img/ServerLogo.png"></div>
            </div>
            <div class="contents">
                <form name="login" method="post" action="/loginsystem/logging-in.php">
                    <div class="form-group">
                        <?php 
                        if (isset($_GET['registered'])&&$_GET['registered']=='false') { ?>
                        <div class="error-message">Account not registed in database</div>
                        <?php 
                        } 
                        if (isset($_GET['valid'])&&$_GET['valid']=='false') { 
                        ?>
                        <div class="error-message">Incorrect password</div>
                        <?php 
                        } 
                        ?>
                        <div class="login-descriptor">Username</div>
                        <input type="text" class="form-control login-fields" placeholder="Minecraft Username" name="user">
                        <div class="login-descriptor">Pasword</div>
                        <input type="password" class="form-control login-fields" placeholder="Password" name="pass">
                    </div>
                    <button type="submit" name="log" class="btn btn-default">Login</button>
                </form>
            </div>
        </div>
    </div>
<?php require('footer.php') ?>
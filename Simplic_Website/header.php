<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <link rel="stylesheet" href="s_styles.css">
        <link rel="icon" type="image/png" href="img/icon.png">
        <title>Simplic</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body class="body">
        <nav class="custom-navbar navbar-inverse" style="margin-bottom=0px;">
            <div class="container-fluid">
                <a href="#"><div class="navbar-header imageLogo">
                </div></a>
                <div class="nav-items">
                    <ul class="nav navbar-nav">
                        <?php if ($_SERVER['PHP_SELF'] == "/index.php") { ?>
                        <li class="active item"><a href="index.php">Home</a></li>
                        <?php } else { ?>
                        <li class="item"><a href="index.php">Home</a></li>
                        <?php } ?>
                        <?php if ($_SERVER['PHP_SELF'] == "/simplic_general_rules.php") { ?>
                        <li class="active item"><a href="simplic_general_rules.php">Rules</a></li>
                        <?php } else { ?>
                        <li class="item"><a href="simplic_general_rules.php">Rules</a></li>
                        <?php } ?>
                    </ul>
                    <script type="text/javascript">
                        function validateSearch() {
                            var a = document.forms["playerSearch"]["search"].value;
                            if (a==null || a=="") {
                                alert("Please enter a value in the field.");
                                return false;
                            }
                        }
                    </script>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if ($_SERVER['PHP_SELF'] == "/login.php") { ?>
                        <li class="active item"><a href="login.php">Login</a></li>
                        <?php } else { ?>
                        <li class="item"><a href="login.php">Login</a></li>
                        <?php } ?>
                        <?php if ($_SERVER['PHP_SELF'] == "/register.php") { ?>
                        <li class="active item"><a href="#">Register</a></li>
                        <?php } else { ?>
                        <li class="item"><a href="#">Register</a></li>
                        <?php } ?>
                    </ul>
                    <form class="navbar-form navbar-right" name="playerSearch" onsubmit="return validateSearch()" action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Player's IGN" name="search">
                        </div>
                        <button type="submit" class="btn btn-danger">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    <div class="header">
        <div class="custom-container">
            <img src="img/ServerLogo.png" style="float:left;">
            <?php if ($_SERVER['PHP_SELF'] == "/index.php") { ?>
            <h2>Simplic</h2>
            <?php } else if ($_SERVER['PHP_SELF'] == "/simplic_general_rules.php") { ?>
            <h2>Rules</h2>
            <?php } else if ($_SERVER['PHP_SELF'] == "/login.php") { ?>
            <h2>Login</h2>
            <?php } else if ($_SERVER['PHP_SELF'] == "/register.php") { ?>
            <h2>Register</h2>
            <?php } else { ?>
            <h2>Simplic</h2>
            <?php } ?>
        </div>
    </div>
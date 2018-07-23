<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="s_styles.css">
        <link rel="icon" type="image/png" href="img/icon.png">
        <title>Simplic</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function validateSearch() {
                var a = document.forms["playerSearch"]["search"].value;
                if (a==null || a=="") {
                    alert("Please enter a value in the field.");
                    return false;
                }
            }
            $(document).ready(function(){
                $(".rotate-transition").click(function(){
                    var $test = $("#rotate");
                    var $trans = $(".rotate-transition");
                    if ($trans.attr("aria-expanded") == 'true'){
                        $test.css("transform", "matrix(0.0513918, 0.998679, -0.998679, 0.0513918, 0, 0)");
                    } else {
                        $test.css("transform", "matrix(1, 0, 0, 1, 0, 0)");
                    }
                });
                $(".rotate-transition-other").click(function(){
                    var $test = $("#rotate-other");
                    var $trans = $(".rotate-transition-other");
                    if ($trans.attr("aria-expanded") == 'true'){
                        $test.css("transform", "matrix(0.0513918, 0.998679, -0.998679, 0.0513918, 0, 0)");
                    } else {
                        $test.css("transform", "matrix(1, 0, 0, 1, 0, 0)");
                    }
                });
            });
        </script>
    </head>
    <body class="body" style="font-family: LitSans;">
        <nav class="custom-navbar navbar-inverse" style="margin-bottom=0px;">
            <div class="container-fluid">
                <a href="#"><div class="navbar-header imageLogo">
                </div></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <div class="nav-items collapse  navbar-collapse" id="myNavbar">
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
                        <li class="dropdown">
                            <a class="dropdown-toggle rotate-transition-other" data-toggle="dropdown" href="#">Simplic Server
                                <span class="caret rotation-nintey" id="rotate-other"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="leaderboard_selector.php">Leaderboards</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                        if (isset($_SESSION['Player'])){
                        ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle rotate-transition" data-toggle="dropdown" href="#" aria-expanded="false"><div class="logged_in"><?php echo $_SESSION['Player']; ?>
                                <span class="caret rotation-nintey" id="rotate"></span></div></a>
                            <ul class="dropdown-menu">
                                <li><a href="loginsystem/logging-out.php?url=<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; ?>">Log out</a></li>
                            </ul>
                        </li>
                        <?php
                        } else {
                            if ($_SERVER['PHP_SELF'] == "/login.php") { 
                        ?>
                        <li class="active item inline"><a href="login.php">Login</a></li>
                        <?php 
                            } else {
                        ?>  
                        <li class="item inline"><a href="login.php">Login</a></li>
                        <?php 
                            }
                            if ($_SERVER['PHP_SELF'] == "/register.php") { 
                        ?>
                        <li class="active item inline"><a href="register.php">Register</a></li>
                        <?php 
                            } else { 
                        ?>
                        <li class="item inline"><a href="register.php">Register</a></li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                    <form class="navbar-form navbar-right" method="get" name="playerSearch" onsubmit="return validateSearch()" action="searchplayer.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Player's IGN" name="name">
                        </div>
                        <button type="submit" class="btn btn-danger" name="pSearch">Search</button>
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
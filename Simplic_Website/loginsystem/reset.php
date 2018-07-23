<?php
require_once("../database/dbh.php");
if (isset($_POST['log'])){
    if (isset($_POST['user'])){
        $user = $conn->escape_string($_POST['user']);
        $result = $conn->query("SELECT * FROM login WHERE username = '$user'");
        if ($result->num_rows == 0){
            header('Location: ../register.php?redirected=true');
            die();
        } else {
            $user = $result->fetch_assoc();
            
            if (password_verify($_POST['pass'], $_POST['confpass'])){
                $_SESSION['Player'] = $user['Player'];
                $_SESSION['UUID'] = $user['UUID'];
                if ($user['Online'] == 0){
                    $_SESSION['Online'] = false;
                } else {
                    $_SESSION['Online'] = true;
                }
            } else {
                header('Location: ../resetpassword.php?matched=false');
                die();
            }
        }
    } else {
        header('Location: ../index.php');
        die();
    }
} else {
    header('Location: ../index.php');
    die();

} ?>
<?php
require_once("../database/dbh.php");
session_start();
if (isset($_POST['log'])){
    if (isset($_POST['user'])){
        $user = $conn->escape_string($_POST['user']);
        $result = $conn->query("SELECT * FROM login WHERE Player = '$user'");
        if ($result->num_rows == 0){
            header('Location: ../login.php?registered=false');
            die();
        } else {
            $user = $result->fetch_assoc();
            
            if (password_verify($user['Password'], password_hash($_POST['pass'],PASSWORD_DEFAULT))){
                $_SESSION['Player'] = $user['Player'];
                $_SESSION['UUID'] = $user['UUID'];
                if ($user['Online'] == 0){
                    $_SESSION['Online'] = false;
                } else {
                    $_SESSION['Online'] = true;
                }
                header("Location: ".$_POST['url']);
                die();
            } else {
                header('Location: ../login.php?valid=false');
                die();
            }
        }
    }
} else {
    header('Location: ../index.php');
    die();

} ?>
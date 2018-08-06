<?php
require("../database/dbh.php");
if (isset($_POST['reset'])){
    if (isset($_POST['uuid'])){
        $uuid = $conn->escape_string($_POST['uuid']);
        $result = $conn->query("SELECT * FROM login WHERE UUID = '$uuid'");
        if ($result->num_rows == 0){
            header('Location: ../register.php?redirected=true');
            die();
        } else {
            $user = $result->fetch_assoc();
            
            if (strcmp($_POST['pass'], $_POST['confpass']) === 0) {
                $sql = "UPDATE login SET Password = '".$_POST['pass']."' WHERE UUID='".$uuid."'";

                if ($conn->query($sql) !== TRUE) {
                    die("Error: " . $sql . "<br>" . $conn->error);
                }
                header('Location: ../login.php?reset=true');
                die();
            } else {
                header('Location: ../resetpassword.php?uuid='.$uuid.'&id='.$user['ID'].'&matched=false');
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

}
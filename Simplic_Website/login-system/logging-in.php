<?php
require("../database/dbh.php");
if (isset($_POST['log'])){
    if (isset($_POST['user'])){
        $user = $conn->escape_string($_POST['user']);
        $result = $conn->query("SELECT * FROM login WHERE userna,e")
    }
} else {
    
}
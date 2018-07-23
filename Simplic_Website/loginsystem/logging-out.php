<?php
session_start();
session_destroy();
sleep(5);
if (isset($_GET['url'])){
    header("Location: ".$_GET['url']);
} else {
    header("Location: ../index.php");
}
die();
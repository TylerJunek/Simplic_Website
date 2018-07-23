<?php

$servername = "198.154.108.70";
$database = "mc44819";
$username = "mc44819";
$password = "a4292adb72";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
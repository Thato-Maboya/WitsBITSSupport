<?php

define('EMAIL','thatomaboya100@gmail.com');
define('PASSWORD', 'support@bits');

$host = 'localhost';
$user = "root";
$pass = "";
$db_name = "support";

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error){
    die("Database connection error: " . $conn->connect_error);
}

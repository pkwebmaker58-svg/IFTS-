<?php
$host = "localhost";
$dbname = "u906769102_IFTS";
$username = "u906769102_IFTS";
$password = "u906769102_IFTS";


$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("DB Connection Failed");
}
?>
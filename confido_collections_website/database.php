<?php
$host = "localhost";
$db = "userdb";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $db);


if ($mysqli->connect_errno){
    die("Error: " . $mysqli->connect_error);
}

return $mysqli;
?>
<?php 
$db_name = "okas";
$mysql_username = "root";
$mysql_password = "";
$server_name = "localhost";

$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);

if ($conn->connect_error) {
    die("connection error<br>" . $conn->connect_error);
}

?>
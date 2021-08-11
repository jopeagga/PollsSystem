<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poll_system";

$con = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($con,"utf8");


if ($con->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
	
}
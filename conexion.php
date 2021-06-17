<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Polls_System";

$con = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($con,"utf8");

if ($con->connect_error) {
    die("No conectado: " . $conn->connect_error);
} else {
     // echo "Conectado";
}

<?php
if (isset($_POST['id_usuario']) && isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['fecha_final'])) {
    include("../../conexion.php");

    date_default_timezone_set("America/Mexico_City");
  	$date = new DateTime();
  	$fecha_inicio = $date->format('Y-m-d H:i:s');
  
    $id_usuario  = $_POST['id_usuario'];
    $titulo      = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha_final = $_POST['fecha_final'];

    $query = "INSERT INTO encuestas (id_usuario, titulo, descripcion, estado, fecha_inicio, fecha_final)
              VALUES ('$id_usuario', '$titulo', '$descripcion', '0', '$fecha_inicio', '$fecha_final')";
    $resultado = $con->query($query);
}

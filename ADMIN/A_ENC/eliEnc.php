<?php
if (isset($_POST['id_encuesta']) && isset($_POST['id_encuesta']) != "") {
    include("../../conexion.php");

    $id_encuesta = $_POST['id_encuesta'];

    $query = "DELETE FROM encuestas WHERE id_encuesta = '$id_encuesta'";
    $resultado = $con->query($query);
}
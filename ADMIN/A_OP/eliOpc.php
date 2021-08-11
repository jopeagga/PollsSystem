<?php
if (isset($_POST['id_opcion']) && isset($_POST['id_opcion']) != "") {
    include("../../conexion.php");

    $id_opcion = $_POST['id_opcion'];

    $query = "DELETE FROM opciones WHERE id_opcion = '$id_opcion'";
    $resultado = $con->query($query);
}

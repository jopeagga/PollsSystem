<?php

include("../../conexion.php");

if (isset($_POST)) {
    $id_opcion    = $_POST['id_opcion'];
    $valor         = $_POST['valor'];

    $query = "
        UPDATE opciones SET
        valor  = '$valor'
        WHERE id_opcion   = '$id_opcion'
    ";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
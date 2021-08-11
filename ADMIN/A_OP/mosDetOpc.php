<?php

include("../../conexion.php");

if (isset($_POST['id_opcion']) && isset($_POST['id_opcion']) != "") {
    $id_opcion = $_POST['id_opcion'];

    $query = "SELECT * FROM opciones WHERE id_opcion = '$id_opcion'" ;
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $response = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else {
        $response['status'] = 200;
        $response['message'] = "Información no encontrada!";
    }
    echo json_encode($response) ;
}
else {
    $response['status'] = 200;
    $response['message'] = "Consulta Invalida!";
}
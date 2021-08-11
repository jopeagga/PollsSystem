<?php

include("../../conexion.php");

if (isset($_POST['id_encuesta']) && isset($_POST['id_encuesta']) != "") {
    $id_encuesta = $_POST['id_encuesta'];

    $query = "SELECT * FROM encuestas WHERE id_encuesta = '$id_encuesta'" ;
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
        $response['message'] = "INFORMACION NO ENCONTRADA";
    }
    echo json_encode($response) ;
}
else {
    $response['status'] = 200;
    $response['message'] = "CONSULTA INVALIDA";
}
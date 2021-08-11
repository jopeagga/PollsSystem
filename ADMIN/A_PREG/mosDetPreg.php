<?php

include("../../conexion.php");

if (isset($_POST['id_pregunta']) && isset($_POST['id_pregunta']) != "") {
   
    $id_pregunta = $_POST['id_pregunta'];

   
    $query = "SELECT * FROM preguntas WHERE id_pregunta = '$id_pregunta'" ;
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
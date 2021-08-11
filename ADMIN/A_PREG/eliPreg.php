<?php
if (isset($_POST['id_pregunta']) && isset($_POST['id_pregunta']) != "") {
    include("../../conexion.php");

    $id_pregunta = $_POST['id_pregunta'];

    $query = "DELETE FROM preguntas WHERE id_pregunta = '$id_pregunta'";
    $resultado = $con->query($query);
}

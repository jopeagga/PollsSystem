<?php

if (isset($_POST['id_encuesta']) && isset($_POST['titulo']) && isset($_POST['id_tipo_pregunta'])) {
    include("../../conexion.php");

    $id_encuesta 		= $_POST['id_encuesta'];
    $titulo     		= $_POST['titulo'];
    $id_tipo_pregunta 	= $_POST['id_tipo_pregunta'];

    $query = "INSERT INTO preguntas (id_encuesta, titulo, id_tipo_pregunta)
              VALUES ('$id_encuesta', '$titulo', '$id_tipo_pregunta')";

    $resultado = $con->query($query);

}

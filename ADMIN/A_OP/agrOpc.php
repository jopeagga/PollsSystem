<?php

if (isset($_POST['id_pregunta']) && isset($_POST['valor'])) {
    include("../../conexion.php");

    $id_pregunta     = $_POST['id_pregunta'];
    $valor 			 = $_POST['valor'];

    $query = "INSERT INTO opciones (id_pregunta, valor)
              VALUES ('$id_pregunta', '$valor')";

    $resultado = $con->query($query);

}

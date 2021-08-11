<?php

include ("../../conexion.php");

if (isset($_POST['id_encuesta'])) {
    $id_encuesta = $_POST['id_encuesta'];
}

$data = '
<table class = "table table-bordered" id = "dataTable" width = "100%" cellspacing = "0" > 
 <thead>
 <tr>
    <th class="text-center">DESCRICIÓN</th>
    <th  class="text-center">TIPO</th>
    <th  class="text-center">DETALLES</th>
    <th  class="text-center">DETALLES</th>
</tr>
</thead>';

$query = "SELECT preguntas.id_pregunta, preguntas.id_encuesta, preguntas.titulo, tipo_pregunta.nombre
            FROM preguntas
            INNER JOIN tipo_pregunta
            ON preguntas.id_tipo_pregunta = tipo_pregunta.id_tipo_pregunta
            WHERE preguntas.id_encuesta = '$id_encuesta'";

$resultado = $con->query($query);

while ($row = $resultado->fetch_assoc()) {
    $data .= '
        <tbody>
            <tr>
                <td>' . $row['titulo'] . '</a></td>
                <td>' . $row["nombre"] . '</td>
                <td>
                    <button onclick="obtenerDetallesPregunta(' . $row['id_pregunta'] . ')" class="btn btn_Deta btn-block">EDITAR</button>
                </td>
                <td>
                <button id="btnGroupDrop1" type="button" class="btn btn_Edit btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DETALLES
              </button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item btn btn-secondary" href="mostrar_opciones.php?id_pregunta=' . $row['id_pregunta'] . '">AÑADIR RESPUESTAS</a>
              <button onclick="eliminarPregunta(' . $row['id_pregunta'] . ')" class="dropdown-item btn btn-primary">ELIMINAR PREGUNTA</button>
              </div>

              </td>
              </tr>
        </tbody>';
}

$data .= '</table>';

echo $data; 
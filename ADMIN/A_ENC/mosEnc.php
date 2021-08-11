<?php
include ("../../conexion.php");

$data = ' 
<table class = "table table-bordered" id = "dataTable" width = "100%" cellspacing = "0" > 
 <thead>
 <tr>
    <th class="text-center">TÍTULO</th>
    <th class="text-center">DESCRICIÓN</th>
    <th  class="text-center">FECHA INICIO</th>
    <th  class="text-center">FECHA FINAL</th>
    <th  class="text-center">DETALLES</th>
    <th  class="text-center">DETALLES</th>
</tr>
</thead>';

$query = "SELECT * FROM encuestas ORDER BY id_encuesta DESC";
$resultado = $con->query($query);

while ($row = $resultado->fetch_assoc()) {
    $data .= '
        <tbody>
            <tr>
                <td class="text-center">' . $row['titulo'] . '</a></td>
                <td width="100">' . mb_strimwidth($row["descripcion"], 0, 30, "...") . '</td>
                <td class="text-center">' . $row["fecha_inicio"] . '</td>
                <td class="text-center">' . $row["fecha_final"] . '</td>
                <td><button onclick="obtenerDetallesEncuesta(' . $row['id_encuesta'] . ')" class="btn btn_Deta btn-block">EDITAR</button></td>
                <td>
                    <button id="btnGroupDrop1" type="button" class="btn btn_Edit btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      DETALLES
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item btn btn-secondary" href="mostrar_preguntas.php?id_encuesta=' . $row['id_encuesta'] . '">AÑADIR PREGUNTAS</a>
                    <a class="dropdown-item btn btn-secondary" href="vista_previa.php?id_encuesta=' . $row['id_encuesta'] . '">VISTA PREVIA</a>
                    <button onclick="publicarEncuesta(' . $row['id_encuesta'] . ')" class="dropdown-item btn btn-primary">SUBIR</button>
                    <button onclick="finalizarEncuesta(' . $row['id_encuesta'] . ')" class="dropdown-item btn btn-secondary">FINALIZAR</button>
                    <a class="dropdown-item btn btn-secondary" href="resultados.php?id_encuesta=' . $row['id_encuesta'] . '">RESULTADOS</a>
                        <button onclick="eliminarEncuesta(' . $row['id_encuesta'] . ')" class="dropdown-item btn btn-danger">ELIMINAR</button>
                    </div>
                </td>
            </tr>
        </tbody>';
}


$data .= '</table>';

echo $data;
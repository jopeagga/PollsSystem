<?php
include ("../../conexion.php");

$query = "SELECT * FROM encuestas WHERE estado = '1'";
$resultado = $con->query($query);
$tamaño = $resultado->num_rows;

$data = "";

if ($tamaño == 0) {
    $data .= "NO HAY ENCUESTAS DISPONIBLES";
} elseif ($tamaño > 0) {

$data = '
<table class = "table table-bordered" id = "dataTable" width = "100%" cellspacing = "0" > 
<thead>
<tr>
   <th class="text-center">TÍTULO</th>
   <th class="text-center">DESCRICIÓN</th>
   <th  class="text-center">FECHA FINAL</th>
   <th  class="text-center">RESPONDER</th>
</tr>
</thead>';

while ($row = $resultado->fetch_assoc()) {
    $data .= '
        <tbody>
            <tr>
                <td class="text-center">' . $row['titulo'] . '</td>
                <td>' . $row["descripcion"] . '</td>
                <td class="text-center">' . $row["fecha_final"] . '</td>
                <td>
                    <a class="btn btn_Edit" href="responder.php?id_encuesta=' . $row['id_encuesta'] . '">CONTESTAR</a>
                </td>
            </tr>
        </tbody>';
}


$data .= '</table>';

}

echo $data;
<?php
include ("../../conexion.php");

if (isset($_POST['id_pregunta'])) {
    $id_pregunta = $_POST['id_pregunta'];
}

$data = '
<table class = "table table-bordered" id = "dataTable" width = "100%" cellspacing = "0" > 
<thead>
<tr>
   <th class="text-center">DESCRIPCIÓN</th>
   <th  class="text-center">DETALLES</th>
   <th  class="text-center">DETALLES</th>
</tr>
</thead>';

$query = "SELECT * FROM opciones WHERE id_pregunta = '$id_pregunta'";

$resultado = $con->query($query);

while ($row = $resultado->fetch_assoc()) {
    $data .= '
        <tbody>
            <tr>
                <td>' . $row["valor"] . '</td>
                <td>
                    <button onclick="obtenerDetallesOpcion(' . $row['id_opcion'] . ')" class="btn btn_Deta btn-block">EDITAR</button>
                     </td>
                <td>
                <button onclick="eliminarOpcion(' . $row['id_opcion'] . ')" class="btn btn_Edit btn-block ">ELIMINAR</button>
            </td>
            </tr>
        </tbody>';
}

$data .= '</table>';

echo $data; 
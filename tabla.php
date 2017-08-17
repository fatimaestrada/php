<?php
include "includes/codigo/conexion.php";
// include "includes/cofigo/funciones.php";

    $salida = array();
    $error = "";
    $linea  = "";


    $sql = "select * from prueba";
    $resultado = $cnli->query($sql) or die ($error = $cnli->error."<br>".$sql);
        if ($resultado->num_rows >  0) {
            while ($registro = $resultado->fetch_assoc()) {
                $linea.="<tr>
                                <td>".$registro["nombre"]."</td>
                                <td>".$registro["importe"]."</td>
                                <td>".$registro["dob"]."</td>
                            </tr>";
            }
        }

    $salida["errores"] = $error;
    $salida["contenido"] = $linea;

    echo json_encode($salida);

 ?>

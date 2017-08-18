<?php
include "../includes/codigo/conexion.php";
// include "includes/cofigo/funciones.php";
$error = "";
$salida = array();
$aEliminar = base64_decode($_POST["aEliminar"]);

    $sql = "delete from prueba where id = $aEliminar";
    $cnli->query($sql) or die ($error = "Error:<br>".$cnli->error."<br>$sql");


$salida["errores"] = $error;
echo json_encode($salida);
exit();
 ?>

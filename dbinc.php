<?php
include "includes/codigo/conexion.php";
// include "includes/cofigo/funciones.php";

    $salida = array();
    $error = "";

    $txtNombre  = $_POST["txtNombre"];
    $txtImporte  = $_POST["txtImporte"];
    $txtFecha  = $_POST["txtFecha"];

    if ($txtNombre == "") {
      $error = "Inserte Nombre";
    }

    if ($error  == "" and $txtImporte == ""){
      $error = "Olvido el importe";
    }

    if ($error == "" and $txtFecha == "") {
      $error = "Fecha Invalida";
    }

    if ($error == ""){
      $sql = "insert into prueba (nombre, importe, dob) values ('$txtNombre', $txtImporte, '$txtFecha')";
      $cnli->query($sql) or die ($error = $cnli->error."<br>".$sql);
    }




    $salida["errores"] = $error;

    echo json_encode($salida);

 ?>

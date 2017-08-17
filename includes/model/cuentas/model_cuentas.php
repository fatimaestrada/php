<?php
    function modelCuentas_rsCuentas($cn, $id_usuario){
        $sql = "select * from cnt_cuentas where titular = " . $id_usuario;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        return $rs;
    }

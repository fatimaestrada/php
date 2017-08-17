<?php
    function modelProyectos_rsProyecto($cn, $id_proyecto){
        $sql = "select * from proyectos where id = " . $id_proyecto;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        return $rs;
    }

    function modelProyectos_rsCliente($cn, $id_proyecto){
        $sql = "select pro.id,pro.nombre, cli.nombre nom_cli
                from proyectos pro
                left join int_clientes cli on cli.id = pro.id_cliente
                where pro.id = " . $id_proyecto;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        return $rs;
    }

    function modelProyectos_rsEstructura($cn, $id_proyecto){
        $sql = "select sectores,fundaciones,subsuelos,planta_baja,plantas
                from proyectos where id = " . $id_proyecto;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        return $rs;
    }

    function modelProyectos_rsPlantasTipo($cn, $id_proyecto){
        $sql = "SELECT planta_tipo, min(nivel) desde, max(nivel) hasta
                FROM proyectos_estructura
                WHERE id_proyecto = $id_proyecto
                AND planta_tipo <> ''
                GROUP BY planta_tipo";
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        return $rs;
    }

    function modelProyectos_rsNiveles($cn, $id_proyecto){
        $sql = "select * from proyectos_estructura where id_proyecto = " . $id_proyecto;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        return $rs;
    }

    function modelProyectos_rsIndices($cn, $id_proyecto){
        $sql = "select pro.id,pro.estmet, pro.indice_arq, pro.implantacion, pro.uso, uso.nombre nom_uso
                from proyectos pro
                left join maestro_usos uso on uso.id = pro.uso
                where pro.id = " . $id_proyecto;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        return $rs;
    }

    function modelProyectos_rsAdicionales($cn, $id_proyecto){
        $sql = "select * from proyectos_adicionales where id_proyecto = " . $id_proyecto;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        return $rs;
    }


    function modelProyectos_Uso($cn, $id_proyecto){
        $sql = "select uso from proyectos where id = " . $id_proyecto;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        if ($rs->num_rows > 0) {
            $rs2 = $rs->fetch_assoc();
            if ($rs2['uso'] == 'null' ) {
                return 0;
            }else{
                return $rs2['uso'];
            }
        }else{
            return 0;
        }
    }

    function modelProyectos_MetrosAModelar($cn, $id_proyecto){
        $sql = "SELECT sum(sup_a_modelar) cant FROM proyectos_estructura where id_proyecto =". $id_proyecto;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        if ($rs->num_rows > 0) {
            $rs2 = $rs->fetch_assoc();
            if ($rs2['cant'] == 'null' ) {
                return 0;
            }else{
                return $rs2['cant'];
            }
        }else{
            return 0;
        }
    }

    function modelProyectos_MetrosCW($cn, $id_proyecto){
        $sql = "SELECT sum(cw) cant FROM proyectos_estructura where id_proyecto =". $id_proyecto;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        if ($rs->num_rows > 0) {
            $rs2 = $rs->fetch_assoc();
            if ($rs2['cant'] == 'null' ) {
                return 0;
            }else{
                return $rs2['cant'];
            }
        }else{
            return 0;
        }
    }

    function modelProyectos_IndiceArquitectura($cn, $id_proyecto){
        $sql = "select indice_arq cant from proyectos where id =". $id_proyecto;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        if ($rs->num_rows > 0) {
            $rs2 = $rs->fetch_assoc();
            if ($rs2['cant'] == 'null' ) {
                return 0;
            }else{
                return $rs2['cant'];
            }
        }else{
            return 0;
        }
    }

    function modelProyectos_MetrosImplantacion($cn, $id_proyecto){
        $sql = "select implantacion cant from proyectos where id =". $id_proyecto;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        if ($rs->num_rows > 0) {
            $rs2 = $rs->fetch_assoc();
            if ($rs2['cant'] == 'null' ) {
                return 0;
            }else{
                return $rs2['cant'];
            }
        }else{
            return 0;
        }
    }



    function modelProyectos_HorasEstimadasSistemas($cn, $id_proyecto){
        $sql = "SELECT sum(tiempo) cant FROM proyectos_sistemas where id_proyecto =". $id_proyecto;
        $rs = $cn->query($sql) or die ($error = "Error:<br>".$cn->error."<br>$sql");
        if ($rs->num_rows > 0) {
            $rs2 = $rs->fetch_assoc();
            if ($rs2['cant'] == 'null' ) {
                return 0;
            }else{
                return $rs2['cant'];
            }
        }else{
            return 0;
        }
    }

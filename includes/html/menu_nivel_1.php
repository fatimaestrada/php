<!--  INICIO  -->
<li>
	<a href="<?php echo $path_home."admin/menu.php"; ?>">Inicio</a>
</li>

<!--  USUARIO  -->
<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Contable <b class="caret"></b></a>
<ul class="dropdown-menu">
    <li><a href="#">DashBoard</a></li>
    <li class="divider"></li>
	<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Compras</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo $path_home."admin_contable/compras/fcgastos/fcgastos.php"; ?>">Factura gastos</a></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/medicion/listado/listado.php"; ?>">Clientes</a></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/cotizar/listado.php"; ?>">Mayoristas</a></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/seguimiento/listado.php"; ?>">Cajas</a></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/listado/listado.php"; ?>">Usuarios</a></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/envio_info.php"; ?>">Cuentas bancarias</a></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/envio_confirmar.php"; ?>">Tarjetas</a></li>
        </ul>
    </li>
    <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bases</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo $path_home."admin_contable/_abm/cuentas/listado.php"; ?>">Cuentas</a></li>
            <li class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/nuevo/nuevo.php"; ?>">Proveedores</a></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/medicion/listado/listado.php"; ?>">Clientes</a></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/cotizar/listado.php"; ?>">Mayoristas</a></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/seguimiento/listado.php"; ?>">Cajas</a></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/listado/listado.php"; ?>">Usuarios</a></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/envio_info.php"; ?>">Cuentas bancarias</a></li>
            <li><a class="dropdown-item" href="<?php echo $path_home."admin/proyectos/envio_confirmar.php"; ?>">Tarjetas</a></li>
        </ul>
    </li>
	<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Movimientos</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo $path_home."admin_contable/movimientos/carga"; ?>">Carga</a></li>
        </ul>
    </li>
</ul>
</li>

















<!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="#">Dropdown Link 1</a></li>
        <li><a href="#">Dropdown Link 2</a></li>
        <li><a href="#">Dropdown Link 3</a></li>
        <li class="divider"></li>
        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown Submenu Link 4.1</a></li>
                <li><a href="#">Dropdown Submenu Link 4.2</a></li>
                <li><a href="#">Dropdown Submenu Link 4.3</a></li>
                <li><a href="#">Dropdown Submenu Link 4.4</a></li>
            </ul>
        </li>
        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown Submenu Link 5.1</a></li>
                <li><a href="#">Dropdown Submenu Link 5.2</a></li>
                <li><a href="#">Dropdown Submenu Link 5.3</a></li>
                <li class="divider"></li>
                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
                        <li><a href="#">Dropdown Submenu Link 5.4.2</a></li>
                        <li class="divider"></li>
                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.3</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Dropdown Submenu Link 5.4.3.1</a></li>
                                <li><a href="#">Dropdown Submenu Link 5.4.3.2</a></li>
                                <li><a href="#">Dropdown Submenu Link 5.4.3.3</a></li>
                                <li><a href="#">Dropdown Submenu Link 5.4.3.4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.4</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Dropdown Submenu Link 5.4.4.1</a></li>
                                <li><a href="#">Dropdown Submenu Link 5.4.4.2</a></li>
                                <li><a href="#">Dropdown Submenu Link 5.4.4.3</a></li>
                                <li><a href="#">Dropdown Submenu Link 5.4.4.4</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</li> -->


<!-- ********************** MAESTROS ************************ -->
<!-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="na" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Maestros
    </a>
    <div class="dropdown-menu" aria-labelledby="n1">
        <a class="dropdown-item" href="<?php //echo $path_home."admin_contable/_abm/cuentas/listado.php"; ?>">Cuentas</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/nuevo/nuevo.php"; ?>">Proveedores</a>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/medicion/listado/listado.php"; ?>">Clientes</a>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/cotizar/listado.php"; ?>">Mayoristas</a>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/seguimiento/listado.php"; ?>">Cajas</a>

        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/listado/listado.php"; ?>">Usuarios</a>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/envio_info.php"; ?>">Cuentas bancarias</a>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/envio_confirmar.php"; ?>">Tarjetas</a>
    </div>
</li> -->


<!-- ********************** PROYECTOS ************************ -->
<!-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="n1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Proyectos
    </a>
    <div class="dropdown-menu" aria-labelledby="n1">
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/nuevo/nuevo.php"; ?>">Nuevo</a>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/medicion/listado/listado.php"; ?>">Medición</a>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/cotizar/listado.php"; ?>">Cotización</a>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/seguimiento/listado.php"; ?>">Seguimiento</a>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/iniciar/listado.php"; ?>">Iniciar</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/listado/listado.php"; ?>">Listado</a>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/envio_info.php"; ?>">Envio de info</a>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/envio_confirmar.php"; ?>">Confirmacion de info</a>
        <a class="dropdown-item" href="<?php //echo $path_home."admin/proyectos/proyectos_avance.php"; ?>">Avance</a>
    </div>
</li> -->

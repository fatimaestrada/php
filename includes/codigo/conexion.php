<?php

	// $server = "127.0.0.1";			// host del MySQL
	// $database = "millerco_avance";		// Selecciona la base de datos
	// $dbuser = "root";		// aqui debes ingresar el nombre de usuario para acceder a la base de datos
	// $dbpass = "2798";	// password de acceso para el usuario de la base de datos
	// $cn = mysql_connect($server, $dbuser, $dbpass) or die("Error 1: ".mysql_error()); // die Imprime un mensaje y termina el script actual
	// mysql_select_db($database, $cn);


	$DB_NAME = 'intranet';
	$DB_HOST = '10.0.0.3';
	$DB_USER = 'root';
	$DB_PASS = 'Revit2016./';
	$cnli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	if (mysqli_connect_errno()) {printf("Connect failed: %s\n", mysqli_connect_error());exit();	}


	// $server = "127.0.0.1";			// host del MySQL
	// $database = "millerco_avance";		// Selecciona la base de datos
	// $dbuser = "millerco_u";		// aqui debes ingresar el nombre de usuario para acceder a la base de datos
	// $dbpass = "Tola2o1o";	// password de acceso para el usuario de la base de datos
	// $cn = mysql_connect($server, $dbuser, $dbpass) or die("Error 1: ".mysql_error()); // die Imprime un mensaje y termina el script actual
	// mysql_select_db($database, $cn);
	//
	//
	//
	// $DB_NAME = 'millerco_avance';
	// $DB_HOST = 'localhost';
	// $DB_USER = 'millerco_u';
	// $DB_PASS = 'Tola2o1o';
	// $cnli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	// if (mysqli_connect_errno()) {printf("Connect failed: %s\n", mysqli_connect_error());exit();	}


?>

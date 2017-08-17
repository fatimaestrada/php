<?php
	if (isset($_SESSION["ses_logueado"])) {
		if ($_SESSION["ses_logueado"] <> 1){
			//msgbox ("No estas logueado");
			ir_a("index.php");
		} else {
			//$nombre_usuario = $_SESSION["ses_usuario"];
			//msgbox ("Bienvenido: $nombre_usuario");
		}  
	}else{
		//msgbox ("No estas logueado");
		ir_a("index.php");
	}
	
	/*session_start();
	if (isset($_SESSION['xusuario']))
	{
		$xusuario=	$_SESSION['xusuario'];
		if ($xusuario=='')
		{?>			
       		<SCRIPT LANGUAGE="javascript">
			//alert("Tenes que estar logueado para ingresar a esta pagina");
			location= "admin_login.php";
      		</SCRIPT><?php
		}else{
			//estoy aca porque la session existe
		};
	}else{?>			
        <SCRIPT LANGUAGE="javascript">
			//alert("Tenes que estar logueado para ingresar a esta pagina");
			location = "admin_login.php";
      	</SCRIPT><?php	
	}*/
?> 
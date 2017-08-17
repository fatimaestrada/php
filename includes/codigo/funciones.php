<?php
	$separador="&nbsp;<img src='../../img/derecha.png'  height='9' />&nbsp;";


function gon_getTIME($formatMYSQL){
	return date("G:i:s");
}

function gon_getDATE($formatMYSQL){
	if ( $formatMYSQL == true ){
		return date('Y-m-d');
	}else{
		return date('d/m/Y');
	}

}

function gon_getDATETIME($formatMYSQL){
	if ( $formatMYSQL == true ){
		return  date('Y-m-d') ." ". date("G:i:s");
	}else{
		return  date('d/m/Y') ." ". date("G:i:s");
	}
}






function cargar_cbo($xsql,$xvalue,$xtexto,$xseleccionado)
{
	include ("conexion.php");
	$rs = $cnli->query($xsql) or die( "Error: ".$cnli->error );
	if ( $rs->num_rows > 0){
		while ( $rs2 = $rs->fetch_assoc() ){
			$xquepongo= $rs2[$xtexto];
			$sel='';
			if ( $rs2[$xvalue]== $xseleccionado){$sel='Selected';};
			echo "<option value='".$rs2[$xvalue]."' $sel >$xquepongo</option>";
		}
	}
}

function msgbox ($msg)
{
	echo "<script language='javascript'>alert('$msg');</script>";
}


 function ir_a($url)
 {
	 echo "<script language='javascript'>location='$url';</script>";
 }

function filtro($campo)
{

	//Array con las posibles cadenas a utilizar por un hacker
	$CadenasProhibidas = array("Content-Type:","MIME-Version:",
        //evita email injection
        "Content-Transfer-Encoding:","Return-path:","Subject:","From:","Envelope-to:","To:","bcc:","cc:","UNION",
        // evita sql injection
        "DELETE","DROP","SELECT","INSERT","UPDATE","CRERATE","TRUNCATE","ALTER","INTO","DISTINCT","GROUP BY","WHERE","RENAME","DEFINE","UNDEFINE",
        "PROMPT","ACCEPT","VIEW","COUNT","HAVING","'",'"',"{","}","[","]","LIKE",
         // evita introducir direcciones web
        "WWW","W W W",". c o m","$",
         //variables y comodines
        "&","*");

        //Comprobamos que entre los datos no se encuentre alguna de
        //las cadenas del array. Si se encuentra alguna cadena se
        //dirige a una página de Forbidden
        $campo = strip_tags($campo);
        foreach($CadenasProhibidas as $valor)
        {
                $campo = str_ireplace ($valor, "", $campo);
        }
	return $campo;
}

//******************************* REDIMENCIONAR IMAGENES ***********************************************
function redim($ruta1,$ruta2,$ancho,$alto){
	# se obtene la dimension y tipo de imagen
	$datos=getimagesize ($ruta1);

	$ancho_orig = $datos[0]; # Anchura de la imagen original
	$alto_orig = $datos[1];    # Altura de la imagen original
	$tipo = $datos[2];

	if ($tipo==1){ # GIF
		if (function_exists("imagecreatefromgif"))
		$img = imagecreatefromgif($ruta1);
		else
		return false;
	}
	else if ($tipo==2){ # JPG
		if (function_exists("imagecreatefromjpeg"))
		$img = imagecreatefromjpeg($ruta1);
		else
		return false;
	}
	else if ($tipo==3){ # PNG
		if (function_exists("imagecreatefrompng"))
		$img = imagecreatefrompng($ruta1);
		else
		return false;
	}

	# Se calculan las nuevas dimensiones de la imagen
	if ($ancho_orig>$alto_orig){
		$ancho_dest=$ancho;
		$alto_dest=($ancho_dest/$ancho_orig)*$alto_orig;
	}else{
		$alto_dest=$alto;
		$ancho_dest=($alto_dest/$alto_orig)*$ancho_orig;
	}

	// imagecreatetruecolor, solo estan en G.D. 2.0.1 con PHP 4.0.6+
	$img2=@imagecreatetruecolor($ancho_dest,$alto_dest) or $img2=imagecreate($ancho_dest,$alto_dest);

	// Redimensionar
	// imagecopyresampled, solo estan en G.D. 2.0.1 con PHP 4.0.6+
	@imagecopyresampled($img2,$img,0,0,0,0,$ancho_dest,$alto_dest,$ancho_orig,$alto_orig) or imagecopyresized($img2,$img,0,0,0,0,$ancho_dest,$alto_dest,$ancho_orig,$alto_orig);

	// Crear fichero nuevo, según extensión.
	if ($tipo==1){ // GIF
		if (function_exists("imagegif")){
			imagegif($img2, $ruta2);
		}else{
			return false;
		}
	}

	if ($tipo==2){ // JPG
		if (function_exists("imagejpeg")){
			imagejpeg($img2, $ruta2);
		}else{
			return false;
		}
	}

	if ($tipo==3){  // PNG
		if (function_exists("imagepng")){
			imagepng($img2, $ruta2);
		}else{
			return false;
		}
	}

	return true;
}


//************************************************** CLEAR CACHE **************************************************
/*function clear_cache(){
 //PRIMERO MARCAMOS QUE ESTA PAGINA EXPIRO EN UNA FECHA ANTERIROR A HOY
 header("Expires: Mon, 23 Jun 1982 10:00:00 GMT");
 //AHORA LA MARCAMOS CON FECHA DE MODIFICACION IGUAL A HOY
 header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
 //CREAMOS LAS PROPIEDADES RESTRICTIVAS DEL CACHE
 header("Cache-Control: no-store, no-cache, must-revalidate");
 header("Cache-Control: post-check=0, pre-check=0", false);
 header("Pragma: no-cache");
}
*/

function fecha_a_txt($fecha){
	return substr($fecha,8,2)."/".substr($fecha,5,2 )."/".substr($fecha,0,4 );
}

function fecha_a_mysql($fecha){
	return substr($fecha,6,4)."-".substr($fecha,3,2 )."-".substr($fecha,0,2 );
}

function date_mysql(){
  $fecha=getdate();
  $anios=$fecha["year"];
  $meses=$fecha["mon"];
  $dias=$fecha["mday"];
  return "$anios-$meses-$dias";
}

function time_mysql($mostrar_segundos){
  $fecha=getdate();
  $horas=$fecha["hours"];
  if (strlen($horas)==1){$horas="0".$horas;}
  $minutos=$fecha["minutes"];
  if (strlen($minutos)==1){$minutos="0".$minutos;}
  $segundos=$fecha["seconds"];
  if (strlen($segundos)==1){$segundos="0".$segundos;}

  if ($mostrar_segundos==true){
	  return "$horas:$minutos:$segundos";
  }else{
	  return "$horas:$minutos";
  }
}

function date_txt(){
  $fecha=getdate();
  $anios=$fecha["year"];
  $meses=$fecha["mon"];
  $dias=$fecha["mday"];
  return "$dias/$meses/$anios";
}

function sumar_horas($hora1,$hora2){
	$hora1=split(":",$hora1);
	$hora2=split(":",$hora2);
	$horas=(int)$hora1[0]+(int)$hora2[0];
	$minutos=(int)$hora1[1]+(int)$hora2[1];
	$horas+=(int)($minutos/60);
	$minutos=$minutos%60;
	if($horas<10)$horas="0".$horas ;
	if($minutos<10)$minutos="0".$minutos ;
	return $horas.":".$minutos;
}

function controlar_login($donde_lo_mando){
	if (isset($_SESSION["ses_logueado"])) {
		if ($_SESSION["ses_logueado"] <> 1){
			//msgbox ("No estas logueado");
			ir_a($donde_lo_mando);
			exit();
		} else {
			//$nombre_usuario = $_SESSION["ses_usuario"];
			//msgbox ("Bienvenido: $nombre_usuario");
		}
	}else{
		//msgbox ("No estas logueado");
		ir_a($donde_lo_mando);
		exit();
	}
}


 	function validarFecha($input,$format="")
    {
        $input_array= explode("/",$input);
        if ($format=="dmy") {
            return checkdate($input_array[0],$input_array[1],$input_array[2]);
        } elseif ($format=="ymd") {
            return checkdate($input_array[1],$input_array[2],$input_array[0]);
        } else {
            return checkdate($input_array[1],$input_array[0],$input_array[2]);
        }
        $input_array=array();
    }






	function validarFecha2($input){
		if(datecheck($input)===false){
			return "false";
		}else{
			return "true";
		}
	 }

 	function datecheck($input,$format="") {
        $input_array= explode("/",$input);
        if ($format=="dmy") {
            return checkdate($input_array[0],$input_array[1],$input_array[2]);
        } elseif ($format=="ymd") {
            return checkdate($input_array[1],$input_array[2],$input_array[0]);
        } else {
            return checkdate($input_array[1],$input_array[0],$input_array[2]);
        }
        $input_array=array();
    }


//pasa los saltos de linea \n a <br>
function br2nl($string)
{
    return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
}


function encrypt($string, $key) {
   $result = '';
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)+ord($keychar));
      $result.=$char;
   }
   return base64_encode($result);
}
//$cadena_encriptada = encrypt("LA CADENA A ENCRIPTAR","LA CLAVE");



function decrypt($string, $key) {
   $result = '';
   $string = base64_decode($string);
   for($i=0; $i<strlen($string); $i++) {
      $char = substr($string, $i, 1);
      $keychar = substr($key, ($i % strlen($key))-1, 1);
      $char = chr(ord($char)-ord($keychar));
      $result.=$char;
   }
   return $result;
}
//$cadena_desencriptada = decrypt("LA CADENA ENCRIPTADA","LA CLAVE QUE SE USÓ PARA ENCRIPTARLA");

<?php
/*
Archivo:  ctrlTablaJugador.php
Objetivo: consulta general sobre jugadores, devuelve objeto JSON con
		  successful, sSit (ok o texto error), arrJugadores
		  (arreglo de Jugador:clave, nombre completo)
Autor:    BAOZ
*/
include_once("modelo/Producto.php"); //incluye a usuario
session_start();
$sErr="";
$arrProductos=null;
$oProd = new Producto();
$sCadJson="";
	/*Verificar que exista sesión*/
	if (isset($_REQUEST["campo"]) && !empty($_REQUEST["campo"])){
		$oProd->set_equipo(floatval($_REQUEST["campo"]));
	}else{
		$oProd->set_equipo("");
	}

	try{
		$arrProductos = $oProd->buscarTodosFiltro();

		if ($arrProductos == null || count($arrProductos)==0)
			$sErr = "No hay Producto registrados";
	}catch(Exception $e){
		//Enviar el error específico a la bitácora de php (dentro de php\logs\php_error_log
		error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
		$sErr = "Error en base de datos, comunicarse con el administrador";
	}

	if ($sErr == ""){

		$sCadJson =
		'{
			"successful":true,
			"sSit": "ok",
			"arrProductos":[';

		//Recorrer arreglo para llenar objetos
		foreach($arrProductos as $oProductos){
			$sCadJson = $sCadJson.'{
					"id_prod": '.$oProductos->get_id().',
					"nombre":"'.$oPers->get_nom().'"
					},';
		}
		//Sobra una coma, eliminarla
		$sCadJson = substr($sCadJson,0, strlen($sCadJson)-1);

		//Colocar cierre de arreglo y de objeto
		$sCadJson = $sCadJson.'
			]
		}';
	}
	else{
		$sCadJson =
		'{
			"successful":false,
			"sSit": "'.$sErr.'",
			"arrProductos": []
		}';
	}
	header('Content-type: application/json');
	echo $sCadJson;
?>

<?php

require_once('../Services/bdServices.php');
$usuario = $_POST['usuario'];
$clave = $_POST['contra'];


if($usuario != null and $clave != null){
	
	$bd = new bdServices();
	$comando = "SELECT * FROM `administradores` WHERE `Correo electronico`= '".$usuario."' AND `Contraseña`= '".$clave."'";
	//$conexion = mysqli_connect('localhost','root','','testluscher');
	$resulta = $bd->insertar($comando);
	//$resulta = mysqli_query($conexion,$comando);
	//$resulta->store_result();
	$filas = mysqli_num_rows($resulta);

	
	if($filas>0){

	header("location: ../../public/usuario?");
	}else{
	
	echo "estan vacios los cmapos";
}

//	$bd->cierre($resultado);

}
<?php
namespace App\Services;
use Illuminate\Http\Request;


class bdServices {


	private $host;
	private $user;
	private $basedatos;
	private $conexion;
	private $passw;


	public function __construct(){

		$this->host = 'localhost';
		$this->user = 'root';
		$this->basedatos = 'testluscher';
		$this->passw = '';
	}


	public function insertar($comando){
		$squl= $comando;
		$conexion = mysqli_connect($this->host,$this->user,$this->passw,$this->basedatos);
		$resultado = mysqli_query($conexion,$squl);
		return	$resultado;
		//cierre($resultado);	
	}

	public function cierre($resultado){
	mysqli_free_result($resultado);
		$conexion = mysqli_connect($this->host,$this->user,$this->passw,$this->basedatos);
		mysqli_close($conexion);
	}






}

?>
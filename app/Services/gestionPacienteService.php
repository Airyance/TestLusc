<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Paciente;
use App\Services\bdServices;


class gestionPacienteService{
	
	


	public function validarExistencia(Request $paciente){   // SE VALIDA QUE EL USUARIO EXISTA EN LA BASE DE DATOS DE PACIENTES

		$pacien = new Paciente;
		$pacien = $paciente;
		$usuario= $pacien->Usuario;
		$clave = $pacien->Contraseña;
		$bd= new bdServices();
		$comando = "SELECT * FROM `pacientes` WHERE `Usuario`= '".$usuario."'";  // SENTENCIA SQUL PARA VALIDAR EL USUARIO
		$resultado=$bd->insertar($comando);
		$filas = mysqli_num_rows($resultado);
		
		if($filas>0){			// el usuario ya existe en el sistema 
		
			return false;;
		
		}else{

			return true;		}		// el usuario no existe se puede proceder a registartlo

	}



	public function crearUsuario(Request $pacien){  // SE REALIZA EL REGISTRIO DEL PACIENTE


		$comando = "INSERT INTO `pacientes`(`Consecutivo`, `Nombre`, `Apellidos`, `Id`, `Numero`, `Telefono`, `Direccion`, `Correo`, `Usuario`, `Contraseña`, `Fecha_nacimiento`, `Hab_test`, `Mostrar_paciente`, `Observaciones`, `id_admin`, `created_at`, `updated_at`) VALUES ('0','".$pacien->Nombre."','".$pacien->Apellidos."','".$pacien->Id."','".$pacien->Numero."','".$pacien->Telefono."','".$pacien->Direccion."','".$pacien->Correo."','".$pacien->Usuario."','".$pacien->Contraseña."','".$pacien->Fecha_nacimiento."','0','1','','','','')";   // COMANDO SQUL PARA INGRESAR EL PACIENTE
		$bd = new bdServices();
		$bd->insertar($comando);


		return true;


	}

public function obtenerID(Request $pacien){

		$bd = new bdServices(); 
		$Usua = $pacien->Usuario;
		$comando="SELECT `Consecutivo` FROM `pacientes` WHERE `Usuario`= '".$Usua."'";
		$resultado=$bd->insertar($comando);
		$filas = mysqli_num_rows($resultado);

		if($filas>0){  // SI EXISTE UN USUARIO CON ESE USUARIO

			$auxiliar = $resultado->fetch_assoc();			// SE DESCOMPONE EL ARRAY DE RESULTADO
			$id = $auxiliar['Consecutivo'];	
			session(['Usuario' => $Usua]);					// SE PROCEDE A GURADAR LOS DATOS DE SESSION
			session(['IdUsuario' => $id]);
		} else{

				session(['Usuario' => null]);
				session(['IdUsuario' =>null]);

		}

		

}





}









?>
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Paciente;
use App\Services\gestionPacienteService;

class gestionPacienteController extends Controller
{


	
	public function validar(Request $request){

		$contra1=$request->contraseña1Paciente;
		$contra2=$request->contraseña2Paciente;
		
		if($contra1 === $contra2){		// SE VALIDA QUE LAS DOS CONTRASEÑAS SEAN IGUALES

		$contra = encrypt($contra1);  //SE APLICA ENCRYPTADO DE LAS CONTRASEÑAS
		$paciente = new Paciente;		// SE CREA EL OBJETO PACIENTE
		$paciente = $request;				//SE IGUALAN LOS VALORES DEL FORMULARIO DENTRO DEL OBJETO PACIENTE
		$paciente->Contraseña = $contra;	 // SE ASIGNA LA CONTRASEÑA AL PACIENTE. PORQUE ES NECESARIO GUARDA ES LA ENCRIPTADA
		$gestion = new gestionPacienteService();  	// SE CREA EL OBJETO DE gestionPacienteServices
		$ocurrencia = $gestion->validarExistencia($paciente);   // SE PROCED3E A VALIDAR LA EXISTENCIA DE UN PACIENTE DEVUELVE TRUE O FALSE
		
		if($ocurrencia==false){  // SI YA EXISTE EL USUARIO SE LANZA EL MENSAJE
			//echo '<script type="text/javascript">alert(El usuario ya se encuentra registrado en el sistema);</script>';
			return view('realizarTest');  //SE DEVUELVE A LA VENTANA DE REGISTRO
		}else{										// EL USUARIO NO EXISTE SE PROCEDE A REGISTRARLO
			$gestion->crearUsuario($paciente);		// SE CREA EL USUARIO
			$gestion->obtenerID($paciente);			//SE PROCEDE A OBTENER EL ID DE PACIENTE

			if(session('Usuario')==null){
				return view('/');}
			else{

				return view('test');   		// SE PROCEDE A REALIZAR EL TEST
			} 	
		}}else{
			//echo '<script type="text/javascript">alert(Las Contraseñas no coinciden);window.location.href="../resources/views/realizarTest.blade.php" </script>';
			
			return view('realizarTest');  // LAS CONTRASEÑAS NO COINCIDEN SE PROCEDE A RETORNAR LA VISTA DE REALIZAR TEST
			
		}	

	}



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\sessionService;


class sessionController extends Controller{


public function inicio(Request $request){ // esta funcio redirecciona a las personas deacuerdo si son pacientes o administradoes

	$usuario = $request->usuario;
	$clave = $request->contra;
	$log = new sessionService();			// se crea el onjeto sessionServices

	if($usuario != null && $clave != null){  // se valida que los campos de usuario y clave no esten vacios

		$vista = $log->role1($request);			// se valida si el usuario esxiste en la tabla administradores
		
		if($vista==true){
			
			$log->cargarDaAdmin($usuario);   // se procede a cargar los datos del administrador
			return view('gestion');				// si es asi se procede a enviarlo a la pantalla de usuarios y gestion
		}else{

			$vista=$log->role2($request);		// si no es asi se procede a validar si existe en la tabla de usuarios
			
			if($vista==true){						// se esta registrado en la base de datos de pacientes

			$log->cargarDaPaciente($usuario);		// se procede a cargar los datos del paciente en la base de datos
				return view('welcome');			

			}else{

				return view('login');
			}
		}

	}else{

			return view('login');
	}

}


}
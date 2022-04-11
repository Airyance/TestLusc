<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\bdServices;

class adminController extends Controller
{
    



public function diagnostico(Request $request){
$valor = $_POST["bandera"];	

session(['idDiagnostic'=>$valor]);

return view('diagnosticodetall');

}


public function editarPsicologo(Request $request){

	$contraseña=$request->Contra;
	$contraseña2=$request->Contra2;

	if($contraseña==$contraseña2){

		$bd=new bdServices();
		$Nombre = $request->Nombre;
		$Apellidos = $request->Apellidos;
		$Usuario = $request->Usuario;
		$Correo = $request->Correo;
		$Telefono = $request->Telefono;

		$contraseña= encrypt($contraseña2);
		$comando="UPDATE `administradores` SET `Nombre`='".$Nombre."',`Apellidos`='".$Apellidos."',`Correo`='".$Correo."',`Usuario`='".$Usuario."',`Contraseña`='".$contraseña."',`Telefono`='".$Telefono."' WHERE `id`='1'";
		$bd->insertar($comando);
		return view('/login');


	}else{

		echo "";
		return view('editarPsicologo');
	}

	
}


public function paciente(Request $request){


	$recibido=$_POST["textoarea"];
	$bd= new bdServices();
	$comando="UPDATE `pacientes` SET `Observaciones`='".$recibido."' WHERE `Consecutivo`='".session('ConsecutivoPaciente')."'";
	$bd->insertar($comando);
	return view('gestion');

}







}

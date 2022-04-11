<?php
namespace App\Services;
use Illuminate\Http\Request;
use App\Services\bdServices;


class sessionService{
	
	

public function role1(Request $request){

	$usuario=$request->usuario;        // SE EXTRAEN LOS VALORES DE LO USUARIO Y CONTRASEÑA DEL REQUEST ENVIADO POR EL TESTCONTROLLER
	$clave = $request->contra;
	$bd = new bdServices();
	$comando="SELECT `Contraseña` FROM `administradores` WHERE  `Usuario`= '".$usuario."' ";  // SENTENCIA SQUL PARA LA TABLA ADMINISTRADORES
	
	$resultado = $bd->insertar($comando);				// SE ENVIA LA SENTENCIA AL bdSERVICES PARA QUE EJECUTE EL COMANDO
	$filas = mysqli_num_rows($resultado);				// SE VERIFIA QUE SI EXISTA EL USUARIO

	if($filas>0){										// SI EXISTE EL USUARIO $filas DEBE SER = A 1
		
		$auxiliar = $resultado->fetch_assoc();			// SE DESCOMPONE EL ARRAY DE RESULTADO
		$clave2 = $auxiliar['Contraseña'];				// SE EXTRAE LA CONTRASEÑA ENCRIPTADA DEL ADMINISTRADOR
		$password = decrypt($clave2);					// SE DESENCRYPTA LA CONTRASEÑA

			if($password==$clave){						// SE COMPARA SI LA CONTRASEÑA USADA POR EL USUARIO ES LA MISMA DE LA BD
			session(['Usuario' => $usuario]);

				return true;							// SI ES CORRECTA LA CONTRASEÑA
			}else{

				return false;							// NO ES CORRECTA LA CONTRASEÑA
			}

	}else{

		return false;									// NO SE EXISTE ESE USUARIO EN LA BASE DE DATOS
	}
	


}




public function role2(Request $request){

	$usuario=$request->usuario;        // SE EXTRAEN LOS VALORES DE LO USUARIO Y CONTRASEÑA DEL REQUEST ENVIADO POR EL TESTCONTROLLER
	$clave = $request->contra;
	$bd = new bdServices();
	$comando="SELECT `Contraseña` FROM `pacientes` WHERE  `Usuario`= '".$usuario."' ";  // SENTENCIA SQUL PARA LA TABLA PACIENTES
	
	$resultado = $bd->insertar($comando);				// SE ENVIA LA SENTENCIA AL bdSERVICES PARA QUE EJECUTE EL COMANDO
	$filas = mysqli_num_rows($resultado);				// SE VERIFIA QUE SI EXISTA EL USUARIO

	if($filas>0){										// SI EXISTE EL USUARIO $filas DEBE SER = A 1
		
		$auxiliar = $resultado->fetch_assoc();			// SE DESCOMPONE EL ARRAY DE RESULTADO
		$clave2 = $auxiliar['Contraseña'];				// SE EXTRAE LA CONTRASEÑA ENCRIPTADA DEL ADMINISTRADOR
		$password = decrypt($clave2);					// SE DESENCRYPTA LA CONTRASEÑA

			if($password==$clave){						// SE COMPARA SI LA CONTRASEÑA USADA POR EL USUARIO ES LA MISMA DE LA BD

				return true;							// SI ES CORRECTA LA CONTRASEÑA
			}else{

				return false;							// NO ES CORRECTA LA CONTRASEÑA
			}

	}else{

		return false;									// NO SE EXISTE ESE USUARIO EN LA BASE DE DATOS
	}
	


}


public function cargarDaAdmin($usuario){

	$usua = $usuario;
	$bd = new bdServices();
	$comando = "SELECT `Nombre`, `Apellidos`, `Correo`, `Usuario`, `Contraseña`, `Telefono` FROM `administradores` WHERE `Usuario`= '".$usua."'";
	$aux = $bd->insertar($comando);
	$contenedor = $aux->fetch_assoc();
    $Nombre = $contenedor['Nombre'];
	$Apellidos = $contenedor['Apellidos'];
	$Correo = $contenedor['Correo'];
	$Usuario = $contenedor['Usuario'];
	$Contraseña = $contenedor['Contraseña'];
	$Telefono = $contenedor['Telefono'];
	session(['Nombre' =>$Nombre ]);
	session(['Apellidos' =>$Apellidos ]);
	session(['Correo' =>$Correo ]);
	session(['Usuario' =>$Usuario ]);
	session(['Contraseña' =>$Contraseña ]);
	session(['Telefono' =>$Telefono ]);

}

public function cargarDaPaciente($usuario){

	$usua = $usuario;
	$bd = new bdServices();
	$comando = "SELECT `Consecutivo`, `Nombre`, `Apellidos`, `Id`, `Numero`, `Telefono`, `Direccion`, `Correo`, `Usuario`, `Contraseña`, `Fecha_nacimiento`, `Hab_test`FROM `pacientes` WHERE `Usuario`= '".$usua."'";
	$aux = $bd->insertar($comando);
	$contenedor = $aux->fetch_assoc();
    
	$Direccion = $contenedor['Direccion'];	
	$Fecha_nacimiento =	 $contenedor['Fecha_nacimiento'];
	$Id = $contenedor['Id'];
	$Numero= $contenedor['Numero'];
	$Consecutivo=$contenedor['Consecutivo'];
	$Nombre = $contenedor['Nombre'];
	$Apellidos = $contenedor['Apellidos'];
	$Correo = $contenedor['Correo'];
	$Usuario = $contenedor['Usuario'];
	$Contraseña = $contenedor['Contraseña'];
	$Telefono = $contenedor['Telefono'];
	$Hab_Test = $contenedor['Hab_test'];

	session(['Nombre' => $Nombre ]);
	session(['Direccion' => $Direccion ]);
	session(['Fecha_nacimiento' =>  $Fecha_nacimiento]);
	session(['Id' =>  $Id]);
	session(['Numero' =>  $Numero]);
	session(['Consecutivo' =>  $Consecutivo]);
	session(['Apellidos' =>  $Apellidos]);
	session(['Correo' =>  $Correo]);
	session(['Usuario' =>  $Usuario]);
	session(['Contraseña' =>  $Contraseña]);
	session(['Telefono' =>  $Telefono]);
	session(['Hab_Test' => $Hab_Test]);



}

}

?> 
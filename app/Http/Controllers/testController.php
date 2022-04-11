<?php

namespace App\Services;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\testService;


	$primerTest;
	$segundoTest;
	

class testController extends Controller{


	

public function test(Request $request){  	// RECIBE LOS VALORES DEL PRIMER TEST Y LOS REDIRECCIONA AL SEGUNDO TEST, ADEMAS GRADAR EL RESULTADO
	global $primerTest;
	$primerTest = $_POST["valor1"];			// SE TRECIBEN LOS VALORES POR EL METODO POST Y SE GRUADAN
	
	session(['test1' => $primerTest]);
	
	return view('test2');					// ENVIA LA VISTA DEL TEST2
}

public function test2(Request $request2){  		// RECIBE LOS VALORES DEL SEGUNDO TEST Y LOS REDIRECCIONA AL TESTSERVICES
	
	$segundoTest=$_POST["valor2"];				// GRADARMOS LOS DATOS DE LOS TEST2
	$tServices = new testService();				// SE CREA EL ENLACE AL TEST SERVICES
	session(['test2' => $segundoTest]);
	$matriz = $tServices->conversorMatiz(session('test1'),$segundoTest);		// SEN ENVIAN LO VALORES AL TESTSERVICES.
	$signoTest2 = $tServices->diagnosticar($matriz);
	$resultFinal = $tServices->Interpretacion($segundoTest,$signoTest2);  //	SE PROCEDE A CREAR EL VECTOR FINAL DEL TEST
	$compensacion = $tServices->compensacion($matriz);		// SE LLAMA AL METODO QUE GENERA LA COMPENSACION
	$Ansiedad = $tServices->Ansiedad($matriz);

	$estres=$tServices->Estres();

	
	
	return view('welcome');				// HAY QUE MOFICIAR EL ENLACE HACIA LA PAGINA USUARIO
	


    
}}

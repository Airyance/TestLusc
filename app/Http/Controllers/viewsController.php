<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class viewsController extends Controller
{
   

public function login(){

	
	return view('login');
}

public function paciente(){

	return view('paciente');
}

public function gestion(){

	return view('gestion');
}

public function realizarTest(){

	return view('realizarTest');

}

public function welcome(){

	return view('welcome');

}


public function usuario(){

return view('usuario');

}


public function test(){return view('test');}


public function test2(){

return view('welcome');

}





public  function editarPsicologo(){


	return view('editarPsicologo');
}

}

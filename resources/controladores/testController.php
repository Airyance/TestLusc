<?php
	require_once('../Services/testServices.php');
	session_start();
	$nombrePaciente = $_POST['nombrePaciente'];
	$apellidosPaciente = $_POST['apellidosPaciente'];
	$direccionPaciente = $_POST['direccionPaciente'];
	$numeroPaciente = $_POST['numeroPaciente'];
	$fechaPaciente = $_POST['fechaPaciente'];
	$documentoPaciente = $_POST['documentoPaciente'];
	$numeroId = $_POST['numeroId'];
	$nombreAcudiente = $_POST['nombreAcudiente'];
	$numeroAcudiente = $_POST['numeroAcudiente'];
	$emailPaciente = $_POST['emailPaciente'];
	$contraseña1Paciente = $_POST['contraseña1Paciente'];
	$contraseña2Paciente = $_POST['contraseña2Paciente'];
	$_SESSION['nombrePaciente'] = $nombrePaciente;
	$_SESSION['apellidosPaciente'] = $apellidosPaciente;
	$_SESSION['direccionPaciente'] = $direccionPaciente;
	$_SESSION['numeroPaciente'] = $numeroPaciente;
	$_SESSION['fechaPaciente'] = $fechaPaciente;
	$_SESSION['documentoPaciente'] = $documentoPaciente;
	$_SESSION['numeroId'] = $numeroId;
	$_SESSION['nombreAcudiente'] = $nombreAcudiente;
	$_SESSION['numeroAcudiente'] = $numeroAcudiente;
	$_SESSION['emailPaciente'] = $emailPaciente;
	$_SESSION['contraseña1Paciente'] = $contraseña1Paciente;
	$_SESSION['contraseña2Paciente'] = $contraseña2Paciente;

	if($contraseña1Paciente == $contraseña2Paciente){

		$TestInicia = new testServices();

	}

?>
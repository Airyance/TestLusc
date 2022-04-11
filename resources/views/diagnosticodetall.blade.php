<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{asset('../resources/views/styles/paciente.css')}}">

    <title> Detalles | TestLuscher</title>
</head>

<body>

<!--  AQUI INICIA EL CODIGO PARA LA BARRA DE NAVEGACION DE LAS PESTAÑAS   -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container active">
  <a class="navbar-brand" href="#">Test de Luscher</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" href="{{url('/gestion')}}" id="inicio">Bandeja de entrada</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/paciente')}}" id="listado_diagnosticos">Pacientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}" id="cerrar_sesion">Cerrar Sesion</a>
      </li>
      

    </ul>
    
  </div>
  </div>
</nav>

</section>


<section id="cabecera"> 



	<div class="container">
		<?php

	$conexion=mysqli_connect('localhost','root','','testluscher');
	$squl="SELECT `Tipo`, `Definicion` FROM `proced_diagnosticos` WHERE `Id_diag`= '10'";
	$squl2="SELECT `Desc_ansiedad`,`Desc_estres`,`Des_compensacion` FROM `diagnosticos` WHERE `id_test`='10'";
	$resultado = mysqli_query($conexion,$squl);
	$resultado2 = mysqli_query($conexion,$squl2);
	
	
	 ?>
			

			<div class="row" id="primeraLinea">
			<div class="col-md-8 mb-2">
				<h3>Resultado diagnostico</h3>
				<textarea class="form-control" rows="24" id="textoarea" ><?php 
					while($aux=$resultado->fetch_assoc()){
							
							$aux2=implode("\n", $aux);
							echo $aux2."\n"."\n";
				;} 

				while($aux3=$resultado2->fetch_assoc()){
							
							$aux4=implode("\n", $aux3);
							echo $aux4."\n"."\n";
				;} 

				?></textarea>

				
			</div>
		



		</div>

	








	</div>


	



</section>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>

 

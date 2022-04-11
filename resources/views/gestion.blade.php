<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{asset('../resources/views/styles/gestion.css')}}">
    <script src="../resources/js/jquery-3.5.1.min.js"></script>
    <title> Gestion admin | TestLuscher</title>
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
        <a class="nav-link" href="{{url('/editarPsicologo')}}" id="inicio">Actualiza datos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/paciente')}}" id="listado_pacientes">Pacientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}" id="Cerrar_sesion">Cerrar Sesion</a>
      </li>

    </ul>
    
  </div>
  </div>
</nav>

<!--  AQUI FINALIZA EL CODIGO PARA LA BARRA DE NAVEGACION DE LAS PESTAÑAS   -->

<section id="info">
	<div>
		<h1 class="container">Bandeja de entrada</h1>

	</div>


</section>

<!-- AQUI INICIA EL CODIGO DE LA TABLA DE DIAGNOSTICOS -->

<section id="cabecera">
	<div class="container" id="tabla_Diagnosticos">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover table-condensed" style="font-size: 13px">
				<tr>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Nivel de prioridad</th>
					<th>Fecha</th>
					<th>Id test</th>
					<th>Editar</th>

				</tr>
				
	<!-- AQUI SE EMCAPSULA EL CODIGO CON LA CONEXION DE LA BASE DE DATOS  -->

			
<?php
	$conexion=mysqli_connect('localhost','root','','testluscher');
	$squl="SELECT `Nombre`, `Apellidos`,`N_estres`, `id_test`,`Fecha_examen` FROM `pacientes`,`diagnosticos`,`tests` WHERE `id_test`= `Consecutivo` GROUP BY `id_test`";
	$resultado = mysqli_query($conexion,$squl);

	while($mostrar=mysqli_fetch_array($resultado)):?>

				<tr class="oj">
					<td><?php echo $mostrar['Nombre'] ?></td>
         
					<td><?php echo $mostrar['Apellidos'] ?></td>
					<td><?php echo $mostrar['N_estres'] ?></td>
					<td><?php echo $mostrar['Fecha_examen'] ?></td>
					<td><?php echo $mostrar['id_test']; ?></td>
					<td><form action="../public/diagnosticodetall" method="POST">
  @csrf
  <input type="hidden" id="texto" value="" name="bandera">
						<button type="submit" class="btn btn-warning container" id="botun" ><i><ion-icon name="create-outline"></ion-icon></i></button></form>
           
					</td>




				</tr>


<?php endwhile; ?>



<script type="text/javascript">
  
  $(".btn-warning").click(function() {
    var $row = $(this).closest('tr');    
   var $text = $row.find('td:eq(4)').text(); 
    document.getElementById("texto").value=$text;
    
});



</script>


<!-- AQUI FINALIZA EL CODIGO CON LA CONEXION DE LA BASE DE DATOS  -->



			</table>

		</div>

	</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Diagnosticos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container">
       	<form>
       	    <div class="form-row">
    		  <div class="col-md-12 mb-2">
     		  <label for="exampleFormControlTextarea1">Diagnostico sugerido</label>
     		  <textarea class="form-control" rows="3"></textarea>
    		  </div>
  		  </div>
  		  <div class="form-row">
    	   <div class="col-md-12 mb-2">
     	   <label for="exampleFormControlTextarea1">Diagnostico final</label>
     	   <textarea class="form-control" rows="3"></textarea>
    	   </div>
  	   </div>
       	</form>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




</section>

<!-- AQUI FINALIZA LA TABLA DE DIAGNOSTICOS -->





    <!-- Optional JavaScript<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>
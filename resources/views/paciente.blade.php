<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{asset('../resources/views/styles/paciente.css')}}">

    <title> Pacientes | TestLuscher</title>
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
        <a class="nav-link" href="{{url('/gestion')}}" id="inicio">Bandeja de entrada </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/editarPsicologo')}}" id="listado_diagnosticos">Actualizar datos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}" id="cerrar_sesion">Cerrar Sesion</a>
      </li>

    </ul>
    
  </div>
  </div>
</nav>

<!--  AQUI FINALIZA EL CODIGO PARA LA BARRA DE NAVEGACION DE LAS PESTAÑAS   -->

<section id="info">
  <div>
    <h1 class="container">Listado de pacientes</h1>

  </div>


</section>

<!-- AQUI INICIA EL CODIGO DE LA TABLA DE PACIENTES -->

<section id="cabecera">
  <div class="container form-row col-md-8" id="tabla_pacientes">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover table-condensed" style="font-size: 13px">
        <tr>
         
          
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Telefono</th>
          <th>Fecha de nacimiento</th>
          <th>Correo</th>
          <th>Tipo</th>
          <th>Numero</th>
          

        </tr>
        
  <!-- AQUI SE EMCAPSULA EL CODIGO CON LA CONEXION DE LA BASE DE DATOS  -->

      
<?php
  $conexion=mysqli_connect('localhost','root','','testluscher');
  $squl="SELECT `Nombre`,`Apellidos`,`Telefono`,`Fecha_nacimiento`,`Apellidos`, `Id`, `Numero`,
`Correo` FROM `pacientes` ORDER BY `Consecutivo` DESC";
  $resultado = mysqli_query($conexion,$squl);

  while($mostrar=mysqli_fetch_array($resultado)):?>

        <tr>
          
          <td><?php echo $mostrar['Nombre'] ?></td>
          <td><?php echo $mostrar['Apellidos'] ?></td>
          <td><?php echo $mostrar['Telefono'] ?></td>
          <td><?php echo $mostrar['Fecha_nacimiento'] ?></td>
          <td><?php echo $mostrar['Correo']?></td>
          <td><?php echo $mostrar['Id']?></td>
          <td><?php echo $mostrar['Numero']?></td>

        


        </tr>

<?php endwhile; ?>
     </table>

<!-- AQUI FINALIZA LA TABLA DE DIAGNOSTICOS -->

    </div>

  </div>


<!-- AQUI INICIA LA VENTANA EMERGENTE (MODAL) -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="container">
         <form>
           <div class="form-row">
    <div class="col-md-6 mb-2">
      <label for="validationTooltip01">Nombre</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-2">
      <label for="validationTooltip02">Apellidos</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
 
  <div class="form-row">
    <div class="col-md-8 mb-2">
      <label for="validationTooltip03">Direccion</label>
      <input type="text" class="form-control" id="validationTooltip03" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>

    <div class="col-md-4 mb-2">
      <label for="validationTooltip04">Núm tel</label>
      <input type="number" class="form-control" id="validationTooltip04" required>
      
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div>

  </div>

  <div class="form-row">
    <div class="col-md-3 mb-2">
      <label for="validationTooltip05">F.N.</label>
        <div class="input-group date cuadro-calendario">
          <input type="text" class="form-control" id="validationTooltip05" required><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
        </div>

        <div class="invalid-tooltip">
         Porfavor ingrese la fecha de nacimiento
        </div>
    </div>
    <div class="col-md-4 mb-2">
      <label>Id</label>
        <select class="custom-select">
          <option selected disabled value="">Tipo</option>
          <option>Cedula</option>
          <option>Targeta de Ident.</option>
        </select>
    </div>

    <div class="col-md-5 mb-2"><label>Núm</label>
      <input type="number" class="form-control">
    </div>
  <div class="form-row">
   <div class="col-md-6 mb-2">
      <label>Acudiente</label>
      <input type="text" class="form-control">
    </div>      

    <div class="col-md-6 mb-2">
      <label>Núm tel</label>
      <input type="number" class="form-control">
    </div>
  </div> 
  </div>
  <div class="form-row">
    <div class="col md-7 mb-3">
    <label>Email</label>
    <input type="email" class="form-control">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="col md-5 mb-3">
    <label>Contraseña</label>
    <input type="password" class="form-control">
  </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-2">
     <label for="exampleFormControlTextarea1">Observaciones</label>
     <textarea class="form-control" rows="3"></textarea>
    </div>
  </div>
         </form>
       </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
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
<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{asset('../resources/views/styles/usuario.css')}}">

    <title> Usuario | TestLuscher</title>
</head>
<body>

<!--  AQUI INICIA EL CODIGO PARA LA BARRA DE NAVEGACION DE LAS PESTAÑAS   -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container active">
  <a class="navbar-brand" href="{{url('welcome')}}">Test de Luscher</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" href="{{url('welcome')}}" id="inicio">Inicio </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/test')}}" id="realizar test">Realizar Test</a>
      </li>
    </ul>
    
  </div>
  </div>
</nav>
 <!--  AQUI FINALIZA LA BARA DE NAVEGACION  -->


<!--AQUI INICIA EL EMCABEZADO DE LA PAGINA -->

<section id="encabezado">
  
  <div class="container">
    <h2>Bienvenido</h2>
    <p>A continuación podras editar tus datos personales y accederas a tu interfaz del Test.</p>

  </div>

</section>



<!-- AQUI INICIA EL FORMULARIO DE ACTULIZACION DE DATOS DEL USUARIO -->

<div class="container" >
 
<form class="needs-validation" id="formularioEdicion">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Nombre</label>
      <input type="text" class="form-control" id="validationTooltip01" value="" required name="" placeholder=<?php echo session('Nombre'); ?>>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Apellidos</label>
      <input type="text" class="form-control" id="validationTooltip02" value="" required name="" placeholder=<?php echo session('Apellidos'); ?> >
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
 
  <div class="form-row">
    <div class="col-md-8 mb-3">
      <label for="validationTooltip03">Direccion</label>
      <input type="text" class="form-control" id="validationTooltip03" required name="" placeholder=<?php echo session('Direccion'); ?> >
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>

    <div class="col-md-2 mb-2">
      <label for="validationTooltip04">Número de telefono</label>
      <input type="number" class="form-control" id="validationTooltip04" required name="" placeholder=<?php echo session('Telefono'); ?> >
      
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-2 mb-2">
      <label for="validationTooltip05">Fecha de nacimiento</label>
        <div class="input-group date cuadro-calendario">
          <input type="text" class="form-control" id="validationTooltip05" required name="" placeholder=<?php echo session('Fecha_nacimiento'); ?> ><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
        </div>

        <div class="invalid-tooltip">
         Porfavor ingrese la fecha de nacimiento
        </div>
    </div>

  </div>

  <div class="form-row">
    <div class="col-md-2 mb-2">
      <label>Identificacion</label>
        <select class="custom-select" required name="" placeholder=<?php echo session('Id'); ?> >
          <option selected disabled value="" >Tipo</option>
          <option>Cedula</option>
          <option>Targeta de Ident.</option>
        </select>
    </div>

    <div class="col-md-3 mb-3"><label>Número</label>
      <input type="number" class="form-control" required name="" placeholder=<?php echo session('Numero'); ?> >
    </div>

    <div class="col-md-5 mb-2">
      <label>Nombre del Acudiente</label>
      <input type="text" class="form-control" required name="" placeholder= >
    </div>      

    <div class="col-md-2 mb-2">
      <label>Número de telefono</label>
      <input type="number" class="form-control" required name="" placeholder= >
    </div>
  </div>

  <div class="form-row">
    <div class="col md-4 mb-3">
    <label>Correo Electrónico del paciente</label>
    <input type="email" class="form-control" required name="" placeholder=<?php echo session('Correo'); ?> >
    <small id="emailHelp" class="form-text text-muted">Podras ser contactado por este medio</small>
  </div>
  <div class="col md-4 mb-3">
    <label>Contraseña</label>
    <input type="password" class="form-control" required name="">
  </div>
  <div class="col md-4 mb-3">
    <label>Repita la contraseña</label>
    <input type="password" class="form-control" required name="">
  </div>
  </div>
  <br>

  <button class="btn btn-primary" type="submit">Actualizar Datos</button>
  <button class=" btn btn-warning" type="submit" onclick="{{url('welcome#informacion')}}">Realizar Test</button>
</form>


</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>
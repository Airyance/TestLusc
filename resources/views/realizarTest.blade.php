<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="../resources/librerias/date-picker/css/bootstrap-datepicker.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{asset('../resources/views/styles/realizarTest.css')}}">
     
    <title> Realizar Test| TestLuscher</title>
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
        <a class="nav-link" href="{{url('/login')}}" id="cerrar_sesion">Iniciar Sesión</a>
      </li>
    </ul>
    
  </div>
  </div>
</nav>


<!--  AQUI FINALIZA EL CODIGO PARA LA BARRA DE NAVEGACION DE LAS PESTAÑAS   -->


<section id="cabecera">
<div class="container" id="formularioTxt">
 <h2>Formulario de registro</h2><br>
 <p>Antes de iniciar el test de colores de Luscher es necesario que realice el registro correspondiente.</p>

<form class="needs-validation" action="../public/test" method="POST">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip01">Nombre</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Escriba su nombre" value="" required name="Nombre">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationTooltip02">Apellidos</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Escriba sus apellidos" value="" required name="Apellidos">
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>
 
  <div class="form-row">
    <div class="col-md-8 mb-3">
      <label for="validationTooltip03">Dirección</label>
      <input type="text" class="form-control" id="validationTooltip03" required name="Direccion">
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>

    <div class="col-md-2 mb-2">
      <label for="validationTooltip04">Número de telefono</label>
      <input type="number" class="form-control" id="validationTooltip04" required name="Telefono">
      
      <div class="invalid-tooltip">
        Please select a valid state.
      </div>
    </div>
    <div class="col-md-2 mb-2">
      <label for="validationTooltip05">Fecha de nacimiento</label>
        <div class="input-group date cuadro-calendario">
          <input type="text" class="form-control" id="validationTooltip05" required name="Fecha_nacimiento"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
        </div>

        <div class="invalid-tooltip">
         Porfavor ingrese la fecha de nacimiento
        </div>
    </div>

  </div>

  <div class="form-row">
    <div class="col-md-2 mb-2">
      <label>Identificación</label>
        <select class="custom-select" name="Id">
          <option selected disabled value="">Tipo</option>
          <option>Cedula</option>
          <option>Targeta de Ident.</option>
        </select>
    </div>

    <div class="col-md-3 mb-3"><label>Número</label>
      <input type="number" class="form-control" name="Numero">
    </div>

    <div class="col-md-5 mb-2">
      <label>Nombre del Acudiente</label>
      <input type="text" class="form-control" name="NombreAcudiente">
    </div>      

    <div class="col-md-2 mb-2">
      <label>Número de telefono</label>
      <input type="number" class="form-control" name="NumeroAcudiente">
    </div>
  </div>

  <div class="form-row">
    <div class="col md-3 mb-3">
    <label>Correo Electrónico del paciente</label>
    <input type="email" class="form-control" name="Correo">
    <small id="emailHelp" class="form-text text-muted">Podra ser contactado por este medio.</small>
  </div>

  <div class="col-md-3 mb-3">
      <label for="validationTooltip01">Usuario</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Escriba su usuario" value="" required name="Usuario">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  <div class="col md-3 mb-3">
    <label>Contraseña</label>
    <input type="password" class="form-control" name="contraseña1Paciente" required>
  </div>
  <div class="col md-3 mb-3">
    <label>Repita la contraseña</label>
    <input type="password" class="form-control" name="contraseña2Paciente" required>
  </div>
  </div>
  <br>
    {{csrf_field()}}
  <button class="btn btn-primary" type="submit">Registrar</button>
</form>

</div>

</section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../resources/librerias/date-picker/js/bootstrap-datepicker.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    
    <script type="text/javascript">
          $('.cuadro-calendario').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true

    });

    </script>
</body>

</html>
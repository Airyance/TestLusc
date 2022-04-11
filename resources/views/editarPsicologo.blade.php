<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="../resources/librerias/date-picker/css/bootstrap-datepicker.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{asset('../resources/views/styles/realizarTest.css')}}">
     
    <title> Editar Psicologo | TestLuscher</title>
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
        <a class="nav-link" href="{{url('/gestion')}}" id="cerrar_sesion">Bandeja de entrada</a>
      </li>
    </ul>
    
  </div>
  </div>
</nav>


<!--  AQUI FINALIZA EL CODIGO PARA LA BARRA DE NAVEGACION DE LAS PESTAÑAS   -->


<section id="cabecera">
<div class="container" id="formularioTxt">
 <br>
 <h3>Bienvenido psicologo(a)</h3>
 <p>Aqui podrás editar tus datos:</p>


<form class="needs-validation" action="../public/editarPsicologo" method="POST">
  

<div class="container">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Nombre</label>
      <input type="text" class="form-control" value="" required name="Nombre" placeholder=<?php echo session('Nombre'); ?>>
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Apellidos</label>
      <input type="text" class="form-control" value="" required name="Apellidos" placeholder=<?php echo session('Apellidos'); ?>>
      
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Telefono</label>
      <input type="text" class="form-control" value="" required name="Telefono" placeholder=<?php echo session('Telefono'); ?>>
      
    </div>
  </div>
<div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationTooltip03">Correo</label>
      <input type="text" class="form-control" value="" required name="Correo" placeholder= <?php echo session('Correo'); ?>>
      
    </div>

    <div class="col-md-3 mb-2">
      <label for="validationTooltip04">Usuario</label>
      <input type="text" class="form-control" value="" required name="Usuario" placeholder=<?php echo session('Usuario'); ?> >

    </div>
    <div class="col-md-3 mb-2">
      <label for="validationTooltip05">Contraseña</label>
<input type="password" class="form-control"   value="" required name="Contra">
        
    </div>

    <div class="col-md-3 mb-2">
      <label for="validationTooltip05">Contraseña</label>
<input type="password" class="form-control" value="" required name="Contra2">
        
    </div>

    
  </div>
  {{csrf_field()}}
  <input type="submit" class="btn btn-primary" name="" value="Actualizar datos">

</div>
  
 



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
    

</body>

</html>
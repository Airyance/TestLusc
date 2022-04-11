<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="utf-8">

    <title> Login | TestLuscher</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{asset('../resources/views/styles/login.css')}}">

</head>
<body>

<!--  AQUI INICIA EL CODIGO PARA LA BARRA DE NAVEGACION DE LAS PESTAÑAS   -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container active">
  <a class="navbar-brand" href="{{url('/')}}">Test de Luscher</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>


</nav>

<!--  AQUI FINALIZA EL CODIGO PARA LA BARRA DE NAVEGACION DE LAS PESTAÑAS   -->



  <div class="modal-dialog text-center container">
    <div class="col main-section">
      <div class="modal-content">
        <div class="col-12 user-img">
          <img src="../resources/views/imagenes/avatar.png">
        </div>

        <div class="col-12 form-input">
          <form action="../public/gestion" method="POST">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Ingrese su usuario" name="usuario">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Ingrese su contraseña" name="contra">
            </div>
            <button type="submit" class="btn btn-success">Ingresar</button>

          </form>
        </div>

        <div class="col-12 forgot">
          <a name="etq_registrar" href="{{url('/realizarTest')}}">Registrarse</a>
        </div>
      </div>
    </div>
  </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>
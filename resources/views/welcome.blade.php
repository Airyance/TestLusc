<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{asset('../resources/views/styles/estilo.css')}}">

    <title> Inicio | TestLuscher</title>
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
        <a class="nav-link" href="{{url('/')}}" id="inicio">Cerrar Sesión </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/realizarTest')}}" id="realizar test"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/usuario')}}" id="iniciar sesion">Editar Datos</a>
      </li>
    </ul>
    
  </div>
  </div>
</nav>

<!--  AQUI FINALIZA EL CODIGO PARA LA BARRA DE NAVEGACION DE LAS PESTAÑAS   -->

<section id="hero">
    <div class="container">
        
        <h1>Test de Luscher</h1>
        <p>Bienvenidos al test de personalidad de Luscher</p>

    </div>


</section>

<section id="informacion" >
    <div class="container-fluid">
        <div class="content-center" align="center">
            <h1>¿ Como uso la aplicacion ?</h1>
            <h2>¿ Necesitas contactar a la psicologa Aleydis Morales ?</h2>
            <p>Puedes ponerte en contacto con ella llenando el siguiente formulario.</p>
        </div>
    </div>
</section>
<section id="formulario">
    
    <div class="container">
      <form class="needs-validation">
        <div class="form-row"><div class="col-md-3 mb-3"></div>
          <div class="col-md-6 mb-3">
           <label for="validationTooltip01">Asunto</label>
           <input type="text" class="form-control" id="validationTooltip01" placeholder="" value="" required>
            <div class="valid-feedback">
            Looks good!
          </div>
         </div>
        </div>
        <div class="form-row"><div class="col-md-3 mb-3"></div>
         <div class="form-group col-md-6 mb-3">
          <label for="exampleFormControlTextarea1">Mensaje</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
         </div>
        </div>
      </form>
    </div>
    <div class="container">
      <button type="button" class="btn btn-primary" id="botonMensaje">Enviar mensaje</button>
    </div>
</section>


<!-- AQUI INICIA EL CARRUSEL DE LA PAGINA DE INICIO -->

<section id="carusel">
    <div class="container" align="center">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../resources/views/imagenes/bkg4.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../resources/views/imagenes/bkg6.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../resources/views/imagenes/bkg8.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    </div>    


</section>

<section id="final">
    <div class="container-fluid" align="center" >
        
        <h2>Universidad de Cartagena</h2>
        <p>Programa de Ingenieria de Sistemas   
        </p>
        Antonio Cortez Sampayo<br>
        Airyance Mazo Ruidiaz <br>
        Leslie Morales Caceres<br>


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
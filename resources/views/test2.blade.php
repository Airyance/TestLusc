<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{asset('../resources/views/styles/test.css')}}">

    <title> Test | TestLuscher</title>
</head>
<body>

<!--  AQUI INICIA EL CODIGO PARA LA BARRA DE NAVEGACION DE LAS PESTAÑAS   -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container active">
  <a class="navbar-brand">Test de Luscher</a>
  </div>
</nav>

<!--AQUI INICIA EL ENCABEZADO DEL TEST2 -->

<div class="container">
  <br><br><p>Una ultima vez.<br>No es necesario que repitas el mismo orden del test anterior:</p>
</div>

<!-- AQUI INICIA EL CODIGO DE LOS BOTONES DE COLORES DEL TEST2 -->

<section>
  <form action="../public/welcome" method="POST">
  @csrf
  <div class="container">
    <div class="row" id="primeraLinea">
      <div class="col-md-3 mb-2"  >
        <div id="recuadro1">
          <button type="button" class="btn btn-block" id="boton6" onclick="return detectar(this);"></button>
        </div>
      </div>

      <div class=" col-md-3 mb-2" >
        <div id="recuadro2">
          <button type="button" class="btn btn-block" id="boton4" onclick="return detectar(this);"></button>
        </div>
      </div>

      <div class=" col-md-3 mb-2" >
        <div id="recuadro3">
          <button type="button" class="btn btn-block" id="boton7" onclick="return detectar(this);"></button>
        </div>
      </div>

      <div class=" col-md-3 mb-2" >
        <div id="recuadro4">
          <button type="button" class="btn btn-block" id="boton5" onclick="return detectar(this);"></button>
        </div>
      </div>

    </div>

    <div class="row" id="segundaLinea">
      <div class="col-md-3 mb-2">
        <div id="recuadro5">
          <button type="button" class="btn btn-block" id="boton1" onclick="return detectar(this);"></button>
        </div>
      </div>
      <div class="col-md-3 mb-2">
        <div id="recuadro6">
          <button type="button" class="btn btn-block" id="boton3" onclick="return detectar(this);"></button>
        </div>
      </div>
      <div class="col-md-3 mb-2">
        <div id="recuadro7">
          <button type="button" class="btn btn-block" id="boton0" onclick="return detectar(this);"></button>
        </div>
      </div>
      <div class="col-md-3 mb-2">
        <div id="recuadro8">
          <button type="button" class="btn btn-block" id="boton2" onclick="return detectar(this);"></button>
        </div>
      </div>


    </div>


  </div>
  <div><input type="hidden" id="texto" value="" name="valor2"></div>

<div class="container"><button id="ok" class="btn btn-warning" onclick="" type="submit" disabled="true">Finalizar Test</button></div>
</form>
</section>


<script type="text/javascript" >
  var eleccion=[];
  var contador=0;

  function detectar(el){
    
        if(el.id==="boton0"){
      eleccion[contador]="0";
      contador++;
      el.disabled=true;
     
    }
    if(el.id==="boton1"){
      eleccion[contador]="1";
      contador++;
      el.disabled=true;

    }
    if(el.id==="boton2"){
      eleccion[contador]="2";
      contador++;
      el.disabled=true;
    }
    if(el.id==="boton3"){
      eleccion[contador]="3";
      contador++;
      el.disabled=true;

    }
    if(el.id==="boton4"){
      eleccion[contador]="4";
      contador++;
      el.disabled=true;

    }
    if(el.id==="boton5"){
      eleccion[contador]="5";
      contador++;
      el.disabled=true;

    }
    if(el.id==="boton6"){
      eleccion[contador]="6";
      contador++;
      el.disabled=true;

    }    
    if(el.id==="boton7"){
      eleccion[contador]="7";
      contador++;
      el.disabled=true;

    }
  
    if (contador===8) {
      document.getElementById("ok").disabled=false;
      document.getElementById("texto").value=eleccion;
      
      
    }

  }


</script>


<!-- -->

<!-- -->

<!-- -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>
<html>
  <head>
    <title></title>
    <meta content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body{
      font-family: 'Exo', sans-serif;
    }
    .header-col{
      background: #E3E9E5;
      color:#536170;
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
    .header-calendar{
      background: #EE192D;color:white;
    }
    .box-day{
      border:1px solid #E3E9E5;
      height:150px;
    }
    .box-dayoff{
      border:1px solid #E3E9E5;
      height:150px;
      background-color: #ccd1ce;
    }
    </style>

  </head>
  <body>

    <div class="container">
      <div style="height:50px"></div>
      <h1>< tutofox /> <small>Oh my code!</small></h1>
      <p class="lead">
      <h3>Evento</h3>
      <p>Detalles de evento</p>
      <a class="btn btn-default"  href="{{ asset('/Evento/index') }}">Atras</a>
      <hr>



      <div class="col-md-6">
        <form action="{{ asset('/Evento/create/') }}" method="post">
          <div class="fomr-group">
            <h4>Titulo</h4>
            {{ $event->titulo }}
          </div>
          <div class="fomr-group">
            <h4>Descripcion del Evento</h4>
            {{ $event->descripcion }}
          </div>
          <div class="fomr-group">
            <h4>Fecha</h4>
            {{ $event->fecha }}
          </div>
          <br>
          <input type="submit" class="btn btn-info" value="Guardar">
        </form>
      </div>


      <!-- inicio de semana -->


    </div> <!-- /container -->

    <!-- Footer -->
<footer class="page-footer font-small blue pt-4">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    Developed by Artyom from
    <a href="https://www.tutofox.com/">  < tutofox/></a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

  </body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Menu SM laboratorista</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Pacientes<span class="sr-only">(current)</span></a></li>--> 

              <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pacientes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/pacientes/historial">Historial</a></li>
            <li><a href="/pacientes/registrados">Información</a></li>
            <li><a href="/pacientes/captura">Captura de resultados</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seguridad<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/accesos">Accesos</a></li>
            <li><a href="/doctores">Doctores</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/usuarios">Usuarios</a></li>
          </ul>
        </li>

            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lotes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/lotes">Historial general</a></li>
            <li><a href="/informacion">Información</a></li>
          </ul>
        </li>

            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/pacientes/registro">Registro</a></li>
            <li><a href="/pacientes/registro">Generación de código</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/envio">Envío de info</a></li>
          </ul>
        </li>



      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/inicio">Inicio</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Info</a></li>
            <li><a href="#">Contactar</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
        <div class="panel panel-default">
  <div class="panel-heading">Información de los tipos de análisis</div>
  <div class="panel-body">
         Inicio... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>
</div>
</div>
<div class="container">
<div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">Examen de sangre</h4>
    <p class="list-group-item-text">200 pesos</p>
    <p class="list-group-item-text">3 días de espera</p>
    <p class="list-group-item-text">Otras características</p>
  </a>
   <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">Examen de sangre</h4>
    <p class="list-group-item-text">200 pesos</p>
    <p class="list-group-item-text">3 días de espera</p>
    <p class="list-group-item-text">Otras características</p>
  </a>
   <a href="#" class="list-group-item">
   <h4 class="list-group-item-heading">Examen de sangre</h4>
    <p class="list-group-item-text">200 pesos</p>
    <p class="list-group-item-text">3 días de espera</p>
    <p class="list-group-item-text">Otras características</p>
  </a>
</div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>

<!doctype html>
<html lang="es"> <!--Lenguaje-->
<head>
<title>Matrícula en Línea</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
 <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
			<li><a href="miscursos.html">Mis Cursos</a></li>
            <li><a href="mensajes.html">Mensajes</a></li>  
            <li><a href="notificaciones.html">Notificaciones</a></li>
            <li><a href="#">Escoger Cursos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          
<?php
if (!isset($loggedUser)) {
?>
          <li><a class="btn btn-outline-info my-2 my-sm-0" href="index.php?a=register">Register</a></li>
          &nbsp;&nbsp;
          <li><a class="btn btn-outline-success my-2 my-sm-0" href="index.php?a=login">Login</a></li>
<?php
} else {
  
  echo '<li><a <span style="color: blue; font-weight: bold;">Hi, ' . $loggedUser->username . '</span></a></li>&nbsp;&nbsp;&nbsp;';
?>
          <li><a class="btn btn-outline-danger my-2 my-sm-0" href="index.php?a=logout">Logout</a></li>
<?php
}
?>
        </ul>
        
    </div>
</nav>

<!--
<nav aria-label="...">
  <ul class="pagination pagination-lg">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
  
  <
  <div class="list-group">
  <a href="#" class="list-group-item active">
    Escoger Cursos  <span class="glyphicon glyphicon-search"></span> 
  </a>
  <a href="#" class="list-group-item list-group-item-action"> <span class="glyphicon glyphicon-plus-sign"></span> Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action"> <span class="glyphicon glyphicon-plus-sign"></span> Morbi leo risus</a>
  <a href="#" class="list-group-item list-group-item-action"> <span class="glyphicon glyphicon-plus-sign"></span> Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action"> <span class="glyphicon glyphicon-plus-sign"></span> Vestibulum at eros</a>
</div>
  -->



    





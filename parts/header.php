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
			<li><a href="index.php?a=courses">Mis Cursos</a></li> <!--02-06-18-->
            <li><a href="index.php?a=messages">Mensajes</a></li>   <!--02-06-18-->
            <li><a href="index.php?a=notifications">Notificaciones</a></li>
            <li><a href="index.php?a=takecourses">Escoger Cursos</a></li>
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



    





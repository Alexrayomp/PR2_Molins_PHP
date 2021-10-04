<?php
session_start();
$_SESSION['username'] = "Alex120";
$_SESSION['authuser'] = 1;
?>

<!DOCTYPE html>
<html>
<head>
<title>Practica 2 - PHP - Alejandro Molins</title>
<meta charset="utf-8">
</head>
 <body>

<h1>Historial Academico</h1>
<form action="parte2.php" method="post">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    Suma 1: <input type="text" name="sumaa"><br>
    Suma 2: <input type="text" name="sumab"><br>
    Suma 3: <input type="text" name="sumac"><br>
    <input type="submit" value="Enviar">
</body>
</html>

<?php
echo "Historial Academico";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$sumaa = $_POST['sumaa'];
$sumab = $_POST['sumab'];
$sumac = $_POST['sumac'];


echo "<br/> Nombre Del Alumno: $nombre ";
echo "<br/> Email Del Alumno: $email ";

echo $_GET['edad'];
$edad = 19;
echo "<br/> Edad Del Alumno: " ;
echo $edad;

echo '<br/> <a href="http://www.fpllefia.com/">Link Centro</a>';
$sumatotal = $sumaa+$sumab+$sumac;

echo "<br/> La suma total de los numero introducidos son: $sumatotal ";


$movierate = 8;
echo "<br/> Tiene una media de: ";
echo $movierate;

$info = $_COOKIE['nombre'];
echo "<br/> Informacion de la cookie: $nombre ";

echo date("l jS \of F Y h:i:s A");

$var;
var_dump( is_null($var) );

?>
<?php
//Desarrollar un sitio web, que reciba por GET, cinco variables, nombre , apellido, edad, ciudad y nacionalidad y que devuelva dichas variables con un mensaje similar.



$nombre= $_GET['nmb']; 
$apellido=$_GET['ap'];
$edad =$_GET['ed'];
$ciudad=$_GET['ciu'];
$nacionalidad=$_GET['nac'];

echo 'nombre ='.$nombre;
echo "<br>";
echo 'apellido ='.$apellido;
echo "<br>";
echo 'edad =' .$edad;
echo "<br>";
echo 'ciudad ='.$ciudad;
echo "<br>";
echo 'nacionalidad ='.$nacionalidad;
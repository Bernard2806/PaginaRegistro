<?php
// SQL Datos
$Server = 'localhost';
$User =  'root';
$Password = '';
$DB = '';
// Conexion SQL
$con = mysqli_connect($Server,$User,$Password,$DB);
// Chequeo de conexion
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>
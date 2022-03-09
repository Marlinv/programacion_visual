<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "sakila";

$conexion = mysqli_connect($hostname, $username, $password, $database) 
    or die ("no se puede entrar a la base de dato: " . mysqli_connect_error())
;
?>
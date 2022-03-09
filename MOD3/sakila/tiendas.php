<?php 

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = "Tiendas";

$error = "";

try {
    throw new Exception("Hola, feo");
} 
    catch(Throwable $ex) {
$error = $ex->getMessage();
    }

#incluir la vista
require_once "vistas/vista_tiendas.php";

#no debe haber codigo despues de esta linea
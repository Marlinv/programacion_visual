<?php 

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = "language";

$error = "";

try {

    #borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al boton
    if (isset($_POST["boton-guardar"]) ) {
        echo "guardando...";
        //variable
        $name = $_POST ['name'];
        //validacion
        if (empty($name)){
            throw new Exception ("El nombre no puede estar vacio");
        }
        //guardar
        $query = "INSERT INTO language ('name') VALUES ('$name')";

        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";
        } else {
            throw new Exception("No se puede insertar los datos");
        }
    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}

#incluir la vista
require_once "vistas/vista_language.php";

#no debe haber codigo despues de esta linea
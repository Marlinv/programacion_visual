<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = "Staff";

$error = "";

try {

    #borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    //verificar si le da click al boton
    if (isset($_POST['boton-guardar'])) {
        echo "guardando...";

        //variable
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $address_id = $_POST["address_id"];
        $email = $_POST["email"];
        $store_id = $_POST["store_id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        //validacion
        if (empty($first_name)) {
            throw new Exception("Esto no puede estar vacio");
        }
        if (empty($last_name)) {
            throw new Exception("Esto no puede estar vacio");
        }
        if (empty($address_id)) {
            throw new Exception("Esto no puede estar vacio");
        }
        if (empty($email)) {
            throw new Exception("Esto no puede estar vacio");
        }
        if (empty($store_id)) {
            throw new Exception("Esto no puede estar vacio");
        }
        if (empty($username)) {
            throw new Exception("Esto no puede estar vacio");
        }
        if (empty($password)) {
            throw new Exception("Esto no puede estar vacio");
        }
        if (empty($last_update)) {
            throw new Exception("Esto no puede estar vacio");
        }
        //guardar
        $query = "INSERT INTO staff ('first_name', 'last_name', 'address_id', 'email', 'store_id', 'username', 'password', 'last_update') VALUES ('$first_name', '$last_name', '$address_id', '$email','$store_id', '$username','$password', '$last_update')";

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

//refrezcar 
#incluir la vista
require_once "vistas/vista_staff.php";

#no debe haber codigo despues de esta linea 
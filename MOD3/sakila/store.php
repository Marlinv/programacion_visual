<?php 

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = "store";

$error = "";

#borrar esto despues
echo "<pre>";
print_r($_POST);
echo "</pre>";
 //verificar si le da click al boton
if (isset($_POST['boton-guardar'])) {
    echo "guardando...";

     //variable
    $manager_staff_id = $_POST["manager_staff_id"];
    $address_id = $_POST["address_id"];
     //validacion
    if (empty($manager_staff_id)) {
        throw new Exception("Esto no puede estar vacio");
    }
    if (empty($address_id)) {
        throw new Exception("Esto no puede estar vacio");
    }
     //guardar
    $query = "INSERT INTO store ('manager_staff_id','address_id') VALUES ('$manager_staff_id', '$address_id')";

    $resultado = $conexion->query($query) or die("Error en query");

    if ($resultado) {
        $_SESSION['mensaje'] = "Datos insertados correctamente";

        $script_alerta = alerta("Insertado", "no puede insertar", "success");
    
    } else {

        $script_alerta = alerta("Error", "no puede insertar", "success");

        throw new Exception("No se puede insertar los datos");

        }     
    } 
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}

#incluir la vista
require_once "vistas/vista_store.php";

#no debe haber codigo despues de esta linea
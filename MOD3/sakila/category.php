
<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = "Category";

$error = "";

try {

    #borrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al boton
    if (isset($_POST["boton-guardar"])) {
        echo "guardando...";
        //variable
        $categoria = $_POST['categoria'];
        //validacion
        if (empty($name)) {
            throw new Exception("El nombre no puede estar vacio");
        }
        //guardar
        $query = "INSERT INTO category (name) VALUES ('$name')";

        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos procesado correctamente";

            $script_alerta = alerta("Insertado", "Datos Insertado correctamente", "success");
        } else {
            $script_alerta = alerta("Error", "No se puede Insertar", "error");

            throw new Exception("No se pudo insertar los datos");
        }
        //refrezcar 
        //refrezcar('categoria.php');
    }

    if (isset($_POST['editar'])) {
        $category_id = $_GET['editar'];

        $query = "SELECT*FROM category WHERE category_id = '$category_id'";

        $resultado = mysqli_query($conexion, $query);
        $id = $_POST ['id'] ?? '';

        if ( !empty($id) ){
            $query = "UPDATE category SET name = '$category_id' WHERE category_id = '$id' ";
            $script_alerta = alerta("Insertado", "Datos Insertado", "success");

        } else {
            $script_alerta = alerta("Insertado", "No se pudo Insertado", "error");

        } throw new Exception("No se pudo Insertado los datos"); 
    
    }

    if (isset($_POST['Eliminar'])) {
        $category_id = $_GET['Eliminar'];

        $query = "SELECT*FROM category WHERE category_id = '$category_id'";

        $resultado = mysqli_query($conexion, $query);
        $id = $_POST ['id'] ?? '';

        if ( !empty($id) ){
            $query = "UPDATE category SET name = '$category_id' WHERE category_id = '$id' ";
            $script_alerta = alerta("Eliminado", "Datos eliminados", "success");

        } else {
            $script_alerta = alerta("Eliminado", "No se pudo eliminar", "error");

        } throw new Exception("No se pudo eliminar los datos"); 
    
    }
        #guardar

    if ($resultado)
    {
        while ($fila = mysqli_fetch_object($resultado)){
            $category_id = $fila->category_id;
            $category = $fila->category;
    }
    }
} catch (Throwable $ex) {
    $error = $ex->getMessage();
}

#incluir la vista
require_once "vistas/vista_category.php";

#no debe haber codigo despues de esta linea
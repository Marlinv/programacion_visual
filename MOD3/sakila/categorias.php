
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
    if (isset($_POST["boton-guardar"]) ) {
        echo "guardando...";
        //variable
        $name = $_POST['name'];
        //validacion
        if (empty($name)){
            throw new Exception ("El nombre no puede estar vacio");
        }
        //guardar
        $query = "INSERT INTO category (name) VALUES ('$name')";

        $resultado = $conexion-> query($query) or die ("Error en query");

        if ($resultado){
            $_SESSION['mensaje'] = "Datos insertados correctamente";

            $script_alerta = alerta("Insertado", "Datos Insertado correctamente", "success");

        } else{ 
            $script_alerta = alerta("Error", "No se puede Insertar", "error");

            throw new Exception("No se pudo insertar los datos");
        }
        //refrezcar 
        //refrezcar('categoria.php');
        } 
        
    } catch(Throwable $ex){
            $error = $ex->getMessage();
        }

#incluir la vista
require_once "vistas/vista_categorias.php";

#no debe haber codigo despues de esta linea
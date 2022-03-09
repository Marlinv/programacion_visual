
<?php 

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina = "city";

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
        $city = $_POST ["city"];
        $country_id = $_POST ["country_id"];        
        
        //validacion
        if (empty($city)){
            throw new Exception ("La ciudad no puede estar vacio");
        }
        if (empty($country_id)){
            throw new Exception ("Debe seleccionar el pais");
        }
        //guardar
        $query = "INSERT INTO city (city, country_id) VALUES ('$city','$country_id')";

        $resultado = $conexion-> query($query) or die ("Error en query");

        if ($resultado){
            $_SESSION['mensaje'] = "Datos insertados correctamente";

            $script_alerta = alerta("Insertado", "Datos Insertado correctamente", "success");

        } else{ 
            $script_alerta = alerta("Error", "No se puede Insertar", "success");
        }
        //refrezcar 
            refrezcar('paises.php');
        } 
        
    } catch(Throwable $ex){
            $error = $ex->getMessage();
        }

#incluir la vista
require_once "vistas/vista_paises.php";

#no debe haber codigo despues de esta linea
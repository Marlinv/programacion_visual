<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container w-50">
        <h3>En que mes estamos </h3>

        <form action="" method="get">
            <div class="mb -3">
                <label for="">mes</label>
                <input type="text" name="mes" class="form-control">

                <button class="btn btn-primary">Enviar</button>

            </div>
        </form>

<?php
$mes = $_GET['mes'];
    //Digitar un número y mostrar qué mes del año es. 
//Validar que no se pueda digitar un número que no sea mayor que 12 o menor que 1.
if ($mes==1)
    { 
        echo "enero";
    }
    elseif ($mes==2)
    { 
        echo "febero";
    }
    elseif ($mes==3)
    { 
        echo "marzo";
    }
    elseif ($mes==4)
    { 
        echo "abril";
    }
    elseif ($mes==5)
    { 
        echo "mayo";
    }
    elseif ($mes==6)
    { 
        echo "junio";
    }
    elseif ($mes==7)
    { 
        echo "julio";
    }
    elseif ($mes==8)
    { 
        echo "agosto";
    }
    elseif ($mes==9)
    { 
        echo "septiembre";
    }
    elseif ($mes==10)
    { 
        echo "octubre";
    }
    elseif ($mes==11)
    { 
        echo "noviembre";
    }
    elseif ($mes==12)
    { 
        echo "diciembre";
    }
    elseif ($mes > 12)
    { 
        echo "solo existe 12 meses";
    }
?>
</body>
</html>
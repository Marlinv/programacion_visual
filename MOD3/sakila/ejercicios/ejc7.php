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
        <h5>dime en que semana estamos</h5>

        <form action="" method="get">
            <div class="mb -3">
                <label for="">dia</label>
                <input type="text" name="dia" class="form-control">

                <button class="btn btn-primary">Imprimir</button>

            </div>
        </form>
    <?php
    $semana = $_GET['dia'];
    //Digitar un número y mostrar qué día de la semana es. 
    //Validar que no se pueda digitar un número que no sea mayor que 7 o menor que 1.
    
    if ($semana ==1)
    { 
        echo "Lunes";
    }
    elseif ($semana ==2)
    { 
        echo "Martes";
    }
    elseif ($semana ==3)
    { 
        echo "Miercoles";
    }
    elseif ($semana ==4)
    { 
        echo "Jueves";
    }
    elseif ($semana ==5)
    { 
        echo "Viernes";
    }
    elseif ($semana ==6)
    { 
        echo "Sabado";
    }
    elseif ($semana ==7)
    { 
        echo "Domingo";
    }

    elseif ($semana > 7)
    { 
        echo "solo existe 7 semanas";
    }
    ?>
</body>
</html>
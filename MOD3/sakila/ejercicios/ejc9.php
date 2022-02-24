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
        <h5>Dime tu num</h5>

        <form action="" method="get">
            <div class="mb -3">
                <label for="">par o impar, es:</label>
                <input type="text" name="impar" class="form-control">

                <button class="btn btn-primary">Enviar</button>

            </div>
        </form>
<?php
        print_r($_GET);
        //Digitar un número y decir si es par o impar
        for ($i =0; $i <=100; $i++) 
        { 

        if ($i % 2 ==0){ 
            echo "El num: " .$i. "es par! </br>";
        } else { 
            echo "El num: " .$i. "es Impar! </br>";
        }

        }
?>
    </div>
</body>

</html>
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
        <h5>determinar Numero en pares</h5>

        <form action="" method="get">
            <div class="mb -3">
                <button class="btn btn-primary">resultado</button>

            </div>
        </form>
    <?php
    //Imprimir los números pares del 1 al 100.
    for ($i=1; $i <=100; $i++){
        if ($i % 2 ==0) {
            echo "<br>" .$i."</br>";
        }
    }
    ?>
</div>
</body>
</html>
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
        <h5>Imprime el año de nacimiento</h5>

        <form action="" method="get">
            <div class="mb -3">
            <label for="">año</label>
                <input type="text" name="año" class="form-control">
                <label for="">nacimiento</label>
                <input type="text" name="nacimiento" class="form-control">

                <button class="btn btn-primary">Calcular</button>

            </div>
        </form>
        <?php
        print_r($_GET);
        //Digitar el año de nacimiento e imprimir la edad actual
        $año = 2022;
        $nacimiendo = intval($_GET["nacimiento"]);
        $calcular = ($año - $nacimiendo);
        echo "$calcular";
        ?>
    </div>
</body>

</html>